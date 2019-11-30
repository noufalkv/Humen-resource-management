<div class="form-group text-right">
  <?php if($this->permission->method('payroll','create')->access()): ?>
  <button type="button" class="btn btn-primary btn-md" data-target="#add0" data-toggle="modal"  ><i class="fa fa-plus-circle" aria-hidden="true"></i>
   <?php echo display('add_salary_setup') ?></button> 
 <?php endif; ?>
 <?php if($this->permission->method('payroll','read')->access()): ?>
 <a href="<?php echo base_url();?>/payroll/Payroll/salary_setup_view" class="btn btn-primary"><?php echo display('manage_salary_setup') ?></a>
<?php endif; ?>
</div>


<div id="add0" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <strong><?php echo display('salary_setup')?></strong>
      </div>
      <div class="modal-body">


        <div class="row">
          <div class="col-sm-12 col-md-12">
            <div class="panel">

              <div class="panel-body">

                <?= form_open('payroll/Payroll/create_s_setup') ?>
                <div class="form-group row">
                  <label for="employee_id" class="col-sm-3 col-form-label"><?php echo display('employee_name') ?> *</label>
                  <div class="col-sm-9">
                   <?php echo form_dropdown('employee_id',$employee,null,'class="form-control" id="employee_id" style="width:615px" onchange="employechange(this.value)"') ?>
                 </div>
               </div>

               <div class="form-group row">
                <label for="payment_period" class="col-sm-3 col-form-label"><?php echo display('salary_type_id') ?> *</label>
                <div class="col-sm-9">
                 <input type="text" class="form-control" name="sal_type_name" id="sal_type_name" readonly="">
                 <input type="hidden" class="form-control" name="sal_type" id="sal_type">
               </div>
             </div>
			 
			 <input type="hidden" name="financial_year" id="financial_year" value="<?php echo $financial_year ; ?>"  >
			 <input type="hidden" name="total_leave" id="total_leave" value=""  >
			 <input type="hidden" name="d_leave" id="d_leave" value="0"  >
			  <input type="hidden" name="adj_leave" id="adj_leave" value="0"  >
			  <input type="hidden" name="paid_level" id="paid_level" value="">
			  <input type="hidden" name="present_days" id="present_days" value="0">
			  <input type="hidden" name="total_days" id="total_days" value="">
			  <input type="hidden" name="num_days_n_month" id="num_days_n_month" value="0">
			  <input type="hidden" name="holiday" id="holiday" value="<?php echo $holidays ; ?>" >
			  <input type="hidden" name="num_month_holiday" id="num_month_holiday" value="0" >
			  <input type="hidden" name="no_sunday" id="no_sunday" value="0" >
			 <div class="form-group row">
                  <label for="employee_id" class="col-sm-3 col-form-label">
				  Month<?php// echo display('employee_name') ?> *</label>
				  
                  <div class="col-sm-9">
                   <?php 
				   $current_month = date('m');
				   echo form_dropdown('month',$months,null,'class="form-control" id="employee_id" style="width:615px" onchange="month_change(this.value)"') ?>
                 </div>
               </div>
             <table  border="1" width="100%">
              <
			  class="row">

                <td class="col-sm-6" style="text-align: center;"><h4  style="text-decoration: underline;font-weight: bold;padding-top:20px"><?php echo display('addition')?></h4><br>
                 <table id="add">
				  <input type="hidden" id="esi_status" name="esi_status" value="">	
                  <tr>
				  <th  style="padding:10px"><?php echo display('basic')?></th><td>
				  <input type="text" id="basic" name="basic_" class="form-control" ></td>
				  </tr>
				  
					<tr>
					<th  style="padding:10px"> HRA<?php // echo display('hrm')?></th><td><input type="text" id="hra" name="hra" class="form-control" ></td>
					</tr>
					<tr>
					<th  style="padding:10px"> CA<?php // echo display('hrm')?></th><td><input type="text" id="ca" name="ca" class="form-control" ></td>
					</tr>
					<tr>
					<th  style="padding:10px"> MA<?php // echo display('hrm')?></th><td><input type="text" id="ma" name="ma" class="form-control" ></td>
					</tr>
					 <tr>
					<th  style="padding:10px"> TA<?php // echo display('hrm')?></th><td><input type="text" id="ta" name="ta" class="form-control" onkeyup="update_deduction()"></td>
			  </tr>
			   <tr>
					<th  style="padding:10px"> Arrear<?php // echo display('hrm')?></th><td><input type="text" id="arrear_add" name="arrear_add" class="form-control" onkeyup="update_deduction()"></td>
			  </tr>
                                   <?php
                 $x=0;
                 foreach ($slname as $ab){
                  ?>
                  <tr><th style="padding:10px"><?php echo $ab->sal_name ;?></th><td><input type="text" name="amount[<?php echo $ab->salary_type_id; ?>]" class="form-control addamount <?php echo $ab->sal_name ;?>" onkeyup="summary()" id="add_<?php echo $x;?>"></td></tr>
                  <?php
                $x++;}
                ?>
              </table>
            </td> 
            <td class="col-sm-6" style="text-align: center;"><h4 style="text-decoration: underline;font-weight: bold;"><?php echo display('deduction')?></h4><br>
              <table id="dduct">
			  <input type="hidden" name="earned_salary_after_hra" id="earned_salary_after_hra" value="">
			  <input type="hidden" name="earned_salary" id="earned_salary" value="">
			  <input type="hidden" name="total_deductions" id="total_deductions" value="">
			  <input type="hidden" name="salary_payable" id="salary_payable" value="">
			  <tr>
					<th  style="padding:10px"> PF<?php // echo display('hrm')?></th><td><input type="text" id="pf" name="pf" class="form-control" onkeyup="update_deduction()" ></td>
			  </tr>
			  <tr>
					<th  style="padding:10px"> ESI<?php // echo display('hrm')?></th><td><input type="text" id="esi" name="esi" class="form-control" onkeyup="update_deduction()" ></td>
			  </tr>
			 <tr>
					<th  style="padding:10px"> ADVANCE<?php // echo display('hrm')?></th><td><input type="text" id="advance" name="advance" class="form-control"onkeyup="update_deduction()" ></td>
			  </tr>
			   <tr>
					<th  style="padding:10px"> LOAN<?php // echo display('hrm')?></th><td><input type="text" id="loan" name="loan" class="form-control" onkeyup="update_deduction()" ></td>
			  </tr>
			  
			  <tr>
					<th  style="padding:10px"> TDS<?php // echo display('hrm')?></th><td><input type="text" id="tds" name="tds" class="form-control" onkeyup="update_deduction()" ></td>
			  </tr>
			   <tr>
					<th  style="padding:10px"> Arrear<?php // echo display('hrm')?></th><td><input type="text" id="arrear_ded" name="arrear_ded" class="form-control" onkeyup="update_deduction()" ></td>
			  </tr>
			  
			  <tr>
					<th  style="padding:10px"> Other Deductions<?php // echo display('hrm')?></th><td><input type="text" id="other_ded" name="other_ded" class="form-control" onkeyup="update_deduction()" ></td>
			  </tr>
			  
                <?php
                $y=0;
                foreach ($sldname as $row){
                  ?>
                  <tr><th style="padding:10px"><?php echo $row->sal_name ;?> (%)</th><td><input type="text" name="amount[<?php echo $row->salary_type_id; ?>]" onkeyup="summary()" class="form-control deducamount" id="dd_<?php echo $y;?>"></td></tr><?php
               $y++; }
                ?>
                <!--<tr><th style="padding:10px"><?php // echo display('tax')?> (%)</th><td><input type="text" name="amount[]"  onkeyup="summary()"  class="form-control deducamount" id="taxinput"></td><td style="padding:10px"><input type="checkbox" name="tax_manager" id="taxmanager" onchange='handletax(this);' value="1">Tax Manager</td></tr>-->

              </table>

            </td> 

          </div>

        </table>
      </div>



