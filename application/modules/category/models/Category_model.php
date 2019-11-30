<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category_model extends CI_Model {
 
    public function cat_view()
	{
		     $this->db->select('*')	;
			$this->db->from('category');
			if($this->session->userdata('branch_id')!= 1)
		    {
		    $this->db->where('branch_id',$this->session->userdata('branch_id'));
		    }
			$this->db->order_by('cat_id', 'desc');
		return	$this->db->get()->result();
			
			
	}
	
	public function cat_create($data = array())
	{
		return $this->db->insert('category', $data);
	}
	
	public function filee_create($data = array())
	{
		return $this->db->insert('file_track', $data);
	}
	
	public function create_employee_file($data = array())
	{
		return $this->db->insert('employee_file_track', $data);
	}

	public function cat_delete($id = null)
	{
		$this->db->where('cat_id',$id)
			->delete('category');

		if ($this->db->affected_rows()) {
			return true;
		} else {
			return false;
		}
	} 


	public function file_delete($id = null)
	{
		$this->db->where('file_id',$id)
			->delete('file_track');

		if ($this->db->affected_rows()) {
			return true;
		} else {
			return false;
		}
	} 
	
		public function employee_file_delete($id = null)
	{
		$this->db->where('file_id',$id)
			->delete('employee_file_track');

		if ($this->db->affected_rows()) {
			return true;
		} else {
			return false;
		}
	} 



public function update_cat($data = array())
	{
		return $this->db->where('cat_id',$data["cat_id"])
			->update("category", $data);


	}
	public function cat_updateForm($id){
        $this->db->where('cat_id',$id);
        $query = $this->db->get('category');
        
        return $query->row();
    }
    

    /// Filetrack Part
    public function read_filetrack($limit = null, $start = null)
	{
	  $this->db->select('e.*,c.*');
		$this->db->from('file_track as e');
		if($this->session->userdata('branch_id')!= 1)
		    {
		    $this->db->where('branch_id',$this->session->userdata('branch_id'));
		    }
		    $this->db->join('category as c', 'e.parent_id = c.cat_id');
		$this->db->order_by('file_id', 'desc');
		$this->db->limit($limit, $start);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result();	
		}
		return false;
	} 
	
	public function read_filetrack_cat($cat_id)
	{
	  $this->db->select('e.*,c.*');
		$this->db->from('file_track as e');
		if($this->session->userdata('branch_id')!= 1)
		    {
		    $this->db->where('branch_id',$this->session->userdata('branch_id'));
		    }
		    if($cat_id != ''){
		   $this->db->where('e.parent_id',$cat_id);
		   }
		    $this->db->join('category as c', 'e.parent_id = c.cat_id');
		$this->db->order_by('file_id', 'desc');
		
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result();	
		}
		return false;
	} 
	
	
	 public function read_employee_filetrack($limit = null, $start = null)
	{
	  $this->db->select('e.*,d.*,c.*');
		$this->db->from('employee_file_track as e');
		if($this->session->userdata('branch_id')!= 1)
		    {
		    $this->db->where('e.branch_id',$this->session->userdata('branch_id'));
		    }
		    $this->db->join('employee_history as d', 'e.file_emp = d.employee_id');
		    $this->db->join('category as c', 'e.parent_id = c.cat_id');
		$this->db->order_by('e.file_id', 'desc');
		$this->db->limit($limit, $start);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result();	
		}
		return false;
	}
	
	 public function read_employee_filetrack_emp($emp_id,$cat_id)
	{
	  $this->db->select('e.*,d.*,c.*');
		$this->db->from('employee_file_track as e');
		if($this->session->userdata('branch_id')!= 1)
		    {
		    $this->db->where('e.branch_id',$this->session->userdata('branch_id'));
		    }
		     if($emp_id != ''){
		   $this->db->where('e.file_emp',$emp_id);
		     }
		   if($cat_id != ''){
		   $this->db->where('e.parent_id',$cat_id);
		   }
		    $this->db->join('employee_history as d', 'e.file_emp = d.employee_id');
		     $this->db->join('category as c', 'e.parent_id = c.cat_id');
		$this->db->order_by('e.file_id', 'desc');
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result();	
		}
		return false;
	}
	

	public function findById($id = null)
	{ 
	         $this->db->select("*")->from("category");
			$this->db->where('cat_id',$id) ;
			if($this->session->userdata('branch_id')!= 1)
		    {
		    $this->db->where('branch_id',$this->session->userdata('branch_id'));
		    }
    		$this->db->limit($limit, $start);
			return	$this->db->get()->row();
			

	} 
	
	public function findByFileId($id = null)
	{ 
		 $this->db->select("*")->from("file_track");
			$this->db->where('file_id',$id) ;
			if($this->session->userdata('branch_id')!= 1)
		    {
		    $this->db->where('branch_id',$this->session->userdata('branch_id'));
		    }
		return	$this->db->get()->row();

	} 
	
		public function findByEmployeeId($id = null)
	{ 
		 $this->db->select("*")->from("employee_file_track");
			$this->db->where('file_id',$id) ;
			if($this->session->userdata('branch_id')!= 1)
		    {
		    $this->db->where('branch_id',$this->session->userdata('branch_id'));
		    }
		return	$this->db->get()->row();

	} 
 
 
	public function update($data = [])
	{
		return $this->db->where('cat_id',$data['cat_id'])
			->update('category',$data); 
	} 
	
	public function update_file($data = [])
	{
		return $this->db->where('file_id',$data['file_id'])
			->update('file_track',$data); 
	} 
	
		public function update_employee_file($data = [])
	{
		return $this->db->where('file_id',$data['file_id'])
			->update('employee_file_track',$data); 
	} 
