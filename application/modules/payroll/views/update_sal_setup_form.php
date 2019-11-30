       <div class="row">
          <div class="col-sm-12 col-md-12">
            <div class="panel">

              <div class="panel-body">

                <?= form_open('payroll/Payroll/updates_salstup_form/'. $data->employee_id) ?>
                <div class="form-group row">
                  <label for="employee_id" class="col-sm-3 col-form-label"><?php echo display('employee_name') ?> *</label>
				  <input type="hidden" name="employee_id" value="<?php echo $data->employee_id ;  ?>">
                  <div class="col-sm-9">
                   <?php echo form_dropdown('employee_id',$employee,(!empty($data->employee_id)?$data->employee_id:null),'class="form-control" id="employee_id" style="width:615px" onchange="employechange(this.value)" disabled="disabled"') ?>
                 </div>
               </div>

               <div class="form-group row">
                <label for="payment_period" class="col-sm-3 col-form-label"><?php echo display('salary_type_id') ?> *</label>
                <div class="col-sm-9">
                 <input type="text" class="form-control" name="sal_type_name" id="sal_type_name" value="<?php if($EmpRate->rate_type==1){
                    echo 'Hourly';
                 }else{
                    echo 'Salary';
                 }?>">
                 <input type="hidden" class="form-control" name="sal_type" id="sal_type" value="<?php echo $EmpRate->rate_type; ?>">
               </div>
             </div>
             <table  border="1" width="100%">
              <div class="row">

                <td class="col-sm-6" style="text-align: center;"><h4  style="text-decoration: underline;font-weight: bold;padding-top:20px">Addition</h4><br>
                 <table id="add">   <?php foreach($amo as $basic){}?> 
				<input type="hidden" id="esi_status" value="<?php echo $salary->esi_status; ?>" >
				<input type="hidden" id="emp_sal_det_id" value="<?php echo $salary->emp_sal_det_id; ?>" >
				
                  <tr><th  style="padding:10px">Basic</th><td><input type="text" id="basic" name="basic" class="form-control" disabled="" value="<?php echo $salary->basic; ?>"></td></tr>
					<tr>
					<th  style="padding:10px"> HRA<?php // echo display('hrm')?></th><td><input type="text" id="hra" name="hra" class="form-control" value="<?php echo $salary->hra; ?>" ></td>
					</tr>
					<tr>
					<th  style="padding:10px"> CA<?php // echo display('hrm')?></th><td><input type="text" id="ca" name="ca" class="form-control" value="<?php echo $salary->ca; ?>" ></td>
					</tr>
					<tr >
					<th  style="padding:10px"> MA<?php // echo display('hrm')?></th><td><input type="text" id="ma" name="ma" <?php if( $salary->esi_status == 1 ){ ?> readonly <?php } ?> class="form-control" value="<?php echo $salary->ma; ?>" ></td>
					</tr>
					 <tr>
					<th  style="padding:10px"> TA<?php // echo display('hrm')?></th><td><input type="text" id="ta" name="ta" class="form-control" onkeyup="update_amount_ta()"  value="<?php echo $salary->ta; ?>"></td>
			  </tr>
                                   <?php
                 $x=0;
                foreach($amo as $value){?>
                             <tr>
                             <th style="padding:10px"><?php echo $value->sal_name ;?> (%)</th>
                                <td>
                                <input type="text" name="amount[<?php echo $value->salary_type_id; ?>]" class="form-control addamount" onkeyup="summary()" value="<?php echo $value->amount; ?>" id="add_<?php echo $x;?>">
                             </td>
                             </tr>
                             <?php $x++;} ?>
              </table>
            </td> 
            <td class="col-sm-6" style="text-align: center;"><h4 style="text-decoration: underline;font-weight: bold;">Deduction</h4><br>
              <table id="dduct">
			  <input type="hidden" name="earned_salary_after_hra" id="earned_salary_after_hra" value="<?php echo $salary->earned_salary_after_hra; ?>">
			  <input type="hidden" name="earned_salary" id="earned_salary" value="<?php echo $salary->earned_salary; ?>">
			  <input type="hidden" name="total_deductions" id="total_deductions" value="<?php echo $salary->total_deductions; ?>">
			  <input type="hidden" name="salary_payable" id="salary_payable" value="<?php echo $salary->salary_payable; ?>">
			  <tr>
					<th  style="padding:10px"> PF<?php // echo display('hrm')?></th><td><input type="text" id="pf" name="pf" class="form-control" onkeyup="update_deduction()" value="<?php echo $salary->pf; ?>" ></td>
			  </tr>
			  <tr>
					<th  style="padding:10px"> ESI<?php // echo display('hrm')?></th><td><input type="text" id="esi" name="esi" class="form-control" onkeyup="update_deduction()"  value="<?php echo $salary->esi; ?>" <?php if( $salary->esi_status != 1 ){ ?> readonly <?php } ?>  ></td>
			  </tr>
			 <tr>
					<th  style="padding:10px"> ADVANCE<?php // echo display('hrm')?></th><td><input type="text" id="advance" name="advance" class="form-control"onkeyup="update_deduction()" value="<?php echo $salary->advance; ?>"  ></td>
			  </tr>
			   <tr>
					<th  style="padding:10px"> LOAN<?php // echo display('hrm')?></th><td><input type="text" id="loan" name="loan" class="form-control" onkeyup="update_deduction()" value="<?php echo $salary->loan; ?>" ></td>
			  </tr>
			   <tr>
					<th  style="padding:10px"> TDS<?php // echo display('hrm')?></th><td><input type="text" id="tds" name="tds" class="form-control" onkeyup="update_deduction()" value="<?php echo $salary->tds; ?>" ></td>
			  </tr>
			  
                <?php
                $y=0;
                foreach ($samlft as $row){

                  ?>
                  <tr><th style="padding:10px"><?php echo $row->sal_name ;?> (%)</th><td><input type="text" name="amount[<?php echo $row->salary_type_id; ?>]" onkeyup="summary()" class="form-control deducamount" value="<?php echo $row->amount ?>" id="dd_<?php echo $y;?>"></td></tr><?php
               $y++; }
                ?>
               <!-- <tr><th style="padding:10px">Tax (%)</th><td><input type="text" name="amount[]"  onkeyup="summary()"  class="form-control deducamount" id="taxinput" <?php // if($EmpRate->rate_type==1){
                   // echo 'readonly';
                //} ?>></td><td style="padding:10px"><input type="checkbox" name="tax_manager" id="taxmanager" onchange='handletax(this);' value="1" <?php //if($EmpRate->rate_type==1){
                   // echo 'checked'.'  '.'disabled';
               // } ?>>Tax Manager</td></tr>-->

              </table>

            </td> 

          </div>

        </table>
      </div>
	
	<div class="form-group row">
   <label for="payable" class="col-sm-3 col-form-label" style="text-align: center;"> Employer PF<?php// echo display('gross_salary')?></label>
        <div class="col-sm-9">
