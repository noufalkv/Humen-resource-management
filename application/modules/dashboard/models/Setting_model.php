<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Setting_model extends CI_Model 
{ 	

	private $table = "setting";	
	
	public function create($data = [])
	{	 		
		return $this->db->insert($this->table,$data);	
	}
	public function read()
	{		
		return $this->db->select("*")
		->from($this->table)
		->get()
		->row();
	} 	  	
	public function update($data = [])
	{
		return $this->db->where('id',$data['id'])
		->update($this->table,$data);
	}
	public function paid_level($id,$financial_year)
	{	
		$data = $this->db->select("financial_year")
		->from($this->table)
		->where("id",$id)
		->get()
		->row();
		
		$financial_year_old = $data->financial_year ;
		if( $financial_year_old != $financial_year)
			{		  
		$num_rows = $this->db->select("year")
		->from("employee_paid_leave")
		->where("year",$financial_year)
		->get()
		->num_rows();
		//echo $num_rows;exit;
		if($num_rows == 0)
			{
				$data1 = $this->db->select("employee_id")
				->from("employee_history")
				->get()
				->result();
				foreach( $data1 as $row)
				{
					$employee_id = $row->employee_id;
					$arr = [
					"employee_id" => $employee_id,
					"no_leave"    => 20,
					"year"        => $financial_year
					];
					$this->db->insert("employee_paid_leave",$arr);
				}
			}
			}
			else
			{
				echo "yes";exit;
			}
	}
}