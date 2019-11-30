<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payroll_model extends CI_Model {
 
    public function salary_setupView()
	{
		return $this->db->select('*')	
			->from('salary_type')
			->order_by('salary_type_id', 'desc')
			->get()
			->result();
	}
public function emp_salsetup_create($data = array())
	{
		return $this->db->insert('salary_type', $data);//
	}
public function emp_salstup_delete($id = null)
	{
		$this->db->where('employee_id',$id)
			->delete('employee_salary_setup');

		if ($this->db->affected_rows()) {
			return true;
		} else {
			return false;
		}
	} 

	public function update_em_salstup($data = array())//
	{
		return $this->db->where('salary_type_id', $data["salary_type_id"])
			->update("salary_type", $data);
	}
	public function salarysetup_updateForm($id){
        $this->db->where('salary_type_id',$id);
        $query = $this->db->get('salary_type');
        return $query->row();
    }
/* Salary Setup start ****/

     public function salary_setupindex()
	{

			 return $this->db->select('count(DISTINCT(sstp.e_s_s_id)) as e_s_s_id,sstp.*,p.employee_id,p.first_name,p.last_name')   
            ->from('employee_salary_setup sstp')
            ->join('employee_history p', 'sstp.employee_id = p.employee_id', 'left')
            ->group_by('sstp.employee_id')
            ->order_by('sstp.salary_type_id', 'desc')
            ->get()
            ->result();
	}
	public function salary_setup_create($data = array())
	{
		return $this->db->insert('employee_salary_setup', $data);//
	}

	 public function salary_typeName()
	{
		return $this->db->select('*')	
			->from('salary_type')
	         ->where('emp_sal_type',1)
			->get()
			->result();
	}
	 public function salary_typedName()
	{
		return $this->db->select('*')	
			->from('salary_type')
	         ->where('emp_sal_type',0)
			->get()
			->result();
	}

	public function s_delete($id = null)
	{
		$this->db->where('employee_id',$id)
			->delete('employee_salary_setup');

		if ($this->db->affected_rows()) {
			return true;
		} else {
			return false;
		}
	} 

	public function empdropdown()
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
       			$list[$value->employee_id] = $value->first_name." ".$value->last_name;
       		} 
       	}
       	return $list;
	}

	/* salary sheet generate  */
	public function salary_genrate_create($data = array())
	{
		return $this->db->insert('salary_sheet_generate', $data);//
	}
	

	public function salary_generateView()
	{


			 $this->db->select('count(DISTINCT(slg.ssg_id)) as ssg_id,slg.*,p.employee_id,p.first_name,p.last_name');
            $this->db->from('salary_sheet_generate slg');
            $this->db->join('employee_history p', 'slg.employee_id = p.employee_id', 'left');
            $this->db->group_by('slg.ssg_id');
            $this->db->order_by('slg.ssg_id', 'desc');
           return $this->db->get()->result();
            
	}

	public function salary_gen_delete($id = null)
	{
		$this->db->where('ssg_id',$id)
			->delete('salary_sheet_generate');

		if ($this->db->affected_rows()) {
			return true;
		} else {
			return false;
		}
	} 

	public function update_sal_gen($data = array())//
	{
		return $this->db->where('ssg_id', $data["ssg_id"])
			->update("salary_sheet_generate", $data);
	}
	public function salargen_updateForm($id){
        $this->db->where('ssg_id',$id);
        $query = $this->db->get('salary_sheet_generate');
        return $query->row();
    }
    public function salary_head_create($data = array())
	{
		return $this->db->insert('salary_setup_header', $data);//
	}

/* salary setup Update ********************************************/

public function update_sal_stup($data = array())//
	{
		$term = array('employee_id' => $data['employee_id'], 'salary_type_id' => $data['salary_type_id']);

		return $this->db->where($term)
			->update("employee_salary_setup", $data);
	}

	public function update_sal_head($data = array())
	{
		return $this->db->where('employee_id', $data["employee_id"])
			->update("salary_setup_header", $data);
	}

	public function salary_s_updateForm($id){
        $this->db->where('employee_id',$id);
        $query = $this->db->get('employee_salary_setup','salary_setup_header');
        return $query->row();
    }
