<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Branch_controller extends MX_Controller {

public function __construct()
	{
		parent::__construct();
		
		$this->load->model(array(
			'Branch_model'
		));		 
	}

public function branch_view()
	{   
        $this->permission->method('branch','read')->redirect();

		$data['title']    = display('branch');  ;
		$data['mang']     = $this->Branch_model->branch_view();
		$data['module']   = "branch";
		$data['page']     = "branch_view";   
		echo Modules::run('template/layout', $data); 
	}


public function branch_create($data = array())
    {
        return $this->db->insert('branch_create', $data);
    }

public function create_branch()
    { 
        $this->form_validation->set_rules('branch_name',display('branch_name'));
        $this->form_validation->set_rules('branch_code',display('branch_code'));
        $this->form_validation->set_rules('branch_address',display('branch_address'),'max_length[50]');
       
     
        #-------------------------------#
        if ($this->form_validation->run() === true) {

                    
            $postData = [
            'branch_name'                 => $this->input->post('branch_name',true),
            'branch_code'                 => $this->input->post('branch_code',true),
            'branch_address'              => $this->input->post('branch_address',true),
                            
            ];   

            if ($this->Branch_model->branch_create($postData)) { 
                $this->session->set_flashdata('message', display('successfully_created'));
            } else {
                $this->session->set_flashdata('exception',  display('please_try_again'));
            }
            redirect("branch/Branch_controller/create_branch");

        } else {
            $data['title']  = display('branch');
            $data['module'] = "branch";//
            $data['mang']   = $this->Branch_model->branch_view();
             $data['dropdown']   = $this->Branch_model->dropdown();
            $data['page']   = "branch_form";   
          echo Modules::run('template/layout', $data); 
        }   
    } 




    public function update_branch_form($id = null)
    { 
        $data['title'] = display('branch');
        #-------------------------------#
        $this->form_validation->set_rules('branch_id',display('branch_id'));
        $this->form_validation->set_rules('branch_name',display('branch_name'));
        $this->form_validation->set_rules('branch_code',display('branch_code'));
        $this->form_validation->set_rules('branch_address',display('branch_address'),'max_length[50]');
               
        #-------------------------------#
        if ($this->form_validation->run() === true) {

            $Data = [    'branch_id'  =>$this->input->post('branch_id',true),
    
                'branch_name'                   => $this->input->post('branch_name',true),
                'branch_code'             =>$this->input->post('branch_code',true),
                'branch_address'                       => $this->input->post('branch_address',true),
              
            ];   

            if ($this->Branch_model->update_branch($Data)) { 
                $this->session->set_flashdata('message', display('successfully_updated'));
            } else {
                $this->session->set_flashdata('exception',  display('please_try_again'));
            }
            redirect("branch/Branch_controller/branch_view");

        } else {
            $data['title']     = display('update');
            $data['data']      = $this->Branch_model->branch_updateForm($id);
            $data['dropdown']  = $this->Branch_model->dropdown();
            $data['bb']        = $this->Branch_model->get_id($id);
            $data['module']    = "branch";    
            $data['page']      = "update_branch_form";   
            echo Modules::run('template/layout', $data);  
        }   
    } 

    public function delete_branch($id = null) 
    { 
        $this->permission->method('branch','delete')->redirect();

        if ($this->Branch_model->branch_delete($id)) {
            #set success message
            $this->session->set_flashdata('message',display('delete_successfully'));
        } else {
            #set exception message
            $this->session->set_flashdata('exception',display('please_try_again'));

        }
        redirect("branch/Branch_controller/branch_view");
    }  


}
