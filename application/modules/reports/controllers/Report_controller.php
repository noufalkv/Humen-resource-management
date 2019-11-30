
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report_controller extends MX_Controller {

    public function __construct()
    {
      parent::__construct();

      $this->load->model(array(
         'report_model'
     ));		 
  }

  

public function bonus()
{   
    $this->permission->method('reports','read')->redirect();
    $id = $this->input->post('employee_id');
    $data['title']    = display('customr_info'); 
        #-------------------------------#       
        #
        #pagination starts
        #
    $config["base_url"] = base_url('reports/Report_controller/bonus_report');
    $config["total_rows"]  = $this->report_model->count_custom_data($id);
    $config["per_page"]    = 10;
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
    $data["emp_custom"] = $this->report_model->custom_report($config["per_page"], $page,$id);
    $data["links"] = $this->pagination->create_links();
        #
        #pagination ends
        # 
    $data['id'] = $id; 
   // $data['dropdownemp'] = $this->report_model->employee_drop();
   if($this->input->post('branch'))
		{
			$branch_id = $this->input->post('branch');
			$data['branch_id']   = $branch_id;	
		}
	/*	if($branch_id != '')
		{
			$data['emp_history']   = $this->report_model->emp_list_by_branch($branch_id);
		}
		else
		{
			$data['emp_history']   = $this->report_model->emp_list();
		}*/
	$data['emp_history']   = $this->report_model->emp_list();
	$this->permission->module('reports','read')->redirect();
    $data['branch_options']   = $this->report_model->branch_view();	
    $data['module'] = "reports";
    $data['page']   = "bonus_list";   
    echo Modules::run('template/layout', $data); 
}      

public function salary()
{   
    $this->permission->method('reports','read')->redirect();
    $id = $this->input->post('employee_id');
    $data['title']    = display('customr_info'); 
        #-------------------------------#       
        #
        #pagination starts
        #
    $config["base_url"] = base_url('reports/Report_controller/salary_report');
    $config["total_rows"]  = $this->report_model->count_custom_data($id);
    $config["per_page"]    = 10;
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
    $data["emp_custom"] = $this->report_model->custom_report($config["per_page"], $page,$id);
    $data["links"] = $this->pagination->create_links();
        #
        #pagination ends
        # 
    $data['id'] = $id; 
   // $data['dropdownemp'] = $this->report_model->employee_drop();
   if($this->input->post('branch'))
		{
			$branch_id = $this->input->post('branch');
			$data['branch_id']   = $branch_id;	
		}
	/*	if($branch_id != '')
		{
			$data['emp_history']   = $this->report_model->emp_list_by_branch($branch_id);
		}
		else
		{
			$data['emp_history']   = $this->report_model->emp_list();
		}*/
     //  $this->permission->module('report','read')->redirect();
		$data['title']         = display('view_salary_setup');  
		$data['branch_options']   = $this->report_model->branch_view();
		$data['emp_sl_setup']  = $this->report_model->salary_setupindex_report();
    $data['module'] = "reports";
    $data['page']   = "salary_report"; 
   
    echo Modules::run('template/layout', $data); 
}  

public function esi()
{   
    $this->permission->method('reports','read')->redirect();
    $id = $this->input->post('employee_id');
    $data['title']    = display('customr_info'); 
        #-------------------------------#       
        #
        #pagination starts
        #
    $config["base_url"] = base_url('reports/Report_controller/esi_report');
    $config["total_rows"]  = $this->report_model->count_custom_data($id);
    $config["per_page"]    = 10;
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
    $data["emp_custom"] = $this->report_model->custom_report($config["per_page"], $page,$id);
    $data["links"] = $this->pagination->create_links();
        #
        #pagination ends
        # 
    $data['id'] = $id; 
   // $data['dropdownemp'] = $this->report_model->employee_drop();
   if($this->input->post('branch'))
		{
			$branch_id = $this->input->post('branch');
			$data['branch_id']   = $branch_id;	
		}
	/*	if($branch_id != '')
		{
			$data['emp_history']   = $this->report_model->emp_list_by_branch($branch_id);
		}
		else
		{
			$data['emp_history']   = $this->report_model->emp_list();
		}*/
     //  $this->permission->module('report','read')->redirect();
		$data['title']         = display('view_salary_setup');  ;
		$data['branch_options']   = $this->report_model->branch_view();
		$data['esi']  = $this->report_model->esi_report();
    $data['module'] = "reports";
    $data['page']   = "esi_report"; 
   //echo "<pre>";
   //print_r($data);exit(0);
    echo Modules::run('template/layout', $data); 
}  


public function wps()
{   
    $this->permission->method('reports','read')->redirect();
    $id = $this->input->post('employee_id');
    $data['title']    = display('customr_info'); 
        #-------------------------------#       
        #
        #pagination starts
        #
    $config["base_url"] = base_url('reports/Report_controller/wps_report');
    $config["total_rows"]  = $this->report_model->count_custom_data($id);
    $config["per_page"]    = 10;
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
    $data["emp_custom"] = $this->report_model->custom_report($config["per_page"], $page,$id);
    $data["links"] = $this->pagination->create_links();
        #
        #pagination ends
        # 
    $data['id'] = $id; 
   // $data['dropdownemp'] = $this->report_model->employee_drop();
   if($this->input->post('branch'))
		{
			$branch_id = $this->input->post('branch');
			$data['branch_id']   = $branch_id;	
		}
	/*	if($branch_id != '')
		{
			$data['emp_history']   = $this->report_model->emp_list_by_branch($branch_id);
		}
		else
		{
			$data['emp_history']   = $this->report_model->emp_list();
		}*/
     //  $this->permission->module('report','read')->redirect();
		$data['title']         = display('view_salary_setup');  ;
		$data['branch_options']   = $this->report_model->branch_view();
		$data['emp_sl_setup']  = $this->report_model->salary_setupindex_report_wps();
        $data['module'] = "reports";
        $data['page']   = "wps_report"; 
  // echo "<pre>";
   //print_r($data);exit(0);
    echo Modules::run('template/layout', $data); 
} 

}