<div class="form-group row">
   <label for="payable" class="col-sm-3 col-form-label" style="text-align: center;"> Employer PF<?php// echo display('gross_salary')?></label>
        <div class="col-sm-9">
<input type="text" class="form-control" name="employer_pf" id="employer_pf">
       </div>
</div>


<div class="form-group row">
   <label for="payable" class="col-sm-3 col-form-label" style="text-align: center;"> Employer ESI<?php// echo display('gross_salary')?></label>
        <div class="col-sm-9">
<input type="text" class="form-control" name="employer_esi" id="employer_esi">
       </div>
</div>



<div class="form-group row">
   <label for="payable" class="col-sm-3 col-form-label" style="text-align: center;"><?php echo display('gross_salary')?></label>
        <div class="col-sm-9">
<input type="text" class="form-control" name="gross_salary" id="grsalary" onkeyup="update_amount()">
       </div>
</div>




<div class="form-group row">
   <label for="payable" class="col-sm-3 col-form-label" style="text-align: center;"> Net Salary<?php// echo display('gross_salary')?></label>
        <div class="col-sm-9">
<input type="text" class="form-control" name="net_salary" id="net_salary" readonly>
       </div>
</div>

   <div class="form-group text-right">
    <button type="reset" class="btn btn-primary w-md m-b-5"><?php echo display('reset') ?></button>
    <button type="submit" class="btn btn-success w-md m-b-5"><?php echo display('set') ?></button>
  </div>
  <?php echo form_close() ?>

