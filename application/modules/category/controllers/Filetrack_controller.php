<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Filetrack_controller extends MX_Controller {

public function __construct()
	{
		parent::__construct();
		
		$this->load->model(array(
			'Category_model',
		));		 
	}

public function index()
    {   
        $this->permission->method('category','read')->redirect();
        $data['title']    = display('list'); 
        #-------------------------------#       
        #
        #pagination starts
        #
        $config["base_url"] = base_url('category/filetrack_controller/index');
        $config["total_rows"]  = $this->Category_model->count_filetrack();
        $config["per_page"]    = 25;
        $config["uri_segment"] = 4;
        $config["last_link"] = "Last"; 
        $config["first_link"] = "First"; 
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Prev';  
        $config['full_tag_open'] = "<ul class='pagination col-xs pull-right'>";
        $config['full_tag_close'] = "</ul>";
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
        $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
        $config['next_tag_open'] = "<li>";
        $config['next_tag_close'] = "</li>";
        $config['prev_tag_open'] = "<li>";
        $config['prev_tagl_close'] = "</li>";
        $config['first_tag_open'] = "<li>";
        $config['first_tagl_close'] = "</li>";
        $config['last_tag_open'] = "<li>";
        $config['last_tagl_close'] = "</li>";
        /* ends of bootstrap */
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        
        $data["links"] = $this->pagination->create_links();
        #
        #pagination ends
        #   
        
        if($this->input->post('category'))
		{
		
			$cat_id = $this->input->post('category');
	     $data['cat_id']   = $cat_id;	
		}
		
		
		if( $cat_id != '')
		{
			$data['filetrack']   = $this->Category_model->read_filetrack_cat($cat_id);
		
		
		
		
		}
		else
		{
		   
		 $data["filetrack"] = $this->Category_model->read_filetrack($config["per_page"], $page);
		}
		
		 $data["category"] = $this->Category_model->category_dropdown();
        $data['module'] = "category";
        $data['page']   = "filetrack_list";   
        echo Modules::run('template/layout', $data); 
    }  


public function filetrack_form($id = null)
 {
  $this->permission->method('category','create')->redirect();
  $data['title'] = display('add_filetrack');
  #-------------------------------#
  $this->form_validation->set_rules('filetrack_name', display('filetrack_name')  ,'required|max_length[100]');
  #-------------------------------#
  $this->load->library('MyUpload');
$img = $this->myupload->do_upload(
			'./application/modules/category/assets/official_files/', 
			'filetrack_file'	
			);
   $data['filetrack']   = (Object) $postData = [
   'file_id'          => $this->input->post('file_id'), 
   'file_name'    => $this->input->post('filetrack_name'),
   'file_desc'    => $this->input->post('filetrack_desc'),
   'file_reg'    => $this->input->post('filetrack_reg'),
   'file_exp'    => $this->input->post('filetrack_exp'),
   'filee_file'    => $img,
   'file_status'    => "Opened",
   'parent_id'        => $this->input->post('parent_id'),
   'branch_id' => $this->session->userdata('branch_id')
   
  ];


  if ($this->form_validation->run()) { 
   $this->load->library('MyUpload');
   if (empty($postData['file_id'])) {
     print_r($img);exit(0);
    if ($this->Category_model->filee_create($postData)) { 
     $this->session->set_flashdata('message', display('save_successfully'));
     redirect('category/filetrack_controller/index');
    } else {
     $this->session->set_flashdata('exception',  display('please_try_again'));
    }
    redirect("category/Filetrack_controller/filetrack_form"); 

   } else {

   if ($this->Category_model->update_file($postData)) { 
     $this->session->set_flashdata('message', display('update_successfully'));
      redirect("category/Filetrack_controller/index/"); 
    } else {
     $this->session->set_flashdata('exception',  display('please_try_again'));
      redirect("category/Filetrack_controller/filetrack_form/".$postData['file_id']); 
    }  
   }

  } else { 
   if(!empty($id)) {
    $data['title'] = display('update_filetrack');
    $data['filetrack']   = $this->Category_model->findByFileId($id);
   }
   $data['module'] = "category";
   $data['category']  = $this->Category_model->category_dropdown();
   $data['page']   = "filetrack_form";   
   echo Modules::run('template/layout', $data); 
   }   
 }


 public function delete_filetrack($id=null){
    
        if($this->Category_model->file_delete($id)) {
            #set success message
            $this->session->set_flashdata('message',display('delete_successfully'));
        } else {
            #set exception message
            $this->session->set_flashdata('exception',display('please_try_again'));
        }
        redirect('category/Filetrack_controller/index');
    }
    
    
 public function employee_file_form($id = null)
 {
     
  $this->permission->method('category','create')->redirect();
  $data['title'] = display('add_filetrack');
  	$data['employee']=$this->Category_model->employee();
  #-------------------------------#
  $this->form_validation->set_rules('filetrack_name', display('filetrack_name')  ,'required|max_length[100]');
  #-------------------------------#
  $this->load->library('MyUpload');
  $employee = $this->input->post('employee');
$img = $this->myupload->do_upload(
			'./application/modules/category/assets/employee_files/', 
			'filetrack_file', $employee	
			);
		
		
   $data['filetrack']   = (Object) $postData = [
   'file_id'          => $this->input->post('file_id'), 
   'file_name'    => $this->input->post('filetrack_name'),
   'file_desc'    => $this->input->post('filetrack_desc'),
   'file_reg'    => $this->input->post('filetrack_reg'),
   'file_exp'    => $this->input->post('filetrack_exp'),
   'file_emp'    => $this->input->post('employee'),
   'filee_file'    => (!empty($img) ? $img : $this->input->post('file_read')),
   'file_status'    => "Opened",
   'parent_id'        => $this->input->post('parent_id'),
   'branch_id' => $this->session->userdata('branch_id')
   
  ];


  if ($this->form_validation->run()) { 
      
     $this->load->library('myupload');
     /*echo "<pre>";
        print_r($data['filetrack']);
        echo $img;
        exit(0);*/
   if (empty($postData['file_id'])) {
    if ($this->Category_model->create_employee_file($postData)) {
        
     $this->session->set_flashdata('message', display('save_successfully'));
     redirect('category/Filetrack_controller/employee_file_list');
    } else {
     $this->session->set_flashdata('exception',  display('please_try_again'));
    }
    redirect("category/Filetrack_controller/employee_file_form"); 

   } else {

  

    if ($this->Category_model->update_employee_file($postData)) { 
     $this->session->set_flashdata('message', display('update_successfully'));
      redirect("category/Filetrack_controller/employee_file_list/"); 
    } else {
     $this->session->set_flashdata('exception',  display('please_try_again'));
      redirect("category/Filetrack_controller/employee_file_form/".$postData['file_id']); 
    }  
   }

  } else { 
   if(!empty($id)) {
    $data['title'] = display('update_filetrack');
    $data['filetrack']   = $this->Category_model->findByEmployeeId($id);
   }
   $data['module'] = "category";
   $data['category']  = $this->Category_model->category_emp_dropdown();
   $data['employee'] = $this->Category_model->employee();
   $data['page']   = "employee_file_form";   
   echo Modules::run('template/layout', $data); 
   }   
 }
 
 
 public function employee_file_list(){
      $this->permission->method('category','read')->redirect();
        $data['title']    = display('list'); 
        #-------------------------------#       
        #
        #pagination starts
        #
        $config["base_url"] = base_url('category/filetrack_controller/employee_file_list');
        $config["total_rows"]  = $this->Category_model->count_employee_track();
        $config["per_page"]    = 25;
        $config["uri_segment"] = 4;
        $config["last_link"] = "Last"; 
        $config["first_link"] = "First"; 
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Prev';  
        $config['full_tag_open'] = "<ul class='pagination col-xs pull-right'>";
        $config['full_tag_close'] = "</ul>";
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
        $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
        $config['next_tag_open'] = "<li>";
        $config['next_tag_close'] = "</li>";
        $config['prev_tag_open'] = "<li>";
        $config['prev_tagl_close'] = "</li>";
        $config['first_tag_open'] = "<li>";
        $config['first_tagl_close'] = "</li>";
        $config['last_tag_open'] = "<li>";
        $config['last_tagl_close'] = "</li>";
        /* ends of bootstrap */
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
      
        $data["links"] = $this->pagination->create_links();
        #
        #pagination ends
        # 
        
        
        if($this->input->post('employee_id'))
		{
		
			$emp_id = $this->input->post('employee_id');
	     $data['emp_id']   = $emp_id;	
		}
		
		if($this->input->post('category'))
		{
		
			$cat_id = $this->input->post('category');
	     $data['cat_id']   = $cat_id;	
		}
		
		
		if($emp_id != '' || $cat_id != '')
		{
			$data['filetrack']   = $this->Category_model->read_employee_filetrack_emp($emp_id,$cat_id);
		
		
		
		
		}
		else
		{
		   
		 $data["filetrack"] = $this->Category_model->read_employee_filetrack($config["per_page"], $page);
		}
		
		
		 $data["employee"] = $this->Category_model->employee();	
		 $data["category"] = $this->Category_model->category_emp_dropdown();	
        $data['module'] = "category";
        $data['page']   = "employee_file_list";   
        echo Modules::run('template/layout', $data); 
     
     
     
 }
 
 
/* public function manageemployee_list(){
      $this->permission->method('category','read')->redirect();
        $data['title']    = display('list'); 
        $data["filetrack"] = $this->Category_model->employee();
       $data["filetrack"] = $this->Category_model->read_employee_filetrack($config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();
        #
        #pagination ends
        #   
        $data['module'] = "category";
        $data['page']   = "employee_file_list";   
        echo Modules::run('template/layout', $data); 
     
     
      if($this->input->post('employee'))
		{
			$emp_id = $this->input->post('employee');
			$data['emp_id']   = $emp_id;	
		}
		if($branch_id != '')
		{
			$data['filetrack']   = $this->Employees_model->read_employee_filetrack($emp_id);
		}
		else
		{
			$data['filetrack']   = $this->Employees_model->read_employee_filetrack();
		}
		$this->permission->module('category','read')->redirect();		
		$data['title']    = display('list');  		
		 $data["employee"] = $this->Category_model->employee();	
		$data['module']   = "category";
		$data['page']     = "employee_file_list";
		echo Modules::run('template/layout', $data);
     
     
 }*/
 
 
 
 public function delete_employee_file($id=null){
    
        if($this->Category_model->employee_file_delete($id)) {
            #set success message
            $this->session->set_flashdata('message',display('delete_successfully'));
        } else {
            #set exception message
            $this->session->set_flashdata('exception',display('please_try_again'));
        }
        redirect('category/Filetrack_controller/employee_file_list');
    }
    
	
     

}
