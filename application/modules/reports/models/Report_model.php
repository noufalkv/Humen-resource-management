<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report_model extends CI_Model {
 
    public function demographic_list($limit = null, $start = null,$id = null)
    {
   
      $this->db->select('p.*,d.department_name,po.position_name,dt.type_name,rt.r_type_name as rd_type,gd.gender_name,ms.marital_sta,pf.frequency_name,sp.first_name as f_name,sp.last_name as l_name');
        $this->db->from('employee_history p');
        $this->db->join('department d', 'p.dept_id = d.dept_id', 'left');
        $this->db->join('position po', 'p.pos_id = po.pos_id', 'left');
        $this->db->join('duty_type dt', 'p.duty_type = dt.id', 'left');
        $this->db->join('rate_type rt', 'p.rate_type = rt.id', 'left');
        $this->db->join('gender gd', 'p.gender = gd.id', 'left');
        $this->db->join('marital_info ms', 'p.marital_status = ms.id', 'left');
        $this->db->join('pay_frequency pf', 'p.pay_frequency = pf.id', 'left');
        $this->db->join('employee_history sp', 'p.super_visor_id = sp.emp_his_id', 'left');
          if(!empty($id)){
        $this->db->where('p.emp_his_id',$id);
        }
          $this->db->limit($limit, $start);
        $this->db->order_by('p.emp_his_id', 'desc');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();    
        }
        return false;
    } 
    public function count_demographic($id = null)
    {
        $this->db->select('*');
        $this->db->from('employee_history');
         if(!empty($id)){
        $this->db->where('emp_his_id',$id);
        }
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->num_rows();  
        }
        return false;
    }

// Department Dropdown
    public function dropdownemp()
    {
        $data = $this->db->select("*")
            ->from('employee_history') 
            ->get()
            ->result();

        $list[''] = display('select_type');
        if (!empty($data)) {
            foreach($data as $value)
                $list[$value->emp_his_id] = $value->first_name.' '.$value->last_name;
            return $list;
        } else {
            return false; 
        }
    }

     public function equipment_maping_report($limit = null, $start = null,$id = null)
    {
        $this->db->select('a.*,b.*,c.type_name,em.first_name,em.last_name');
        $this->db->from('employee_equipment a');
        $this->db->join('employee_history em','a.employee_id = em.employee_id','left');
        $this->db->join('equipment b','a.equipment_id = b.equipment_id','left');
        $this->db->join('equipment_type c','b.type_id = c.type_id');
        if(!empty($id)){
        $this->db->where('em.employee_id',$id);
        }
        $this->db->order_by('a.equipment_id', 'desc');
        $this->db->limit($limit, $start);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();    
        }
        return false;
    } 

     public function employee_drop()
    {
        $data = $this->db->select("*")
            ->from('employee_history') 
            ->get()
            ->result();

        $list[''] = display('select_type');
        if (!empty($data)) {
            foreach($data as $value)
                $list[$value->employee_id] = $value->first_name.' '.$value->last_name;
            return $list;
        } else {
            return false; 
        }
    }

// equipmnet count
     public function count_equipment($id = null)
    {
        $this->db->select('a.*,b.*,c.type_name,em.first_name,em.last_name');
        $this->db->from('employee_equipment a');
        $this->db->join('employee_history em','a.employee_id = em.employee_id','left');
        $this->db->join('equipment b','a.equipment_id = b.equipment_id','left');
        $this->db->join('equipment_type c','b.type_id = c.type_id');
        if(!empty($id)){
        $this->db->where('em.employee_id',$id);
        }
        $this->db->order_by('a.equipment_id', 'desc');
        $this->db->limit($limit, $start);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->num_rows();  
        }
        return false;
    }
 // custom information
 public function custom_report($limit = null, $start = null,$id = null)
    {
        $this->db->select('a.*,b.first_name,b.last_name');
        $this->db->from('custom_table a');
        $this->db->join('employee_history b','a.employee_id = b.employee_id','left');
        if(!empty($id)){
        $this->db->where('b.employee_id',$id);
        }
        $this->db->limit($limit, $start);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();    
        }
        return false;
    } 