/* salary setup Update ********************************************/



    public function salary_amount($id)
	{
		return $result = $this->db->select('employee_salary_setup.*,salary_type.*')	
			 ->from('employee_salary_setup')
			 ->join('salary_type','salary_type.salary_type_id=employee_salary_setup.salary_type_id')
	         ->where('employee_salary_setup.employee_id',$id)
	         ->where('emp_sal_type',1)
			 ->get()
			 ->result();
	}
	 public function salary_amountlft($id)
	{
		return $result = $this->db->select('employee_salary_setup.*,salary_type.*')	
			 ->from('employee_salary_setup')
			 ->join('salary_type','salary_type.salary_type_id=employee_salary_setup.salary_type_id')
	         ->where('employee_salary_setup.employee_id',$id)
	         ->where('emp_sal_type',0)
			 ->get()
			 ->result();
	}




	public  function get_empid($id)
    {
        $query=$this->db->get_where('employee_salary_setup',array('employee_id'=>$id));
        return $query->row_array();
    } 
    public  function get_type($id)
    {
       
        return $result = $this->db->select('sal_type')
                       ->from('employee_salary_setup')
                       ->where('employee_id',$id)
                       ->get()
                       ->row_array();
    } 


    public function type()
	{
		$this->db->select('*');
        $this->db->from('employee_salary_setup');
        $query = $this->db->get();
        $data = $query->result();
       
        $list = array('' => 'Select One...');
       	if (!empty($data) ) {
       		foreach ($data as $value) {
       			$list[$value->sal_type] = $value->sal_type;
       		} 
       	}
       	return $list;
	}

	public function payable()
	{
		$this->db->select('*');
        $this->db->from('salary_setup_header');
        $query = $this->db->get();
        $data = $query->result();
       
         $list = array('' => 'Select One...');
       	if (!empty($data) ) {
       		foreach ($data as $value) {
       			$list[$value->salary_payable] = $value->salary_payable;
       		} 
       	}
       	return $list;
	}
	public  function get_payable($id)
    {
        
        return $result = $this->db->select('salary_payable')
                       ->from('salary_setup_header')
                       ->where('employee_id',$id)
                       ->get()
                       ->row_array();
    } 


public function create_employee_payment($data = array())
	{
		return $this->db->insert('employee_salary_payment', $data);

	}
	// employee Information
public function employee_informationId($id)
	{
		return $result = $this->db->select('rate,rate_type')
                       ->from('employee_history')
                       ->where('employee_id',$id)
                       ->get()
                       ->row();

	}

//Salary new Details insertion

public function SalaryNewInsert($data)
	{
		return $this->db->insert('employee_salary_details', $data);
	}
	
public function salary_details($id)
{		
		$this->db->where('employee_id',$id);
	    $this->db->select('*');
        $this->db->from('employee_salary_details');
        $query = $this->db->get();
        return $query->row();
}

public function SalaryNewUpdate($data)
	{
		return $this->db->where('employee_id', $data["employee_id"])
			->update("employee_salary_details", $data);
	}
	
public function salary_setupindex_report()
	{

			 return $this->db->select('sstp.*,p.employee_id,p.first_name,p.last_name,pt.position_name as position')   
            ->from('employee_salary_details sstp')
            ->join('employee_history p', 'sstp.employee_id = p.employee_id')
			->join('position pt', 'p.pos_id = pt.pos_id')
            ->group_by('sstp.employee_id')
            ->get()
            ->result();
	}
	
public function salary_setupindex_report_wps()
	{

			 return $this->db->select('sstp.*,ek.*,p.*,pt.position_name as position')   
            ->from('employee_salary_details sstp')
            ->join('employee_history p', 'sstp.employee_id = p.employee_id')
			->join('position pt', 'p.pos_id = pt.pos_id')
			->join('employee_bank ek', 'sstp.employee_id = ek.employee_id')
            ->group_by('sstp.employee_id')
            ->get()
            ->result();
	}
	
public function holidays($financial_year)
	{
		$listing = array();
		for($j=1;$j<=12;$j++)
		{
			$k = 0;
			if($j<10)
			{
				$k="0".$j;
			}
			else
			{
				$k = $j ;
			}
			$date1 = $financial_year."-".$k."-01";
			$last_day = cal_days_in_month(CAL_GREGORIAN,$k,$financial_year);
			$date2 = $financial_year."-".$k."-".$last_day;
			$data = $this->db->select('*')
			->from('payroll_holiday')
			->where('start_date >=',$date1)
			->where('start_date <=',$date2)
			->get();
		  if( $data->num_rows() > 0)
			  {
				$row_arr = $data->result();
				$arr = array();
				unset($arr);
				foreach( $row_arr as $row )
				{
						$start_date = $row->start_date;
						$end_date = $row->end_date;
						$n = $row->no_of_days;
						$start_date_arr = explode("-",$start_date); 
						$from_day = $start_date_arr[2];
						$from_day_tmp = (int)$from_day;
						$end_date_arr = explode("-",$end_date); 
						$to_day = $end_date_arr[2];
						//unset($arr);
						
						$str ='';
						for($i=0;$i<$n;$i++)
						{
							if($from_day_tmp <= $to_day)
								{
									if($i==0)
									{
										$str = $from_day_tmp;
										
									}
									else
									{
										
											$str .= ','.$from_day_tmp;
										
										
									}
									$from_day_tmp++;
								}
						}
				  
				  $arr[] = $str ;
				  
				}
				  				
				$listing[] = implode(",",$arr);
			  }
			  else
			  {
				$listing[] ="";
			  }
		
		}				
		$final_string = implode("#",$listing);
		return $final_string;
	}
		

}
