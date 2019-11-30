<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category_controller extends MX_Controller {

public function __construct()
	{
		parent::__construct();
		
		$this->load->model(array(
			'Category_model',
		));		 
	}

public function cat_view()
	{   
        $this->permission->method('category','read')->redirect();

		$data['title']    = display('category');  ;
		$data['mang']   = $this->Category_model->cat_view();
		$data['module']   = "category";
		$data['page']     = "category_view";   
		echo Modules::run('template/layout', $data); 
	}





public function create_cat()
    { 
        $data['title'] = display('category');
        #-------------------------------#
        $this->form_validation->set_rules('category_name',display('category_name'),'required|max_length[150]');
       
        
      
        #-------------------------------#
        if ($this->form_validation->run() === true) {

            $postData = [
            'category_name'      => $this->input->post('category_name',true),
           
		       'branch_id' => $this->session->userdata('branch_id'),
		        'type' => $this->input->post('type',true)
		
            
                
            ];   

            if ($this->Category_model->cat_create($postData)) { 
                $this->session->set_flashdata('message', display('successfully_saved'));
            } else {
                $this->session->set_flashdata('exception',  display('please_try_again'));
            }
            redirect("category/Category_controller/create_cat");



        } else {
            $data['title']  = display('category');
            $data['module'] = "category";
            $data['mang'] = $this->Category_model->cat_view();
            $data['page']   = "cat_form";   
          echo Modules::run('template/layout', $data); 
        }   
    }

 public function delete_cat($id=null){
        $this->permission->module('category','delete')->redirect();
        if($this->Category_model->cat_delete($id)) {
            #set success message
            $this->session->set_flashdata('message',display('delete_successfully'));
        } else {
            #set exception message
            $this->session->set_flashdata('exception',display('please_try_again'));
        }
        redirect('category/Category_controller/cat_view');
    }

	public function update_cat_form($id = null)
    { 
       $this->form_validation->set_rules('cat_id',display('cat_id'));
        $this->form_validation->set_rules('category_name',display('category_name'),'required|max_length[150]');
       
        #-------------------------------#
        if ($this->form_validation->run() === true) {

            $Data = [    
            'cat_id'   =>$this->input->post('cat_id',true),
            
            'category_name' => $this->input->post('category_name',true),
            
            'type' => $this->input->post('type',true),
            
            ];   

            if ($this->Category_model->update_cat($Data)) { 
                $this->session->set_flashdata('message', display('successfully_updated'));
            } else {
                $this->session->set_flashdata('exception',  display('please_try_again'));
            }
            redirect("category/Category_controller/cat_view");



        } else {
           $data['title']      = display('update');
            $data['data']      =$this->Category_model->cat_updateForm($id);
            $data['module']    = "category";    
            $data['page']      = "update_cat_form";   
            echo Modules::run('template/layout', $data);  
        }      
    }

     

}