//count custom information
      public function count_custom_data($id = null)
    {
       $this->db->select('a.*,b.first_name,b.last_name');
        $this->db->from('custom_table a');
        $this->db->join('employee_history b','a.employee_id = b.employee_id','left');
        if(!empty($id)){
        $this->db->where('b.employee_id',$id);
        }
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->num_rows();  
        }
        return false;
    }
    
 
	/*	public function emp_list_by_branch($branch_id)
	{
		$this->db->select('p.*,d.department_name,po.position_name,dt.type_name,rt.r_type_name as rd_type,gd.gender_name,ms.marital_sta,pf.frequency_name');
		$this->db->from('employee_history p');
		$this->db->join('department d', 'p.division_id = d.dept_id', 'left');
		$this->db->join('position po', 'p.pos_id = po.pos_id', 'left');
		$this->db->join('duty_type dt', 'p.duty_type = dt.id', 'left');
		$this->db->join('rate_type rt', 'p.rate_type = rt.id', 'left');
		$this->db->join('gender gd', 'p.gender = gd.id', 'left');
		$this->db->join('marital_info ms', 'p.marital_status = ms.id', 'left');
		$this->db->join('pay_frequency pf', 'p.pay_frequency = pf.id', 'left');
		if($this->session->userdata('branch_id')!= 1)
		{
		$this->db->where('p.branch_id',$this->session->userdata('branch_id'));
		}
		if($branch_id != '')
		{
		$this->db->where('p.branch_id',$branch_id);	
		}
		$this->db->order_by('p.emp_his_id', 'desc');
		$query = $this->db->get();
		return $report = $query->result();
	}*/
	
	//Employee list
	public function emp_list()
	{
		$this->db->select('p.*,ms.first_name,ms.last_name,ms.rate,pos.position_name');
		$this->db->from('employee_bonus p');
		$this->db->join('employee_history ms', 'p.name= ms.employee_id', 'left');
		$this->db->join('position pos', 'ms.pos_id= pos.pos_id', 'left');
		if($this->session->userdata('branch_id')!= 1)
		{
		$this->db->where('ms.branch_id',$this->session->userdata('branch_id'));
		}
		$this->db->order_by('p.id', 'desc');
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
			$info[''] = "BRANCH" ;
			foreach($data as $value)
			{
			  $info[$value['branch_id']] = $value['branch_name'] ;
			}
		}
		
		return $info;
		
    }
    public function salary_setupindex_report()
	{

			  $this->db->select('sstp.*,p.employee_id,p.first_name,p.last_name,pt.position_name as position') ;  
            $this->db->from('employee_salary_details sstp');
            $this->db->join('employee_history p', 'sstp.employee_id = p.employee_id');
			$this->db->join('position pt', 'p.pos_id = pt.pos_id');
			if($this->session->userdata('branch_id')!= 1)
		    {
		    $this->db->where('p.branch_id',$this->session->userdata('branch_id'));
		    }
           $this->db->group_by('sstp.employee_id');
         return $this->db->get()->result();
            
	}
	
	public function esi_report(){
	        $this->db->select('sstp.*,p.esi_ip_number,p.first_name,p.last_name,p.*') ;  
            $this->db->from('employee_salary_details sstp');
            $this->db->join('employee_history p', 'sstp.employee_id = p.employee_id');
			if($this->session->userdata('branch_id')!= 1)
		    {
		    $this->db->where('p.branch_id',$this->session->userdata('branch_id'));
		    }
		    
		    $this->db->where('p.esi_status','1');
           $this->db->group_by('sstp.employee_id');
         return $this->db->get()->result();
	    
	}
	
	public function salary_setupindex_report_wps()
	{

			  $this->db->select('sstp.*,ek.*,p.*,pt.position_name as position'); 
            $this->db->from('employee_salary_details sstp');
            $this->db->join('employee_history p', 'sstp.employee_id = p.employee_id');
			$this->db->join('position pt', 'p.pos_id = pt.pos_id');
			$this->db->join('employee_bank ek', 'sstp.employee_id = ek.employee_id');
			if($this->session->userdata('branch_id')!= 1)
		    {
		    $this->db->where('p.branch_id',$this->session->userdata('branch_id'));
		    }
           $this->db->group_by('sstp.employee_id');
          return $this->db->get()->result();
            
	}


	
	
}