// Category Dropdown
	public function category_dropdown()
	{
		 $this->db->select("*");
			$this->db->from('category');
			$this->db->where('type','Official');
			if($this->session->userdata('branch_id')!= 1)
		    {
		    $this->db->where('p.branch_id',$this->session->userdata('branch_id'));
		    }
		$data =	$this->db->get()->result();

		$list[''] = display('select_filetrack');
		if (!empty($data)) {
			foreach($data as $value)
				$list[$value->cat_id] = $value->category_name;
			return $list;
		} else {
			return false; 
		}
	}
	
		public function category_emp_dropdown()
	{
		 $this->db->select("*");
			$this->db->from('category');
			$this->db->where('type','Employee');
			if($this->session->userdata('branch_id')!= 1)
		    {
		    $this->db->where('p.branch_id',$this->session->userdata('branch_id'));
		    }
		$data =	$this->db->get()->result();

		$list[''] = display('select_filetrack');
		if (!empty($data)) {
			foreach($data as $value)
				$list[$value->cat_id] = $value->category_name;
			return $list;
		} else {
			return false; 
		}
	}
 

public function count_filetrack()
	{
		$this->db->select('*');
		$this->db->from('file_track');
		if($this->session->userdata('branch_id')!= 1)
		{
		$this->db->where('branch_id',$this->session->userdata('branch_id'));
		}
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->num_rows();	
		}
		return false;
	}
	
	public function count_employee_track()
	{
		$this->db->select('*');
		$this->db->from('employee_file_track');
		if($this->session->userdata('branch_id')!= 1)
		{
		$this->db->where('branch_id',$this->session->userdata('branch_id'));
		}
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->num_rows();	
		}
		return false;
	}
	
	public function employee()
	{
		$this->db->select('*');
        $this->db->from('employee_history');
        if($this->session->userdata('branch_id')!= 1)
		{
		$this->db->where('branch_id',$this->session->userdata('branch_id'));
		}
        $query = $this->db->get();
        $data = $query->result();  
        $list = array('' => 'Select One...');
       	if (!empty($data) ) {
       		foreach ($data as $value) {
       			$list[$value->employee_id] = $value->first_name.' '.$value->last_name;
       		} 
       	}
       	return $list;
	}
    
}
