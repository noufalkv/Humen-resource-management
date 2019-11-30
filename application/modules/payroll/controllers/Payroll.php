<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payroll extends MX_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->load->model(array(
			'Payroll_model'
		));		 
	}

	public function emp_salary_setup_view(){   
		$this->permission->module('payroll','read')->redirect();
		$data['title']    = display('view_salary_setup');  ;
		$data['emp_sl']   = $this->Payroll_model->salary_setupView();
		$data['module']   = "payroll";
		$data['page']     = "emp_sal_setupview";   
		echo Modules::run('template/layout', $data); 
	} 


	public function create_salary_setup(){ 
		$data['title'] = display('selectionlist');
		#-------------------------------#
		$this->form_validation->set_rules('sal_name',display('sal_name'),'required|max_length[50]');
		$this->form_validation->set_rules('emp_sal_type',display('emp_sal_type'));
		
		#-------------------------------#
		if ($this->form_validation->run() === true) {

			$postData = [
				'sal_name'        => $this->input->post('sal_name',true),
				'emp_sal_type' 	  => $this->input->post('emp_sal_type',true),
				//'default_amount'  => $this->input->post('default_amount',true),
			];   

			if ($this->Payroll_model->emp_salsetup_create($postData)) { 
				$this->session->set_flashdata('message', display('successfully_saved'));
			} else {
				$this->session->set_flashdata('exception',  display('please_try_again'));
			}
			redirect("payroll/Payroll/create_salary_setup");
		} else {
			$data['title']  = display('salary_type');
			$data['module'] = "payroll";
			$data['page']   = "emp_salarysetup_form";
			$data['emp_sl'] = $this->Payroll_model->salary_setupView(); 
			echo Modules::run('template/layout', $data);   
			
		}   
	}
	public function delete_emp_salarysetup($id = null){ 
		$this->permission->module('payroll','delete')->redirect();

		if ($this->Payroll_model->emp_salstup_delete($id)) {
			#set success message
			$this->session->set_flashdata('message',display('delete_successfully'));
		} else {
			#set exception message
			$this->session->set_flashdata('exception',display('please_try_again'));
		}
		redirect("payroll/Payroll/emp_salary_setup_view");
	}




	public function update_salsetup_form($id = null){
		$this->form_validation->set_rules('salary_type_id',null,'required|max_length[11]');
		$this->form_validation->set_rules('sal_name',display('sal_name'),'required|max_length[50]');
		$this->form_validation->set_rules('emp_sal_type',display('emp_sal_type')  ,'max_length[20]');
		#-------------------------------#
		if ($this->form_validation->run() === true) {

			$postData = [
				'salary_type_id' 	             => $this->input->post('salary_type_id',true),
				'sal_name' 	                     => $this->input->post('sal_name',true),
				'emp_sal_type' 		             => $this->input->post('emp_sal_type',true),
				
			]; 
			
			if ($this->Payroll_model->update_em_salstup($postData)) { 
				$this->session->set_flashdata('message', display('successfully_updated'));
			} else {
				$this->session->set_flashdata('exception',  display('please_try_again'));
			}
			redirect("payroll/Payroll/update_salsetup_form/". $id);

		} else {
			$data['title']  = display('update');
			$data['data']   =$this->Payroll_model->salarysetup_updateForm($id);
			$data['module'] = "payroll";
			$data['page']   = "update_salarysetup_form";   
			echo Modules::run('template/layout', $data); 
		}

	}


	public function salary_setup_view()
	{   
		$this->permission->module('payroll','read')->redirect();
		$data['title']         = display('view_salary_setup');  ;
		$data['emp_sl_setup']  = $this->Payroll_model->salary_setupindex();
		$data['module']        = "payroll";
		$data['page']          = "sal_setupview";   
		echo Modules::run('template/layout', $data); 
	} 


	public function create_s_setup(){
		
		$data['title'] = display('selectionlist');
		#-------------------------------#
		$this->form_validation->set_rules('employee_id',display('employee_id'),'required|max_length[50]');
		$this->form_validation->set_rules('sal_type',display('sal_type'));
		$this->form_validation->set_rules('amount[]',display('amount'));
		$this->form_validation->set_rules('salary_payable',display('salary_payable'));
		$this->form_validation->set_rules('absent_deduct',display('absent_deduct'));
		$this->form_validation->set_rules('tax_manager',display('tax_manager'));
		$amount=$this->input->post('amount');
		#-------------------------------#
		if ($this->form_validation->run() === true) {
			
			$date=date('Y-m-d');
			$postDataNew = [
			'employee_id'    			=> $this->input->post('employee_id',true),
			'basic'           			=> $this->input->post('basic_',true),
			'hra'           			=> $this->input->post('hra',true),
			'ca'           				=> $this->input->post('ca',true),
			'ma'           				=> $this->input->post('ma',true),
			'esi_status'           		=> $this->input->post('esi_status',true),
			'ta'           				=> $this->input->post('ta',true),
			'earned_salary_after_hra'   => $this->input->post('earned_salary_after_hra',true),
			'earned_salary'           	=> $this->input->post('earned_salary',true),
			'total_deductions'          => $this->input->post('total_deductions',true),
			'salary_payable'           	=> $this->input->post('salary_payable',true),
			'pf'           				=> $this->input->post('pf',true),
			'esi'           			=> $this->input->post('esi',true),
			'advance'           		=> $this->input->post('advance',true),
			'loan'           			=> $this->input->post('loan',true),
			'tds'           			=> $this->input->post('tds',true),
			'employer_pf'           	=> $this->input->post('employer_pf',true),
			'employer_esi'           	=> $this->input->post('employer_esi',true),
			'gross_salary'           	=> $this->input->post('gross_salary',true),
			'net_salary'           		=> $this->input->post('net_salary',true),
			'month'           		    => $this->input->post('month',true),
			'present_days'           	=> $this->input->post('present_days',true),
			'adj_leave'           	   => $this->input->post('adj_leave',true),
			'total_days'           	   => $this->input->post('total_days',true),
			'num_days_n_month'          => $this->input->post('num_days_n_month',true),
			'd_leave'           		   => $this->input->post('d_leave',true),
			'paid_level'           	 => $this->input->post('paid_level',true),
			'financial_year'            => $this->input->post('financial_year',true),			
			'num_month_holiday'            => $this->input->post('num_month_holiday',true),			
			'no_sundays'            => $this->input->post('no_sundays',true),			
			];
			
			$this->Payroll_model->SalaryNewInsert($postDataNew);
			
			$postData = [
					'employee_id'           => $this->input->post('employee_id',true),
					'sal_type'              => $this->input->post('sal_type',true),
					'salary_type_id' 	    => 0,
					'amount' 	            => 0,
					'create_date'           => $date,
					'gross_salary'          => $this->input->post('gross_salary',true),
				]; 	
			$this->Payroll_model->salary_setup_create($postData);
			if($this->input->post('absent_deduct',true)==1)
			{
				$absent_deduct=1;	
			}
			else
			{
				$absent_deduct=0;
			}
			if($this->input->post('tax_manager',true)==1)
			{
				$tax_manager=1;	
			}
			else
			{
				$tax_manager=0;
			}
			$Data1 = [
				'employee_id'                => $this->input->post('employee_id',true),
				'salary_payable' 	         => $this->input->post('salary_payable',true),
				'absent_deduct' 	         => $absent_deduct,
				'tax_manager' 	             => $tax_manager,	
			];   
			$this->Payroll_model->salary_head_create($Data1);
			//salary_sheet_generate insertion
			$mm = $this->input->post('month',true);
			$yy = $this->input->post('financial_year',true);
			$num_days_n_month = $this->input->post('num_days_n_month',true);
			$start_date = '1-'.$mm.'-'.$yy ;
			$end_date = $num_days_n_month.'-'.$mm.'-'.$yy ;
			$sheet_name = date('F', mktime(0, 0, 0, $this->input->post('month',true), 10));
			$postDataSheet = [
				'employee_id'         =>  $this->input->post('employee_id',true),
				'name'                =>  $sheet_name,
				'gdate'               =>  $date,
				'start_date' 	      =>  $this->input->post('start_date',true), 
				'end_date' 	          =>  $this->input->post('end_date',true), 
				'generate_by' 	      =>  $this->session->userdata('fullname') 
			];
			
			$this->db->insert('salary_sheet_generate', $postDataSheet);
			//salary_sheet_generate insertion end
			
			//employee_salary_payment insertion
			
			$times     = $this->db->select('SUM(TIME_TO_SEC(staytime)) AS staytime')->from('emp_attendance')->where('date BETWEEN "'. date('Y-m-d', strtotime($start_date)). '" and "'. date('Y-m-d', strtotime($end_date)).'"')->where("employee_id" ,$this->input->post('employee_id',true) )->get()->row()->staytime;
			$wormin = ($times/60);
			$worhour = number_format($wormin/60,2);
			
			
			$workingper   = $this->db->select('COUNT(date) AS date')->from('emp_attendance')->where('date BETWEEN "'. date('d-m-Y', strtotime($start_date)). '" and "'. date('d-m-Y', strtotime($end_date)).'"')->where("employee_id" ,$this->input->post('employee_id',true) )->get()->row()->date;
			
			$paymentData = array(
				'employee_id'           => $this->input->post('employee_id',true),
				'total_salary'          => $this->input->post('net_salary',true),
				'total_working_minutes' => $worhour, 
				'working_period'        => $workingper,
			);
			
			$this->db->insert('employee_salary_payment', $paymentData);
			//employee_salary_payment insertion end
			
			//update paid level
			$postPaidLevel = [
				'no_leave'         =>  $this->input->post('paid_level',true)
			];
			
			$this->db->where('employee_id', $this->input->post('employee_id',true))->where('year', $this->input->post('financial_year',true))->update('employee_paid_leave',$postPaidLevel);
			//update paid level end
			
			
			$this->session->set_flashdata('message', display('successfully_saved_saletup'));
			redirect("payroll/Payroll/create_s_setup");
		} else {
			
			$data['title']      = display('create');
			$data['module']     = "payroll";
			$data['slname']     = $this->Payroll_model->salary_typeName();
			$data['sldname']    = $this->Payroll_model->salary_typedName();
			$data['employee']   = $this->Payroll_model->empdropdown();
			$data['holidays'] 	= $this->Payroll_model->holidays($this->session->userdata('financial_year'));   
			//months
			$months = array('' => 'Select One...');
			$months[1] = 'January';
			$months[2] = 'February';
			$months[3] = 'March';
			$months[4] = 'April';
			$months[5] = 'May';
			$months[6] = 'June';
			$months[7] = 'July';
			$months[8] = 'August';
			$months[9] = 'September';
			$months[10] = 'October';
			$months[11] = 'November';
			$months[12] = 'December';
			$data['months'] = $months;
			$data['financial_year'] = $this->session->userdata('financial_year');
			$data['emp_sl_setup']   = $this->Payroll_model->salary_setupindex();
			$data['page']       = "salarysetup_form";
			echo Modules::run('template/layout', $data);   
			
		}   
	}
	public function create_s_setup_(){
			$data['title']      = display('create');
			$data['module']     = "payroll";
			$data['slname']     = $this->Payroll_model->salary_typeName();
			$data['sldname']    = $this->Payroll_model->salary_typedName();
			$data['employee']   = $this->Payroll_model->empdropdown();
			//months
			$months = array('' => 'Select One...');
			$months[1] = 'January';
			$months[2] = 'February';
			$months[3] = 'March';
			$months[4] = 'April';
			$months[5] = 'May';
			$months[6] = 'June';
			$months[7] = 'July';
			$months[8] = 'August';
			$months[9] = 'September';
			$months[10] = 'October';
			$months[11] = 'November';
			$months[12] = 'December';
			$data['months'] = $months;
			$data['financial_year'] = $this->session->userdata('financial_year');
			$data['emp_sl_setup']   = $this->Payroll_model->salary_setupindex();
			$data['page']       = "test";
			echo Modules::run('template/layout', $data); 
	}
	public function delete_salsetup($id = null) 
	{ 
		$this->permission->module('payroll','delete')->redirect();

		if ($this->Payroll_model->emp_salstup_delete($id)) {
			#set success message
			$this->session->set_flashdata('message',display('delete_successfully'));
		} else {
			#set exception message
			$this->session->set_flashdata('exception',display('please_try_again'));
		}
		redirect("payroll/Payroll/salary_setup_view");
	}



	public function salary_generate_view()
	{   
		$this->permission->module('payroll','read')->redirect();

		$data['title']    = display('view_salary_generate');  ;
		$data['salgen']   = $this->Payroll_model->salary_generateView();
		$data['module']   = "payroll";
		$data['page']     = "sal_genview";   
		echo Modules::run('template/layout', $data); 
	} 

	public function create_salary_generate()
	{ 
		$data['title'] = display('selectionlist'); 
		#-------------------------------# 
		$this->form_validation->set_rules('name',display('name'),'required|max_length[50]');
		$this->form_validation->set_rules('start_date',display('start_date'),'required|max_length[50]');
		$this->form_validation->set_rules('end_date',display('end_date'),'max_length[50]');
		#-------------------------------#

		if ($this->form_validation->run() === true) {

			$employee = $this->db->select('employee_id')->from('employee_salary_setup')->group_by('employee_id')->get()->result();
			// echo "<pre>";
			$startd    = $this->input->post('start_date');
			$ab=date('Y-m-d');
			if (sizeof($employee) > 0)
				foreach($employee as $key=>$value)
				{ 
			$postData = [
				'employee_id'         =>  $value->employee_id,
				'name'                =>  $this->input->post('name',true),
				'gdate'               =>  $ab,
				'start_date' 	      =>  $this->input->post('start_date',true), 
				'end_date' 	          =>  $this->input->post('end_date',true), 
				'generate_by' 	      =>  $this->session->userdata('fullname'), 
			]; 

		$this->db->insert('salary_sheet_generate', $postData);
		$aAmount   = $this->db->select('gross_salary,sal_type,employee_id')->from('employee_salary_setup')->where('employee_id', $value->employee_id)->get()->row();
		$Amount    = $aAmount->gross_salary;
		$startd    = $this->input->post('start_date');
		$end       = $this->input->post('end_date');
		$times     = $this->db->select('SUM(TIME_TO_SEC(staytime)) AS staytime')->from('emp_attendance')->where('date BETWEEN "'. date('Y-m-d', strtotime($startd)). '" and "'. date('Y-m-d', strtotime($end)).'"')->where("employee_id" ,$value->employee_id )->get()->row()->staytime;
		$wormin = ($times/60);
		$worhour = number_format($wormin/60,2);
		if($aAmount->sal_type == 1){
		$dStart = new DateTime($startd);
        $dEnd  = new DateTime($end);
        $dDiff = $dStart->diff($dEnd);
         $numberofdays =  $dDiff->days+1;
			$totamount = $Amount*$worhour;
			$PYI = ($totamount/$numberofdays)*365;
			$PossibleYearlyIncome = round($PYI);
		$this->db->select('*');
		$this->db->from('payroll_tax_setup');
		$this->db->where("start_amount <",$PossibleYearlyIncome);
		$query = $this->db->get();
		$taxrate = $query->result_array();
		// echo $PossibleYearlyIncome;
		// echo '<pre>';
		// print_r($taxrate);exit();
		$TotalTax = 0;
	    foreach($taxrate as $row){
                    // "Inside tax calculation";
	    	    if($PossibleYearlyIncome > $row['start_amount'] && $PossibleYearlyIncome > $row['end_amount']){
                   $diff=$row['end_amount']-$row['start_amount'];
                    }
                     if($PossibleYearlyIncome > $row['start_amount'] && $PossibleYearlyIncome < $row['end_amount']){
                    $diff=$PossibleYearlyIncome-$row['start_amount'];
                    }
                    $tax=(($row['rate']/100)*$diff);
                    $TotalTax += $tax;	
                } 
              $TaxAmount = ($TotalTax/365)*$numberofdays;
             //print_r($TaxAmount);exit();
        $netAmount = number_format(($totamount-$TaxAmount),2);
		}else if($aAmount->sal_type == 2){
			$netAmount = $Amount;
		}
			$workingper   = $this->db->select('COUNT(date) AS date')->from('emp_attendance')->where('date BETWEEN "'. date('d-m-Y', strtotime($startd)). '" and "'. date('d-m-Y', strtotime($end)).'"')->where("employee_id" ,$value->employee_id )->get()->row()->date;
			$paymentData = array(
				'employee_id'           => $value->employee_id,
				'total_salary'          => $netAmount,
				'total_working_minutes' => $worhour, 
				'working_period'        => $workingper,
			);
			if(!empty($aAmount->employee_id)){
				$this->db->insert('employee_salary_payment', $paymentData);
			}
		}
				$this->session->set_flashdata('message', display('successfully_saved_saletup'));
				redirect("payroll/Payroll/create_salary_generate");
			} else {
				$data['title']  = display('create');
				$data['module'] = "payroll";
				$data['page']   = "salary_generate_form"; 
				$data['salgen'] = $this->Payroll_model->salary_generateView();
				echo Modules::run('template/layout', $data);   

			}   
		}
		public function delete_sal_gen($id = null) 
		{ 
			$this->permission->module('payroll','delete')->redirect();

			if ($this->Payroll_model->salary_gen_delete($id)) {
			#set success message
				$this->session->set_flashdata('message',display('delete_successfully'));
			} else {
			#set exception message
				$this->session->set_flashdata('exception',display('please_try_again'));
			}
			redirect("payroll/Payroll/salary_generate_view");
		}

		public function update_salgen_form($id = null){
			$this->form_validation->set_rules('ssg_id',null,'max_length[11]');
			$this->form_validation->set_rules('name',display('name'),'max_length[50]');

			$this->form_validation->set_rules('start_date',display('start_date'));
			$this->form_validation->set_rules('end_date',display('end_date'));
		#-------------------------------#
			if ($this->form_validation->run() === true) {
				$postData = [
					'ssg_id' 	             => $this->input->post('ssg_id',true),
					'name'                   => $this->input->post('name',true),
					'start_date' 	         => $this->input->post('start_date',true),
					'end_date' 	             => $this->input->post('end_date',true),
				]; 
				if ($this->Payroll_model->update_sal_gen($postData)) { 
					$this->session->set_flashdata('message', display('successfully_updated'));
				} else {
					$this->session->set_flashdata('exception',  display('please_try_again'));
				}
				redirect("payroll/Payroll/salary_generate_view");
			} else {
				$data['title']  = display('update');
				$data['data']   =$this->Payroll_model->salargen_updateForm($id);
				$data['module'] = "payroll";
				$data['page']   = "update_salarygenerate_form";   
				echo Modules::run('template/layout', $data); 
			}

		}
		/* salary setup update form  start*/
		public function updates_salstup_form($id = null){

 		#-------------------------------#
		
			$this->form_validation->set_rules('employee_id',display('employee_id'),'required|max_length[50]');
			$this->form_validation->set_rules('sal_type',display('sal_type'));
			$this->form_validation->set_rules('amount[]',display('amount'));
			$this->form_validation->set_rules('salary_payable',display('salary_payable'));
			$this->form_validation->set_rules('absent_deduct',display('absent_deduct'));
			$this->form_validation->set_rules('tax_manager',display('tax_manager'));
			$amount=$this->input->post('amount');

		#-------------------------------#
			if ($this->form_validation->run() === true) {
			
				$postDataNew = [
			'employee_id'    			=> $this->input->post('employee_id',true),
			'basic'           			=> $this->input->post('basic_',true),
			'hra'           			=> $this->input->post('hra',true),
			'ca'           				=> $this->input->post('ca',true),
			'ma'           				=> $this->input->post('ma',true),
			'esi_status'           		=> $this->input->post('esi_status',true),
			'ta'           				=> $this->input->post('ta',true),
			'earned_salary_after_hra'   => $this->input->post('earned_salary_after_hra',true),
			'earned_salary'           	=> $this->input->post('earned_salary',true),
			'total_deductions'          => $this->input->post('total_deductions',true),
			'salary_payable'           	=> $this->input->post('salary_payable',true),
			'pf'           				=> $this->input->post('pf',true),
			'esi'           			=> $this->input->post('esi',true),
			'advance'           		=> $this->input->post('advance',true),
			'loan'           			=> $this->input->post('loan',true),
			'tds'           			=> $this->input->post('tds',true),
			'employer_pf'           	=> $this->input->post('employer_pf',true),
			'employer_esi'           	=> $this->input->post('employer_esi',true),
			'gross_salary'           	=> $this->input->post('gross_salary',true),
			'net_salary'           		=> $this->input->post('net_salary',true)			
			];
			
			$this->Payroll_model->SalaryNewUpdate($postDataNew);
			 
				foreach($amount as $key=>$value)
				{

					$postData = array(
						'employee_id'        => $this->input->post('employee_id',true),
						'sal_type'           => $this->input->post('sal_type',true),
						'salary_type_id' 	 => $key,
						'amount' 	         => $value,
						'gross_salary'          => $this->input->post('gross_salary',true),
					);

					$this->Payroll_model->update_sal_stup($postData);

				}


				if($this->input->post('absent_deduct',true)==1)
				{
					$absent_deduct=1;	
				}
				else
				{
					$absent_deduct=0;
				}


				if($this->input->post('tax_manager',true)==1)
				{
					$tax_manager=1;	
				}
				else
				{
					$tax_manager=0;
				}


				$Data = [
					'employee_id'                => $this->input->post('employee_id',true),
					'salary_payable' 	         => $this->input->post('salary_payable',true),
					'absent_deduct' 	         => $absent_deduct,
					'tax_manager' 	             => $tax_manager,


				];   


				$this->Payroll_model->update_sal_head($Data);



				$this->session->set_flashdata('message', display('successfully_saved_saletup'));
				redirect("payroll/Payroll/updates_salstup_form/". $id);
//
			} else {

			$data['title']       = display('update');
			$data['data']        = $this->Payroll_model->salary_s_updateForm($id);
			$data['salary']        = $this->Payroll_model->salary_details($id);
			$data['samlft']      = $this->Payroll_model->salary_amountlft($id);
			$data['amo']         = $this->Payroll_model->salary_amount($id);
			$data['bb']          = $this->Payroll_model->get_empid($id);
			$data['gt']          = $this->Payroll_model->get_type($id);
			$data['employee']    = $this->Payroll_model->empdropdown();
			$data['type']        = $this->Payroll_model->type();
			$data['payable']     = $this->Payroll_model->payable();
			$data['gt_pay']      = $this->Payroll_model->get_payable($id);
			$data['EmpRate']     = $this->Payroll_model->employee_informationId($id);
			$data['module']      = "payroll";
			$data['page']        = "update_sal_setup_form";
			echo Modules::run('template/layout', $data); 
		}

	}
