<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Evaluation_model extends CI_Model {
 
    public function employee()
	{
		$this->db->select('*');
        $this->db->from('employee_history');
        $query = $this->db->get();
        $data = $query->result();  
        $list = array('' => 'Select');
       	if (!empty($data) ) {
       		foreach ($data as $value) {
       			$list[$value->employee_id] = $value->first_name.' '.$value->last_name;
       		} 
       	}
       	return $list;
	}
	
	public function employe_eval($postDataNew){
		
		return $this->db->insert('employee_evaluation', $postDataNew);
	}
	
	public function eval_detail(){
	    	$this->db->select('c.*,p.first_name,p.last_name,p.hire_date as hire_date,po.position_name as position');
		$this->db->from('employee_evaluation c');
		$this->db->join('employee_history p', 'c.employee_id = p.employee_id', 'left');
		$this->db->join('position po', 'p.pos_id = po.pos_id', 'left');
		if($this->session->userdata('branch_id')!= 1)
		{
		$this->db->where('p.branch_id',$this->session->userdata('branch_id'));
		}
		
		$this->db->order_by('c.eval_id', 'desc');
		$query = $this->db->get();
		return $report = $query->result();
	}
	
	public function eval_detail_by_branch($branch){
	    $this->db->select('c.*,p.first_name,p.last_name,p.hire_date as hire_date,po.position_name as position');
		$this->db->from('employee_evaluation c');
		$this->db->join('employee_history p', 'c.employee_id = p.employee_id', 'left');
		$this->db->join('position po', 'p.pos_id = po.pos_id', 'left');
		if($this->session->userdata('branch_id')!= 1)
		{
		$this->db->where('p.branch_id',$this->session->userdata('branch_id'));
		}
		if($branch != '')
		{
		$this->db->where('p.branch_id',$branch);	
		}
		
		$this->db->order_by('c.eval_id', 'desc');
		$query = $this->db->get();
		return $report = $query->result();
	    
	}
	
	public function branch_view()
    {
        $data = $this->db->select('*')   
            ->from('branch')
            ->order_by('branch_id', 'desc')
            ->get()
            ->result_array();
		//$list[''] = display('select_option');
		if (!empty($data)) {
			$info = array();
			$info[''] = "ALL" ;
			foreach($data as $value)
			{
			  $info[$value['branch_id']] = $value['branch_name'] ;
			}
		}
		
		return $info;
		
    }
    	public function eval_view_detail($id){
    	    $this->db->where('eval_id',$id);
	    	$this->db->select('c.*,p.first_name,p.last_name,p.picture as picture,p.hire_date as hire_date,p.phone as phone,p.email as email,po.position_name as position');
		$this->db->from('employee_evaluation c');
		$this->db->join('employee_history p', 'c.employee_id = p.employee_id', 'left');
		$this->db->join('position po', 'p.pos_id = po.pos_id', 'left');
		if($this->session->userdata('branch_id')!= 1)
		{
		$this->db->where('p.branch_id',$this->session->userdata('branch_id'));
		}
		if($branch_id != '')
		{
		$this->db->where('p.branch_id',$branch_id);	
		}
		$this->db->order_by('c.eval_id', 'desc');
		$query = $this->db->get();
		return $report = $query->result();
	}
	
    public function geteval($e_id){
		
        /* SELECT SUM(qow_total+wh_total+jk_total) AS functional_total , SUM(irb_total+irb_q6) AS inter_total, SUM(leader_total ) AS leader_total,SUM(op_q1 + op_q2 + op_q3) AS op_total FROM `employee_evaluation` WHERE employee_id= 'EV5FBIF1'*/
	
	//	$data = $this->db->select('SUM(qow_total+wh_total+jk_total) AS functional_total , SUM(irb_total+irb_q6) AS inter_total, SUM(leader_total ) AS leader_total,SUM(op_q1 + op_q2 + op_q3) AS op_total')->from('employee_evaluation')->where('employee_id',$emp_id)->get();
		
		// $this->db->where('employee_id',$e_id);
		// $this->db->group_by("DATE_FORMAT('dateval', '%M')");
	//	$this->db->select('DATE_FORMAT(dateval, "%M") AS Month,SUM(qow_total+wh_total+jk_total) AS functional_total , SUM(irb_total) AS inter_total, SUM(leader_total ) AS leader_total');
        //$this->db->from('employee_evaluation');
        
        //$query = $this->db->get();
   $query =  $this->db->query("SELECT DATE_FORMAT(dateval, '%Y-%m') AS Month , SUM(qow_total+wh_total+jk_total)/COUNT(3) AS functional_total , SUM(irb_total)/COUNT(3) AS inter_total, SUM(leader_total)/COUNT(3)  AS leader_total FROM `employee_evaluation` WHERE employee_id= '$e_id' group by DATE_FORMAT(dateval, '%Y-%m') order by DATE_FORMAT(dateval, '%Y-%m') asc");
        
        if( $query->num_rows() > 0) {
    $result = $query->result(); 
    foreach( $result as $row )
    {
        $chart_data .= "{ m:'".$row->Month."', a:".$row->functional_total.", b:".$row->inter_total.", c:".$row->leader_total."}, ";
    }
    } 
      
				return $chart_data;
		
		
		
	}
	
		public function update_eval($data = array())
	{
		return $this->db->where('eval_id', $data["eval_id"])
			->update("employee_evaluation", $data);
	}
   
   
   public function department_dropdown()
	{
		$data = $this->db->select("*")
			->from('department')
			->where('parent_id',0)  
			->get()
			->result_array();
			
			
				if (!empty($data)) {
			$info = array();
			$info[''] = "Select" ;
			foreach($data as $value)
			{
			  $info[$value['dept_id']] = $value['department_name'] ;
			}
		}
			return $info;

		
	}


	
	
	
}