<input type="text" class="form-control" name="employer_pf" id="employer_pf" value="<?php echo $salary->employer_pf; ?>">
       </div>
</div>


<div class="form-group row">
   <label for="payable" class="col-sm-3 col-form-label" style="text-align: center;"> Employer ESI<?php// echo display('gross_salary')?></label>
        <div class="col-sm-9">
<input type="text" class="form-control" name="employer_esi" id="employer_esi" value="<?php echo $salary->employer_esi; ?>">
       </div>
</div>
	  
	  
<div class="form-group row">
   <label for="payable" class="col-sm-3 col-form-label" style="text-align: center;">Gross Salary</label>
        <div class="col-sm-9">
<input type="text" class="form-control" name="gross_salary" value="<?php echo $salary->gross_salary ; ?>" id="grsalary" onkeyup="update_amount()" >
       </div>
</div>


<div class="form-group row">
   <label for="payable" class="col-sm-3 col-form-label" style="text-align: center;"> Net Salary<?php// echo display('gross_salary')?></label>
        <div class="col-sm-9">
<input type="text" class="form-control" name="net_salary" id="net_salary" value="<?php echo $salary->net_salary ; ?>" readonly>
       </div>
</div>
   
   <div class="form-group text-right">
    <button type="reset" class="btn btn-primary w-md m-b-5"><?php echo display('reset') ?></button>
    <button type="submit" class="btn btn-success w-md m-b-5"><?php echo display('update') ?></button>
  </div>
  <?php echo form_close() ?>

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
	esi = earned_salary * (1.75/100);
	employer_esi = earned_salary * (4.75/100);
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

var dt = $('#dduct tr').length;
alert(dt);
for (i = 0; i < dt; i++) { 
   document.getElementById('dd_'+i).value='';
}
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
	
	ta = $("#ta").val();
	earned_salary_after_hra = grsalary * ( base_p/100 );//same as basic
	earned_salary = grsalary ; // attendance deduction need to be added(wihtout attendance)
	pf = earned_salary_after_hra * (12/100);
	esi = earned_salary * (1.75/100);
	employer_pf = earned_salary_after_hra * (13.15/100);
    employer_esi = earned_salary * (4.75/100);
	total_deductions = parseFloat(pf) + parseFloat(esi) ;
	salary_payable = earned_salary - total_deductions;
	if(ta != 0 || ta != ''){
	net_salary = parseFloat(salary_payable) + parseFloat(ta);
	}
	else
	{
	net_salary = salary_payable ;
	}
	
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


function update_amount_ta()
{
	salary_payable = $("#salary_payable").val();
	net_salary_old = $("#net_salary").val();
	ta = $("#ta").val();
	net_salary = parseFloat(salary_payable) + parseFloat(ta) ;
	if(ta == 0 || ta == '')
	{
	document.getElementById('net_salary').value = net_salary_old;	
	}
	else
	{
	document.getElementById('net_salary').value = net_salary;		
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
	
	earned_salary = $("#earned_salary").val();
	
	total_deductions = parseFloat(pf) + parseFloat(esi) + parseFloat(advance) + parseFloat(loan) + parseFloat(tds);
	
	salary_payable  = parseFloat(earned_salary) - parseFloat(total_deductions) ;
	
	

	if($("#ta").val()!= 0 || $("#ta").val()!= '' )
	{
		ta = $("#ta").val();
	}else
	{
		ta = 0;
	}
	net_salary = parseFloat(salary_payable) + parseFloat(ta);
	
	document.getElementById('net_salary').value = net_salary;
	document.getElementById('total_deductions').value = total_deductions;
	document.getElementById('salary_payable').value = salary_payable;
	
}


</script>