// salary with tax calculation
	public function salarywithtax(){
		$tamount =$this->input->post('amount');
		$tax = (!empty($this->input->post('tax',true))?$this->input->post('tax',true):0);
		$amount = $tamount+$tax;
       $this->db->select('*');
		$this->db->from('payroll_tax_setup');
		$this->db->where("start_amount <",$amount);
		$query = $this->db->get();
		$taxrate = $query->result_array();
		$TotalTax = 0;
	    foreach($taxrate as $row){
                    // "Inside tax calculation";
	    	    if($amount > $row['start_amount'] && $amount > $row['end_amount']){
                   $diff=$row['end_amount']-$row['start_amount'];
                    }
                     if($amount > $row['start_amount'] && $amount < $row['end_amount']){
                    $diff=$amount-$row['start_amount'];
                    }
                    $tax=(($row['rate']/100)*$diff);
                    $TotalTax += $tax;	
                } 
		$salary = $TotalTax;
		echo json_encode($salary);
	}

//employee Basic Salary get
	public function employeebasic(){
		$id = $this->input->post('employee_id');
		$data = $this->db->select('rate,rate_type,esi_status')->from('employee_history')->where('employee_id',$id)->get()->row();
		$basic = $data->rate;
		if($data->rate_type ==1){
			$type = 'Hourly';
		}else{
			$type = 'Salary';	
		}
		$sent = array(
			'rate' =>  $data->rate,
			'rate_type' =>$data->rate_type,
			'stype' => $type,
			'esi_status' =>$data->esi_status
		);
		echo json_encode($sent);
	}
	
	
	
	
	public function paidleave(){
		$id = $this->input->post('employee_id');
		$financial_year = $this->input->post('financial_year');
		 $data = $this->db->select('no_leave')->from('employee_paid_leave')->where('employee_id',$id)->where('year',$financial_year)->get()->row();
		$sent = array(
			'no_leave' =>  $data->no_leave
		); 
		echo json_encode($sent);
	}
	
	public function precentday(){
		$employee_id = $this->input->post('employee_id');
		$day = $this->input->post('day');
		$month = $this->input->post('month');
		$year = $this->input->post('year');
		if( $day < 10 )
		{
			$day = "0".$day;
		}
		if( $month < 10 )
		{
			$month = "0".$month;
		}
		$date = $year.'-'.$month.'-'.$day;
		
		$data = $this->db->select('*')->from('emp_attendance')->where('employee_id',$employee_id)->where('date',$date)->get();
		
		$sent = array(
			'count' => $data->num_rows(), //$data->no_leave
			'date' =>  $date
		); 
		echo json_encode($sent);
	}
	public function salary_setup_view_report()
	{
		$this->permission->module('payroll','read')->redirect();
		$data['title']         = display('view_salary_setup');  ;
		$data['emp_sl_setup']  = $this->Payroll_model->salary_setupindex_report();
		$data['module']        = "payroll";
		$data['page']          = "sal_setupview_report";
		echo Modules::run('template/layout', $data);
		
	}
	
	
	public function salary_setup_view_report_wps()
	{
		$this->permission->module('payroll','read')->redirect();
		$data['title']         = display('view_salary_setup');  ;
		$data['emp_sl_setup']  = $this->Payroll_model->salary_setupindex_report_wps();
		$data['module']        = "payroll";
		$data['page']          = "sal_setupview_report_wps";
		echo Modules::run('template/layout', $data);
		
	}
}
