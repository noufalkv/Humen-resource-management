<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Evaluation extends MX_Controller {
	
	public function __construct()
	{
		parent::__construct();
		
		$this->load->model(array(
			'Evaluation_model'
			
		));	
		//$this->load->library('myupload');	 
	}

	public function AddEvaluation()
	{
		$this->permission->module('employee','read')->redirect();
		$data['title']    = "Evaluation" ;/*display('view_salary_setup');*/
		$data['module']   = "employee";
		$data['page']     = "add_evaluation_form";  
		$data['employee']=$this->Evaluation_model->employee();
		$data['dept'] = $this->Evaluation_model->department_dropdown();
		$option = array('' => 'Select');
		$option[1] = '1';
		$option[2] = '2';
		$option[3] = '3';
		$option[4] = '4';
		$option[5] = '5';
        $data['option'] = $option;
	 
	 /* Add Evaluation */
	 
	 
			$postDataNew = [
		'employee_id'    			=> $this->input->post('employee_id',true),
		'start_date'    			=> $this->input->post('start_date',true),
			'dept_id'    			=> $this->input->post('department',true),
			'scored1'    			=> $this->input->post('scored1',true),
			'target1'    			=> $this->input->post('target1',true),
			'month1'    			=> $this->input->post('month1',true),
			'scored2'    			=> $this->input->post('scored2',true),
			'target2'    			=> $this->input->post('target2',true),
			'month2'    			=> $this->input->post('month2',true),
			'scored3'    			=> $this->input->post('scored3',true),
			'target3'    			=> $this->input->post('target3',true),
			'month3'    			=> $this->input->post('month3',true),
			'serviced1'    			=> $this->input->post('serviced1',true),
			'month4'    			=> $this->input->post('month4',true),
			'serviced2'    			=> $this->input->post('serviced2',true),
			'month5'    			=> $this->input->post('month5',true),
			'serviced3'    			=> $this->input->post('serviced3',true),
			'month6'    			=> $this->input->post('month6',true),
			
			'end_date'    			=> $this->input->post('end_date',true),
			'qow_outofmark'           	=> '15',
			'qow_q1'           			=> $this->input->post('qow_q1',true),
			'qow_q2'           			=> $this->input->post('qow_q2',true),
			'qow_q3'           			=> $this->input->post('qow_q3',true),
			'qow_total'           			=> $this->input->post('qow_total',true),
			'wh_outofmark'           	=> '20',
			'wh_q1'           			=> $this->input->post('wh_q1',true),
			'wh_q2'           		    => $this->input->post('wh_q2',true),
			'wh_q3'           			=> $this->input->post('wh_q3',true),
			'wh_q4'                     => $this->input->post('wh_q4',true),
			'wh_total'           			=> $this->input->post('wh_total',true),
			'jk_outofmark'           	=> '15',
			'jk_q1'           	=> $this->input->post('jk_q1',true),
			'jk_q2'          => $this->input->post('jk_q2',true),
			'jk_q3'           	=> $this->input->post('jk_q3',true),
			'jk_total'           			=> $this->input->post('jk_total',true),
			'irb_outofmark'           	=> '25',
			'irb_q1'           				=> $this->input->post('irb_q1',true),
			'irb_q2'           			=> $this->input->post('irb_q2',true),
			'irb_q3'           		=> $this->input->post('irb_q3',true),
			'irb_q4'           			=> $this->input->post('irb_q4',true),
			'irb_q5'           			=> $this->input->post('irb_q5',true),
			'irb_q6'           	            => $this->input->post('irb_q6',true),
			'irb_total'           			=> $this->input->post('irb_total',true),
			'leader_outofmark'           	=> '25',
			'leader_q1'           	        => $this->input->post('leader_q1',true),
			'leader_q2'           	        => $this->input->post('leader_q2',true),
			'leader_q3'           		    => $this->input->post('leader_q3',true),
			'leader_total'           		=> $this->input->post('leader_total',true),
			'op_q1'           		        => $this->input->post('op_q1',true),
			'op_q2'           		        => $this->input->post('op_q2',true),
			'op_q3'           		        => $this->input->post('op_q3',true),
			'final_comment'           		=> $this->input->post('final_comment',true),
			'recommendation'           		=> $this->input->post('recommendation',true),
			'evaluator_name'           		=> $this->input->post('evaluator_name',true),
			'eval_purpose'           		=> $this->input->post('eval_purpose',true),
			'dateval'						=> $this->input->post('dateval',true),
			'total'                         => $this->input->post('total',true)
			];
			/* echo "<pre>";
			print_r($postDataNew);
			echo "</pre>";
			exit; */
			$this->Evaluation_model->employe_eval($postDataNew);
	 
	 /* End Of Add Evaluation*/
		echo Modules::run('template/layout', $data); 
	}
	
	public function ManageEvaluation()
	{
		$this->permission->module('employee','read')->redirect();
		$data['title']    = "Evaluation" ;/*display('view_salary_setup');*/
		$data['module']   = "employee";
		$data['page']     = "evaluation_view";  
		 if($this->input->post('branch'))
		{
			$branch_id = $this->input->post('branch');
			$data['branch_id']   = $branch_id;	
		}
		if($branch_id != '')
		{
				$data['eval_det'] = $this->Evaluation_model->eval_detail_by_branch($branch_id);
		}
		else
		{
				$data['eval_det'] = $this->Evaluation_model->eval_detail();
		}
		
		
		$data['title']    = display('evaluation_view');  
		
		$data['branch_options']   = $this->Evaluation_model->branch_view();
		//echo '<pre>';
		//print_r($data);exit();
		
		//$data['employee']=$this->Evaluation_model->eval_view();
		echo Modules::run('template/layout', $data); 
	}
	
	public function getemployee(){
		
		$id = $this->input->post('employee_id');

		$data = $this->db->select('*')->from('employee_history')->where('employee_id',$id)->get()->row();
		$pos=$data->pos_id;
		//$dept=$data->division_id;
		$postn= $this->db->select('position_name')->from('position')->where('pos_id',$pos)->get()->row();
		//$deptnt= $this->db->select('department_name')->from('position')->where('dept_id',$dept)->get()->row();
		
		$sent = array(
			'basic' =>  $data->rate,
			'picture' =>$data->picture,
			'position_name' => $postn->position_name,
			'hire_date' =>$data->hire_date
		);
		
		echo json_encode($sent);
	}
	
	

	public function delete_eval($id = null)
	{
		$this->db->where('eval_id',$id)
			->delete('employee_evaluation');

		if ($this->db->affected_rows()) {
			redirect('/Evaluation/ManageEvaluation');
		} else {
			return false;
		}
	} 
	
	 
    public function eval_detail()
    {   
	$this->permission->module('circularprocess','read')->redirect();

	$data['title']    = display('view details');  
	$id              = $this->uri->segment(4);
    $emp_id = 	$this->db->select('employee_id ')->from('employee_evaluation')->where('eval_id',$id)->get()->row();
	$e_id= $emp_id->employee_id;
	$data['eval'] = $this->Evaluation_model->eval_view_detail($id);
		$data['graph']=$this->Evaluation_model->geteval($e_id);
		
		$data['module']   = "employee";
		$data['page']     = "eval_detail";  
	//	echo "<pre>";
		//echo $e_id;
	//	print_r($data);exit(0);
		echo Modules::run('template/layout', $data); 
	}
	
	
	 public function update_eval()
    {   
	
   /* Get Post Data */
   if ($this->form_validation->run() === true) {
   $data['post_data']=$postData=[
            'eval_id'                   => $this->uri->segment(4),
            'employee_id'    			=> $this->input->post('employee_id',true),
            'dept_id'    			=> $this->input->post('department',true),
			'scored'    			=> $this->input->post('scored',true),
			'target'    			=> $this->input->post('target',true),
			'start_date'    			=> $this->input->post('start_date',true),
			'end_date'    			=> $this->input->post('end_date',true),
			'qow_q1'           			=> $this->input->post('qow_q1',true),
			'qow_q2'           			=> $this->input->post('qow_q2',true),
			'qow_q3'           			=> $this->input->post('qow_q3',true),
			'qow_total'           			=> $this->input->post('qow_total',true),
			'wh_q1'           			=> $this->input->post('wh_q1',true),
			'wh_q2'           		    => $this->input->post('wh_q2',true),
			'wh_q3'           			=> $this->input->post('wh_q3',true),
			'wh_q4'                     => $this->input->post('wh_q4',true),
			'wh_total'           			=> $this->input->post('wh_total',true),
			'jk_q1'           	=> $this->input->post('jk_q1',true),
			'jk_q2'          => $this->input->post('jk_q2',true),
			'jk_q3'           	=> $this->input->post('jk_q3',true),
			'jk_total'           			=> $this->input->post('jk_total',true),
			'irb_q1'           				=> $this->input->post('irb_q1',true),
			'irb_q2'           			=> $this->input->post('irb_q2',true),
			'irb_q3'           		=> $this->input->post('irb_q3',true),
			'irb_q4'           			=> $this->input->post('irb_q4',true),
			'irb_q5'           			=> $this->input->post('irb_q5',true),
			'irb_q6'           	            => $this->input->post('irb_q6',true),
			'irb_total'           			=> $this->input->post('irb_total',true),
			'leader_q1'           	        => $this->input->post('leader_q1',true),
			'leader_q2'           	        => $this->input->post('leader_q2',true),
			'leader_q3'           		    => $this->input->post('leader_q3',true),
			'leader_total'           		=> $this->input->post('leader_total',true),
			'op_q1'           		        => $this->input->post('op_q1',true),
			'op_q2'           		        => $this->input->post('op_q2',true),
			'op_q3'           		        => $this->input->post('op_q3',true),
			'final_comment'           		=> $this->input->post('final_comment',true),
			'recommendation'           		=> $this->input->post('recommendation',true),
			'evaluator_name'           		=> $this->input->post('evaluator_name',true),
			'eval_purpose'           		=> $this->input->post('eval_purpose',true),
			'dateval'						=> $this->input->post('dateval',true),
			'total'                         => $this->input->post('total',true)
     
       
       ];
       
			if ($this->Evaluation_model->update_eval($postData)) { 
			 
				$this->session->set_flashdata('message', display('message_sent'));
			} else {
				$this->session->set_flashdata('exception',  display('please_try_again'));
			}
			redirect("employee/Evaluation/ManageEvaluation");
   
      }
   
   
   else {
    	$this->permission->module('circularprocess','read')->redirect();

	$data['title']    = display('update details');  
	$id              = $this->uri->segment(4);
	
	/* details from evaluation table*/
   $data['eval'] = 	$this->db->select('*')->from('employee_evaluation')->where('eval_id',$id)->get()->row();
    $eval=$data['eval'];
   $employee_id=$eval->employee_id;
   //echo $eval->qow_q1;exit(0);
   
   
   /* details from employee table*/
   $data['data']=$this->db->select('*')->from('employee_history')->where('employee_id',$employee_id)->get()->row();
    $data4=$data['data'];
   $pos_id=$data4->pos_id;
   
   /* details from position table*/
    $data['pos']=$this->db->select('*')->from('position')->where('pos_id',$pos_id)->get()->row();
    	$data['dept'] = $this->Evaluation_model->department_dropdown();
    	
		$data['module']   = "employee";
		$data['page']     = "update_eval";  
	//	echo "<pre>";
		//echo $e_id;
		//print_r($data['post_data']);
		echo Modules::run('template/layout', $data); 
    	}
    }

 
	
}

?>