</div>  
</div>
</div>
</div>
</div>
</div>
</div>
<div class="row">
  <!--  table area -->
  <div class="col-sm-12">
    
    <div class="panel panel-default thumbnail"> 

      <div class="panel-body">
        <table width="100%" class="datatable table table-striped table-bordered table-hover">
          <thead>
            <tr>
              <th><?php echo display('cid') ?></th>
              <th>Employee Name</th>
              <th><?php echo display('employee_id') ?></th>
              <th><?php echo display('sal_type') ?></th>
              <th>Date</th>

            </tr>
          </thead>
          <tbody>
            <?php if (!empty($emp_sl_setup)) { ?>
              <?php $sl = 1; ?>
              <?php foreach ($emp_sl_setup as $que) { ?>
                <tr class="<?php echo ($sl & 1)?"odd gradeX":"even gradeC" ?>">
                  <td><?php echo $sl; ?></td>
                  <td><?php echo $que->first_name.' '.$que->last_name; ?></td>
                  <td><?php echo $que->employee_id; ?></td>
                  <td><?php echo $que->sal_type; ?></td>
                  <td><?php echo $que->create_date; ?></td>
                </tr>
                <?php $sl++; ?>
              <?php } ?> 
            <?php } ?> 
          </tbody>
        </table>  <!-- /.table-responsive -->
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  function summary(){
var addper = 0;
 $(".addamount").each(function() {
        isNaN(this.value) || 0 == this.value.length || (addper += parseFloat(this.value))
    });
 if(addper >100){
  alert('You Can Not input more than 100%');
 }
var b = parseInt($('#basic').val());
var add = 0;
var deduct = 0;
 $(".addamount").each(function() {
  var value = this.value;
  var basic = parseInt($('#basic').val());
        isNaN(value*basic/100) || 0 == (value*basic/100).length || (add += parseFloat(value*basic/100))
    });
 $(".deducamount").each(function() {
   var value = this.value;
  var basic = parseInt($('#basic').val());
        isNaN(value*basic/100) || 0 == (value*basic/100).length || (deduct += parseFloat(value*basic/100))
    });
document.getElementById('grsalary').value=add+b-(deduct);
}

 function handletax(checkbox){
  var deduct = 0;
  var add = 0;
  var b = parseInt($('#basic').val());
   $(".deducamount").each(function() {
   var value = this.value;
  var basic = parseInt($('#basic').val());
        isNaN(value*basic/100) || 0 == (value*basic/100).length || (deduct += parseFloat(value*basic/100))
    });
    $(".addamount").each(function() {
  var value = this.value;
  var basic = parseInt($('#basic').val());
        isNaN(value*basic/100) || 0 == (value*basic/100).length || (add += parseFloat(value*basic/100))
    });
 
  var amount = b-deduct;
  var  tax    = parseInt($('#taxinput').val());
  var netamount = amount+tax;
    if(checkbox.checked == true){
       $.ajax({
        url : '<?php echo site_url('payroll/Payroll/salarywithtax/')?>',
            method: 'post',
            dataType: 'json',
            data: 
            {
                'amount': amount,
                'tax'   : tax,
            },
        success: function(data)
        {            
              document.getElementById('grsalary').value=add+b-data-deduct;
              document.getElementById('taxinput').value='';
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
    }else{
var b = parseInt($('#basic').val());
var add = 0;
var deduct = 0;
 $(".addamount").each(function() {
  var value = this.value;
  var basic = parseInt($('#basic').val());
        isNaN(value*basic/100) || 0 == (value*basic/100).length || (add += parseFloat(value*basic/100))
    });
 $(".deducamount").each(function() {
   var value = this.value;
  var basic = parseInt($('#basic').val());
        isNaN(value*basic/100) || 0 == (value*basic/100).length || (deduct += parseFloat(value*basic/100))
    });
document.getElementById('grsalary').value=add+b-(deduct);
   }
}
//onchange empoyee id information
function employechange(id){
//alert(id);
$.ajax({
  url:"<?php echo base_url('payroll/Payroll/employeebasic/')?>",
  method:'post',
  dataType:'json',
  data:{
'employee_id': id,
  },
  success:function(data){

document.getElementById('grsalary').value=data.rate;
document.getElementById('sal_type').value=data.rate_type;
document.getElementById('sal_type_name').value=data.stype;
/* salary calculation of kvr*/
var base_p,hra_p,ca_p,ma_p;
if(data.rate != 0 || data.rate !='')
{
	if(data.rate <= 6500)
	{
		base_p = 85;
		hra_p = 15;
		ca_p = 0;
		ma_p = 0;
	}else if(data.rate > 6500 && data.rate <= 9999)
	{
		base_p = 70;
		hra_p = 20;
		ca_p = 10;
		ma_p = 0;
		
	}else if(data.rate >= 10000 && data.rate <= 10999)
	{
		base_p = 65;
		hra_p = 20;
		ca_p = 15;
		ma_p = 0;
		
	}else if(data.rate >= 11000 && data.rate <= 11999)
	{
		base_p = 60;
		hra_p = 25;
		ca_p = 20;
		ma_p = 0;
		
	}else if(data.rate >= 12000 && data.rate <= 13999)
	{
			base_p = 55;
			hra_p = 25;
			ca_p = 20;
			ma_p = 0;
	}else if(data.rate >= 14000 && data.rate <= 17999)
	{
		base_p = 50;
		hra_p = 30;
		ca_p = 20;
		ma_p = 0;
		
	}else if(data.rate >= 18000 && data.rate <= 21999)
	{
		base_p = 45;
		hra_p = 25;
		ca_p = 15;
		if(data.esi_status == 0)
		{
		ma_p = 15;
		}else
		{
		ma_p = 0;	
		}
		
	}else if(data.rate >= 22000 && data.rate <= 50000)
	{
		base_p = 40;
		hra_p = 30;
		ca_p = 15;
		if(data.esi_status == 0)
		{
		ma_p = 15;
		}else
		{
		ma_p = 0;	
		}
		
	}
	document.getElementById('basic').value = data.rate * ( base_p/100 );
	document.getElementById('hra').value = data.rate * ( hra_p/100 );
	document.getElementById('ca').value = data.rate * ( ca_p/100 );
	document.getElementById('ma').value = data.rate * ( ma_p/100 );
	document.getElementById('esi_status').value = data.esi_status;
	if(data.esi_status == 1)
	{
		//$("#ma").prop("readonly", true);
		document.getElementById('ma').readOnly = true;
		document.getElementById('esi').readOnly = false;
	}
	else
	{
		document.getElementById('esi').readOnly = true;
		document.getElementById('ma').readOnly = false;
	}
	earned_salary_after_hra = data.rate * ( base_p/100 );//same as basic
	earned_salary = data.rate ; // attendance deduction need to be added(wihtout attendance)
	pf = earned_salary_after_hra * (12/100);
	employer_pf = earned_salary_after_hra * (13.15/100);
	if(data.esi_status == 1)
	{
		esi = earned_salary * (1.75/100);
		employer_esi = earned_salary * (4.75/100);		
	}
	else
	{
		esi = 0;
		employer_esi = 0;
	}
	
	total_deductions = parseFloat(pf) + parseFloat(esi) ;
	salary_payable = earned_salary - total_deductions;
	net_salary = salary_payable;
	
	document.getElementById('pf').value = pf;
	document.getElementById('employer_pf').value = employer_pf;
	document.getElementById('esi').value = esi;
	document.getElementById('employer_esi').value = employer_esi;
	document.getElementById('net_salary').value = net_salary;
	//setting hidden filed value
	document.getElementById('earned_salary_after_hra').value = earned_salary_after_hra;
	document.getElementById('earned_salary').value = earned_salary;
	document.getElementById('total_deductions').value = total_deductions;
	document.getElementById('salary_payable').value = salary_payable;
}
/* end salary calculation of kvr*/	
if(data.rate_type==1){
  document.getElementById("taxinput").disabled = true;
   document.getElementById("taxmanager").checked = true;
   document.getElementById("taxmanager").setAttribute('disabled','disabled');  
}else{
  document.getElementById("taxinput").disabled = false;
   document.getElementById("taxmanager").checked = false;
  document.getElementById("taxmanager").removeAttribute('disabled');  
}
var i;
var count = $('#add tr').length;
for (i = 0; i < count; i++) { 
   document.getElementById('add_'+i).value='';
    //document.getElementById('dd_'+i).value='';
}

// var dt = $('#dduct tr').length;
// alert(dt);
// for (i = 0; i < dt; i++) { 
//    document.getElementById('dd_'+i).value='';
// }
  },
   error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
});
}


function update_amount()
{
var grsalary = $("#grsalary").val();
var esi_status = $("#esi_status").val();
//alert(esi_status); 
 var base_p,hra_p,ca_p,ma_p;
if(grsalary != 0 || grsalary !='')
{
	if(grsalary <= 6500)
	{
		base_p = 85;
		hra_p = 15;
		ca_p = 0;
		ma_p = 0;
	}else if(grsalary > 6500 && grsalary <= 9999)
	{
		base_p = 70;
		hra_p = 20;
		ca_p = 10;
		ma_p = 0;
		
	}else if(grsalary >= 10000 && grsalary <= 10999)
	{
		base_p = 65;
		hra_p = 20;
		ca_p = 15;
		ma_p = 0;
		
	}else if(grsalary >= 11000 && grsalary <= 11999)
	{
		base_p = 60;
		hra_p = 25;
		ca_p = 20;
		ma_p = 0;
		
	}else if(grsalary >= 12000 && grsalary <= 13999)
	{
			base_p = 55;
			hra_p = 25;
			ca_p = 20;
			ma_p = 0;
	}else if(grsalary >= 14000 && grsalary <= 17999)
	{
		base_p = 50;
		hra_p = 30;
		ca_p = 20;
		ma_p = 0;
		
	}else if(grsalary >= 18000 && grsalary <= 21999)
	{
		base_p = 45;
		hra_p = 25;
		ca_p = 15;
		if(esi_status == 0)
		{
		ma_p = 15;
		}else
		{
		ma_p = 0;	
		}
		
	}else if(grsalary >= 22000 && grsalary <= 50000)
	{
		base_p = 40;
		hra_p = 30;
		ca_p = 15;
		if(esi_status == 0)
		{
		ma_p = 15;
		}else
		{
		ma_p = 0;	
		}
		
	}
	document.getElementById('basic').value = grsalary * ( base_p/100 );
	document.getElementById('hra').value = grsalary * ( hra_p/100 );
	document.getElementById('ca').value = grsalary * ( ca_p/100 );
	document.getElementById('ma').value = grsalary * ( ma_p/100 );
	
	//ta = $("#ta").val();
	earned_salary_after_hra = grsalary * ( base_p/100 );//same as basic
	earned_salary = $("#earned_salary").val(); // attendance deduction need to be added(wihtout attendance)
	pf = earned_salary_after_hra * (12/100);
	
	if(esi_status == 1)
	{
		esi = earned_salary * (1.75/100);	
	}
	else
	{
		esi = 0;
	}
	if($("#advance").val()!= 0 || $("#advance").val()!= '' )
	{
		advance = $("#advance").val();
	}else
	{
		advance = 0;
	}
	
	if($("#loan").val()!= 0 || $("#loan").val()!= '' )
	{
		loan = $("#loan").val();
	}else
	{
		loan = 0;
	}
	
	if($("#tds").val()!= 0 || $("#tds").val()!= '' )
	{
		tds = $("#tds").val();
	}else
	{
		tds = 0;
	}
	
	if($("#arrear_ded").val()!= 0 || $("#arrear_ded").val()!= '' )
	{
		arrear_ded = $("#arrear_ded").val();
	}else
	{
		arrear_ded = 0;
	}
	
	if($("#other_ded").val()!= 0 || $("#other_ded").val()!= '' )
	{
		other_ded = $("#other_ded").val();
	}else
	{
		other_ded = 0;
	}
	
	employer_pf = earned_salary_after_hra * (13.15/100);
    employer_esi = earned_salary * (4.75/100);

	total_deductions = parseFloat(pf) + parseFloat(esi) + parseFloat(advance) + parseFloat(loan) + parseFloat(tds) + parseFloat(arrear_ded) + parseFloat(other_ded);

	salary_payable = earned_salary - total_deductions;
	if($("#ta").val()!= 0 || $("#ta").val()!= '' )
	{
		ta = $("#ta").val();
	}else
	{
		ta = 0;
	}
	if($("#arrear_add").val()!= 0 || $("#arrear_add").val()!= '' )
	{
		arrear_add = $("#arrear_add").val();
	}else
	{
		arrear_add = 0;
	}
	//console.log(arrear_add);
	net_salary = parseFloat(salary_payable) + parseFloat(ta) + parseFloat(arrear_add);
	
	document.getElementById('pf').value = pf;
	document.getElementById('esi').value = esi;
	document.getElementById('employer_pf').value = employer_pf;
	document.getElementById('employer_esi').value = employer_esi;
	document.getElementById('net_salary').value = net_salary;
	//setting hidden filed value
	document.getElementById('earned_salary_after_hra').value = earned_salary_after_hra;
	document.getElementById('earned_salary').value = earned_salary;
	document.getElementById('total_deductions').value = total_deductions;
	document.getElementById('salary_payable').value = salary_payable;
	
	
	
} 

}

function update_deduction()
{
	
	 net_salary_old = $("#net_salary").val();
	
	salary_payable_old = $("#salary_payable").val();
	
	if($("#pf").val()!= 0 || $("#pf").val()!= '' )
	{
		pf = $("#pf").val();
	}else
	{
		pf = 0;
	}
	 
	if($("#esi").val()!= 0 || $("#esi").val()!= '' )
	{
		esi = $("#esi").val();
	}else
	{
		esi = 0;
	}
	
	if($("#advance").val()!= 0 || $("#advance").val()!= '' )
	{
		advance = $("#advance").val();
	}else
	{
		advance = 0;
	}
	
	if($("#loan").val()!= 0 || $("#loan").val()!= '' )
	{
		loan = $("#loan").val();
	}else
	{
		loan = 0;
	}
	
	if($("#tds").val()!= 0 || $("#tds").val()!= '' )
	{
		tds = $("#tds").val();
	}else
	{
		tds = 0;
	}
	
	if($("#arrear_ded").val()!= 0 || $("#arrear_ded").val()!= '' )
	{
		arrear_ded = $("#arrear_ded").val();
	}else
	{
		arrear_ded = 0;
	}
	
	if($("#other_ded").val()!= 0 || $("#other_ded").val()!= '' )
	{
		other_ded = $("#other_ded").val();
	}else
	{
		other_ded = 0;
	}
	
	earned_salary = $("#earned_salary").val();
	
	total_deductions = parseFloat(pf) + parseFloat(esi) + parseFloat(advance) + parseFloat(loan) + parseFloat(tds) + parseFloat(arrear_ded)+ parseFloat(other_ded);
	
	salary_payable  = parseFloat(earned_salary) - parseFloat(total_deductions) ;
	
	

	if($("#ta").val()!= 0 || $("#ta").val()!= '' )
	{
		ta = $("#ta").val();
	}else
	{
		ta = 0;
	}
	if($("#arrear_add").val()!= 0 || $("#arrear_add").val()!= '' )
	{
		arrear_add = $("#arrear_add").val();
	}else
	{
		arrear_add = 0;
	}
	//console.log(arrear_add);
	net_salary = parseFloat(salary_payable) + parseFloat(ta) + parseFloat(arrear_add);
	
	document.getElementById('net_salary').value = net_salary;
	document.getElementById('total_deductions').value = total_deductions;
	document.getElementById('salary_payable').value = salary_payable;	
}


function month_change(month_val)
{
	
	financial_year = $("#financial_year").val();
	employee_id = $("#employee_id").val();
  //ajax
  $.ajax({
  url:"<?php echo base_url('payroll/Payroll/paidleave/')?>",
  method:'post',
  dataType:'json',
  data:{
	'employee_id': employee_id,
	'financial_year': financial_year
  },
  success:function(data){
	  //console.log(data);
	  var paid_leave = data.no_leave;
	  $("#paid_level").val(paid_leave);
	  var year = parseInt(financial_year);
	  var month = parseInt(month_val)-1;
	  var sundays = [];
	  var final_days = [];
	  var holiday = $("#holiday").val().split('#');
	  var holiday_month = holiday[month].split(',');
	  $("#num_month_holiday").val(holiday_month.length);
	  num_days_n_month = getDaysInMonth(month_val, year);
	  $("#num_days_n_month").val(num_days_n_month);
	  for (var i = 1; i <= num_days_n_month; i++)
	  {    
		var date = new Date(year, month, i);
		
		if (date.getDay() == 0)
				{
					sundays.push(i);    
				}
				else
				{
					if($.inArray(i.toString(), holiday_month) > -1)
						{
							
						}
						else{
							final_days.push(i);
						}
					
				}
	  }
	  $("#no_sunday").val(sundays.length);
	  console.log(holiday_month,final_days)
	 
	
	$.each( final_days, function( i, val ) {
		
		$.ajax({
					url:"<?php echo base_url('payroll/Payroll/precentday/')?>",
					method:'post',
					dataType:'json',
					data:{
							'day': val,
							'month': month_val,
							'year': financial_year,
							'employee_id':employee_id
						 },
					success:function(data){
						//console.log(data);
						 if(data.count > 0 )
						 {
							 
							 var present_days_old = $("#present_days").val();
							 var present_days_new = parseInt(present_days_old) + parseInt(1);
							 $("#present_days").val(present_days_new);
							 //console.log('precent');
							  
						 }else
						 {
							//console.log('leave');
							 
							var paid_level_old = $("#paid_level").val();
							if(paid_level_old != 0)
							{
								paid_leave_new = paid_level_old-1 ;
								$("#paid_level").val(paid_leave_new);
								
								var adj_leave_old = $("#adj_leave").val();
								adj_leave_new =  parseInt(adj_leave_old) + parseInt(1);
								$("#adj_leave").val(adj_leave_new);
								
							}
							else
							{
								var d_leave_old = $("#d_leave").val();
								d_leave_new = parseInt(d_leave_old) + parseInt(1);
								$("#d_leave").val(d_leave_new);							
							}
							
						 }
						 
					}
		});//inner ajax
	});//each

//leave deduction calculation
setTimeout(function(){ 
if($("#d_leave").val() != '')
{
	var d_leave = $("#d_leave").val();	
}
else
{
	var d_leave = 0;	
}

var grsalary = $("#grsalary").val();
var esi_status = $("#esi_status").val();
var pf = $("#pf").val();
if($("#ta").val() != '')
{
	var ta = $("#ta").val();
}
else
{
	var ta = 0;
}


console.log(d_leave,grsalary,esi_status,pf,ta);
var total_days =  num_days_n_month - d_leave ;
var earned_salary =  ( grsalary / num_days_n_month ) *  total_days;

if(esi_status == 1)
	{
		var esi = earned_salary * (1.75/100);
		var employer_esi = earned_salary * (4.75/100);		
	}
	else
	{
		var esi = 0;
		var employer_esi = 0;
	}
	
	if($("#advance").val()!= 0 || $("#advance").val()!= '' )
	{
		advance = $("#advance").val();
	}else
	{
		advance = 0;
	}
	
	if($("#loan").val()!= 0 || $("#loan").val()!= '' )
	{
		loan = $("#loan").val();
	}else
	{
		loan = 0;
	}
	
	if($("#tds").val()!= 0 || $("#tds").val()!= '' )
	{
		tds = $("#tds").val();
	}else
	{
		tds = 0;
	}
	
	if($("#arrear_add").val()!= 0 || $("#arrear_add").val()!= '' )
	{
		arrear_add = $("#arrear_add").val();
	}else
	{
		arrear_add = 0;
	}
	
	if($("#arrear_ded").val()!= 0 || $("#arrear_ded").val()!= '' )
	{
		arrear_ded = $("#arrear_ded").val();
	}else
	{
		arrear_ded = 0;
	}
	
	if($("#other_ded").val()!= 0 || $("#other_ded").val()!= '' )
	{
		other_ded = $("#other_ded").val();
	}else
	{
		other_ded = 0;
	}
	
	
	
	
	var total_deductions = parseFloat(pf) + parseFloat(esi) + parseFloat(advance) + parseFloat(loan) + parseFloat(tds) + parseFloat(arrear_ded) + parseFloat(other_ded);
	var salary_payable = earned_salary - total_deductions;
	var net_salary = parseFloat(salary_payable) + parseFloat(ta) + parseFloat(arrear_add);




    document.getElementById('esi').value = esi;
	document.getElementById('employer_esi').value = employer_esi;
	document.getElementById('net_salary').value = net_salary;
	document.getElementById('earned_salary').value = earned_salary;
	document.getElementById('total_deductions').value = total_deductions;
	document.getElementById('salary_payable').value = salary_payable;
	document.getElementById('total_days').value = total_days;


 }, 4425);



/* console.log(sundays, final_days); */
  },
  error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
	});
	//end ajax
}

function getDaysInMonth(month,year) {
  // Here January is 1 based
  //Day 0 is the last day in the previous month
 return new Date(year, month, 0).getDate();
// Here January is 0 based
// return new Date(year, month+1, 0).getDate();
}

</script>
