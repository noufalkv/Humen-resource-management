<style type="text/css">
.nav.nav-tabs li a {
background-color: green;
color:white;
}

.nav.nav-tabs li:not(.active) a {
  pointer-events:none;
  background-color: #2554C7;
  color:white;
}
.nav.nav-tabs li (.active) a{
  background-color: red;
  color:white;
}
.input__holder3 {
  position: relative;
  width: 250px;
}
ul li a{
  font-size: 12.5px;
}
td, th {	
	padding: 15px;
}
.load_hide{
	display:none;
}
</style>
<?php $experience_arr = $data_new['experience']; $education_arr = $data_new['education']; $nominee_details_arr = $data_new['nominee_details']; ?>
<div class="row">
<div class="container">
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home"><?php echo display('basic_info')?></a></li>
      <li><a data-toggle="tab" href="#menu1" ><?php echo display('positional_info')?></a></li>
      <!--<li><a data-toggle="tab" href="#menu2" ><?php echo display('benefits')?></a></li>-->
      <li><a data-toggle="tab" href="#menu4" ><?php echo display('biographical_info')?></a></li>	  <li><a data-toggle="tab" href="#menu5" ><?php echo display('previous_work_experience')?></a></li>
      <li><a data-toggle="tab" href="#menu6" ><?php echo display('educational_information')?></a></li>	  
	  <li><a data-toggle="tab" href="#menu7" ><?php echo display('bank_and_nominee')?></a></li>
      <!--<li><a data-toggle="tab" href="#menu8" ><?php echo display('custom')?></a></li>-->
      
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
    <div class="row">
        <div class="col-sm-12 col-md-11">
            <div class="panel">
                
                <div class="panel-body">
              <?= form_open_multipart('employee/Employees/update_employee_form/'. $data->employee_id,'id="emp_form"') ?>
                    <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="first_name"><?php echo display('first_name')?><sup class="color-red ">*</sup></label>
                                      
    <input id="first_name" name="first_name" type="text" class="form-control" placeholder="First Name" value="<?php echo $data->first_name;?>">
    <input type="hidden" name="oldfirstname" value="<?php echo $data->first_name;?>">
    <input type="hidden" name="employee_id" value="<?php echo $data->employee_id;?>">

                                    </div>
                                    
                                </div>
                                 
                                   <!-- <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="l_name"><?php echo display('middle_name')?> </label>
                                        <input type="text" class="form-control" id="middle_name"
                                        name="middle_name" placeholder="Your Middle Name" value="<?php echo $data->middle_name;?>">
                                    </div>
                                </div> -->

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="l_name"><?php echo display('last_name')?></label>
                                      
                                        <input type="text" class="form-control" id="last_name"
                                        name="last_name" placeholder="Your Last Name" value="<?php echo $data->last_name;?>">
                                         <input type="hidden" name="oldlastname" value="<?php echo $data->last_name;?>">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="l_name"><?php echo display('maiden_name')?> </label>
                                        <input type="text" class="form-control" id="maiden_name"
                                        name="maiden_name" placeholder="Your Maiden Name" value="<?php echo $data->maiden_name;?>">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="email"><?php echo display('email')?> <sup class="color-red ">*</sup></label>
                                        <input type="email" class="form-control"
                                        name="email" id="email" placeholder="Your Email" value="<?php echo $data->email;?>">
                                       
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="phone"><?php echo display('phone')?>  <sup class="color-red ">*</sup></label>
                                        <input type="number" class="form-control" id="phone" name="phone" placeholder="Your Phone Number" value="<?php echo $data->phone;?>">
                                         
                                    </div>
                                </div>
                                 <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="phone"><?php echo display('alter_phone')?> <sup class="color-red "></sup></label>
                                        <input type="number" class="form-control" name="alter_phone" id="phone" value="<?php echo $data->alter_phone;?>" placeholder="Your Phone Number">
                                    </div>
                                </div>

                            </div>

                          <div class="row">
                                 <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="state"><?php echo display('state')?></label>
                                       <?php echo form_dropdown('state', $country_list, (!empty($data->state)?$data->state:"New York"), ' class="form-control"') ?> 
                                    </div>
                                </div>
                                 <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="city"><?php echo display('city')?> </label>
                                        <input type="text" class="form-control" id="city"
                                        name="city" placeholder="City" value="<?php echo $data->city;?>">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="zip_code"><?php echo display('zip_code')?></label>
                                        <input type="number" class="form-control" id="zip_code"
                                        name="zip_code" placeholder="Your Zip Code" value="<?php echo $data->zip;?>">
                                    </div>
                                </div>
                                
                            </div>
                       
                       

                        <div class="form-group text-right">
                           <input type="button" class="btn btn-primary btnNext" onclick="valid_inf()" value="NEXT">
                            
                        </div>
                   

                </div>  
            </div>
        </div>
    </div>
    </div>
    <div id="menu1" class="tab-pane fade">
         <div class="row">
        <div class="col-sm-12 col-md-11">
            <div class="panel">
                
                <div class="panel-body">
		<div class="row">
                                 <div class="col-sm-6">
                                     <div class="row">
                                      <div class="col-sm-6">
                    <div class="form-group">
              <label for="designation"><?php echo "Department";?> <sup class="color-red ">*</sup></label>
              
                <select name="dept_id" id="designation" class="form-control" style="width: 200px">
                  <option value="">select Designation</option>
                  <?php foreach ($dept as $dep) {?>
                    <option value="<?php echo $dep->dept_id?>"  <?php if($data->dept_id == $dep->dept_id){ echo 'selected';}?>  ><?php echo $dep->department_name;?></option>
                  <?php } ?>
                </select>
                <span id="desig"></span>
            </div>
                </div>
                
               <div class="col-sm-6">
            <div class="form-group">
              <label for="designation"><?php echo display('designation');?> <sup class="color-red ">*</sup></label>
              
                <select name="pos_id" id="designation" class="form-control" style="width: 200px">
                  <option value="">select Designation</option>
                  <?php foreach ($designation as $desig) {?>
                    <option value="<?php echo $desig->pos_id?>"  <?php if($data->pos_id == $desig->pos_id){ echo 'selected';}?> ><?php echo $desig->position_name;?></option>
                  <?php } ?>
                </select>
                <span id="desig"></span>
              
            </div>
            </div>
                                    <!--<div class="form-group">
                                        <label for="designation"><?php echo display('designation');?> <sup class="color-red ">*</sup></label>
                                         
                                            <select name="pos_id" id="designation" class="form-control" style="width: 480px">
                                              <option value="">select Designation</option>
                                                <?php foreach ($designation as $desig) {?>
                                                  <option value="<?php echo $desig->pos_id?>" <?php if($data->pos_id == $desig->pos_id){
                                                    echo 'selected';
                                                  }?>><?php echo $desig->position_name;?></option>
                                               <?php } ?>
                                         </select>
                                         <span id="desig"></span>
                                    </div>-->
                                    </div>
                                </div>


                                 <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="work_hour"><?php echo display('hire_date')?> <sup class="color-red ">*</sup></label>
                                        <input type="text" class="form-control datepicker" 
                                        name="hiredate" id="hiredate" style="width: 480px" placeholder="Hire date" value="<?php echo $data->hire_date ?>">
                                    </div>
                                </div>

                                 
                                 </div>
                                 <div class="row">

                                   <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="work_hour"><?php echo display('s_rate')?><sup class="color-red ">*</sup></label>
                                        <input type="number" class="form-control" 
                                        name="rate" id="rate" placeholder="<?php echo display('s_rate')?>" value="<?php echo $data->rate; ?>">
                                        
                                    </div>
                                </div>
								
								<div class="col-sm-6">
            <div class="form-group">
              <label for="designation"><?php echo display('branch1');?> <sup class="color-red ">*</sup></label>
              <?php echo form_dropdown('branch_id',$branch_options,$data->branch_id,'class="form-control branch_id" style="width: 480px"'); ?>
                
                <span id="desig"></span>
              
            </div>
          </div>
                                 </div>
								 
		<div class="row">
		
		<div class="col-sm-6">
          <div class="form-group">
            <label for="pf_status"><?php echo display('pf_status')?> </label><br>
			
              <input type="radio"  
              name="pf_status" id="pf_status" placeholder="PF Status" value="1" onchange="pf_status_fun('pf_status')" <?php if($data->pf_status == 1){?> checked="checked" <?php } ?> >&nbsp;<?php echo display('yes')?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			  <input type="radio"  
              name="pf_status" id="pf_status" placeholder="PF Status" value="0"  onchange="pf_status_fun()"  <?php if($data->pf_status == 0 || $data->pf_status == '' ){?> checked="checked" <?php } ?> >&nbsp;<?php echo display('no')?>
          </div>
		</div>
		<div <?php if($data->pf_status == 1){?> class="col-sm-6" <?php } else { ?> class="col-sm-6 load_hide" <?php } ?> id="pf_uan_div">
          <div class="form-group">
            <label for="pf_uan"><?php  echo display('pf_uan')?> </label>
            <input type="text" class="form-control" 
              name="pf_uan" id="pf_uan" placeholder="<?php  echo display('pf_uan')?>" value="<?php echo $data->pf_uan ; ?>">  
          </div>
		</div>		
		</div>
		<div class="row">
		
		<div class="col-sm-6">
          <div class="form-group">
            <label for="esi_status"><?php echo display('esi_status')?> </label><br>
              <input type="radio" name="esi_status" id="esi_status" placeholder="ESI Status" value="1" onchange="esi_status_fun()" <?php if($data->esi_status == 1){?> checked="checked" <?php } ?> >&nbsp;<?php echo display('yes')?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			  <input type="radio" name="esi_status" id="esi_status" placeholder="ESI Status" value="0" onchange="esi_status_fun()" <?php if($data->esi_status == 0 || $data->esi_status == '' ){?> checked="checked" <?php } ?>>&nbsp;<?php echo display('no')?>
          </div>
		</div>
		<div <?php if($data->esi_status == 1){?> class="col-sm-6" <?php } else { ?> class="col-sm-6 load_hide" <?php } ?> id="esi_ip_number_div">
          <div class="form-group">
            <label for="esi_ip_number"><?php echo display('esi_ip_number')?> </label>
            <input type="text" class="form-control" 
              name="esi_ip_number" id="esi_ip_number" placeholder="<?php echo display('esi_ip_number')?> " value="<?php echo $data->esi_ip_number ; ?>">  
          </div>
		</div>
		
		</div>
		<div class="row">
		
		<div class="col-sm-6">
          <div class="form-group">
            <label for="esi_status"><?php  echo display('permanent_status')?> </label><br>
              <input type="radio"
              name="permanent_status" id="permanent_status" placeholder="Permanent Status" value="1" <?php if($data->permanent_status == 1){?> checked="checked" <?php } ?> >&nbsp;<?php echo display('yes')?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			  <input type="radio"
              name="permanent_status" id="permanent_status" placeholder="Permanent Status" value="0" <?php if($data->permanent_status == 0 || $data->permanent_status == '' ){?> checked="checked" <?php } ?>>&nbsp;<?php echo display('no')?>
          </div>
		</div>
		
		</div>
		
                                  </div>
                                   <div class="form-group text-right">
        <input type="button" class="btn btn-primary btnPrevious"  value="Previous">
             <input type="button" class="btn btn-primary btnNext" onclick="valid_inf2()" value="NEXT">
            
                        </div>
                                   </div>
                                    </div>
      </div>
    </div>
   <!-- <div id="menu2" class="tab-pane fade">
      <div class="row">
        <div class="col-sm-12 col-md-11">
            <div class="panel">
                
                <div class="panel-body">
                     
                    <div class="row">
                      <?php foreach($benifit as $benifits){?>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="dfs"><?php echo display('benifit_class_code')?></label>
                                        <input type="text" class="form-control" id="bnfid"
                                        name="benifit_c_code[]" value="<?php echo $benifits->bnf_cl_code; ?>"  placeholder="Benifit Class Code">
                                    </div>
                                </div>
                                 
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="l_name"><?php echo display('benifit_desc')?></label>
                                        <input type="text" class="form-control" id="benifit_c_code_d"
                                        name="benifit_c_code_d[]" placeholder="Benifit Class Code Description" value="<?php echo $benifits->bnf_cl_code_des; ?>">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="l_name"><?php echo display('benifit_acc_date')?> </label>
                                        <input type="text" class="form-control datepicker" id="benifit_acc_date"
                                        name="benifit_acc_date[]" placeholder="Benefit Accrual Date" value="<?php echo $benifits->bnff_acural_date; ?>">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="status"><?php echo display('benifit_sta')?> <sup class="color-red "></sup></label>
                                        <select name="benifit_sst[]"  class="form-control" style="width: 480px">
                                        <option value="1" <?php if($benifits->bnf_status ==1){
                                            echo 'selected';
                                        }?>>Active</option>
                                        <option value="2" <?php if($benifits->bnf_status ==2){
                                            echo 'selected';
                                        }?>>Inactive</option>
                                    </select>
                                    </div>
                                </div>
                               <?php } ?>
                              
                            </div>
                            <?php if(empty($benifit)){?>

      <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="dfs"><?php echo display('benifit_class_code')?></label>
                                        <input type="text" class="form-control" id="bnfid"
                                        name="benifit_c_code[]"  placeholder="Benifit Class Code">
                                    </div>
                                </div>
                                 
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="l_name"><?php echo display('benifit_desc')?></label>
                                        <input type="text" class="form-control" id="benifit_c_code_d"
                                        name="benifit_c_code_d[]" placeholder="<?php echo display('benifit_desc')?>">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="l_name"><?php echo display('benifit_acc_date')?> </label>
                                        <input type="text" class="form-control datepicker" 
                                        name="benifit_acc_date[]" placeholder="Benefit Accrual Date">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="status"><?php echo display('benifit_sta')?> <sup class="color-red "></sup></label>
                                        <select name="benifit_sst[]"  class="form-control" style="width: 480px">
                                        <option value="1">Active</option>
                                        <option value="2">Inactive</option>
                                    </select>
                                    </div>
                                </div>
                            </div>


                            <?php } ?>
                          

                          <div id="addbenifit" class="toggle">
                                <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="dfs"><?php echo display('benifit_class_code')?></label>
                                        <input type="text" class="form-control" id="bnfid"
                                        name="benifit_c_code[]"  placeholder="Benifit Class Code">
                                    </div>
                                </div>
                                 
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="l_name"><?php echo display('benifit_desc')?></label>
                                        <input type="text" class="form-control" id="benifit_c_code_d"
                                        name="benifit_c_code_d[]" placeholder="<?php echo display('benifit_desc')?>">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="l_name"><?php echo display('benifit_acc_date')?> </label>
                                        <input type="text" class="form-control datepicker" 
                                        name="benifit_acc_date[]" placeholder="Benefit Accrual Date">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="status"><?php echo display('benifit_sta')?> <sup class="color-red "></sup></label>
                                        <select name="benifit_sst[]"  class="form-control" style="width: 480px">
                                        <option value="1">Active</option>
                                        <option value="2">Inactive</option>
                                    </select>
                                    </div>
                                </div>
                            </div>
                              
                               <div id="addbenifit" class="toggle">
                                <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="dfs"><?php echo display('benifit_class_code')?></label>
                                        <input type="text" class="form-control" id="bnfid"
                                        name="benifit_c_code[]"  placeholder="Benifit Class Code">
                                    </div>
                                </div>
                                 
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="l_name"><?php echo display('benifit_desc')?></label>
                                        <input type="text" class="form-control" id="benifit_c_code_d"
                                        name="benifit_c_code_d[]" placeholder="<?php echo display('benifit_desc')?>">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="l_name"><?php echo display('benifit_acc_date')?> </label>
                                        <input type="text" class="form-control datepicker" 
                                        name="benifit_acc_date[]" placeholder="Benefit Accrual Date">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="status"><?php echo display('benifit_sta')?> <sup class="color-red "></sup></label>
                                        <select name="benifit_sst[]"  class="form-control" style="width: 480px">
                                        <option value="1">Active</option>
                                        <option value="2">Inactive</option>
                                    </select>
                                    </div>
                                </div>
                               
                            
                            </div>
                                <div id="addbenifit" class="toggle">
                                <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="dfs"><?php echo display('benifit_class_code')?></label>
                                        <input type="text" class="form-control" id="bnfid"
                                        name="benifit_c_code[]"  placeholder="Benifit Class Code">
                                    </div>
                                </div>
                                 
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="l_name"><?php echo display('benifit_desc')?></label>
                                        <input type="text" class="form-control" id="benifit_c_code_d"
                                        name="benifit_c_code_d[]" placeholder="<?php echo display('benifit_desc')?>">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="l_name"><?php echo display('benifit_acc_date')?> </label>
                                        <input type="text" class="form-control datepicker" 
                                        name="benifit_acc_date[]" placeholder="Benefit Accrual Date">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="status"><?php echo display('benifit_sta')?> <sup class="color-red "></sup></label>
                                        <select name="benifit_sst[]"  class="form-control" style="width: 480px">
                                        <option value="1">Active</option>
                                        <option value="2">Inactive</option>
                                    </select>
                                    </div>
                                </div>
                               
                            
                            </div>
                              
                             </div>
                             </div>
                             </div>

                        <div class="form-group text-right">
                           
                          <input type="button" class="btn btn-primary btnPrevious"  value="Previous">
             <input type="button" class="btn btn-primary btnNext" onclick="valid_inf3()" value="NEXT">
                        </div>
                   

                </div>  
            </div>
        </div>
    </div>
    </div>-->
            <div id="classmenu" class="tab-pane fade">
      <div class="row">
        <div class="col-sm-12 col-md-11">
            <div class="panel">
                
                <div class="panel-body">

                    <div class="row">
                               <!--  <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="dfs"><?php echo display('class_code')?></label>
                                        <input type="text" class="form-control" id="c_code"
                                        name="c_code"  placeholder="<?php echo display('class_code')?>" value="<?php echo $data->class_code; ?>">
                                    </div>
                                </div>
                                 
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="l_name"><?php echo display('class_descript')?></label>
                                        <input type="text" class="form-control" id="c_code_d"
                                        name="c_code_d" placeholder="<?php echo display('class_descript')?>" value="<?php echo $data->class_code_desc; ?>">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="l_name"><?php echo display('class_acc_date')?> </label>
                                        <input type="text" class="form-control datepicker" id="class_acc_date"
                                        name="class_acc_date" placeholder="<?php echo display('class_acc_date')?>" value="<?php echo $data->class_acc_date; ?>">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="status"><?php echo display('class_sta')?> <sup class="color-red "></sup></label>
                                        <select name="class_sst"  class="form-control" style="width: 480px">
                                        <option value="1" <?php if($data->class_status==1){
                                          echo 'selected';
                                        }?>>Active</option>
                                        <option value="2" <?php if($data->class_status==2){
                                          echo 'selected';
                                        }?>>Inactive</option>
                                    </select>
                                    </div>
                                </div> -->
                               

                            </div>

                        <div class="form-group text-right">
                           
                          <input type="button" class="btn btn-primary btnPrevious"  value="Previous">
             <input type="button" class="btn btn-primary btnNext" onclick="valid_class()" value="NEXT">
                        </div>
                   

                </div>  
            </div>
        </div>
    </div>
    </div>
    <div id="menu3" class="tab-pane fade">
      <div class="row">
        <div class="col-sm-12 col-md-11">
            <div class="panel">
                
                <div class="panel-body">

                    <div class="row">
                                <!-- <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="s_name"><?php echo display('super_visor_name')?></label>
                                       <select name="supervisorname"  class="form-control" style="width: 480px">
                                        <option value="">Select One</option>
                                        <option value="self" <?php if($data->super_visor_id=='self'){echo 'selected';}?>>Self</option>
                                        <?php foreach ($supervisor as $suplist) {?>
                                        <option value="<?php echo $suplist->employee_id?>" <?php if($data->super_visor_id==$suplist->employee_id){
                                            echo 'selected';
                                        }?>><?php echo $suplist->first_name.' '.$suplist->last_name?></option>
                                        <?php } ?>
                                    </select>
                                    </div>
                                </div>
                                 
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="l_name"><?php echo display('is_super_visor')?></label>
                                       <select name="is_supervisor"  class="form-control" style="width: 480px">
                                        <option value="1" <?php if($data->is_super_visor==1){
                                            echo 'selected';
                                        }?>>Yes</option>
                                        <option value="0" <?php if($data->is_super_visor==0){
                                            echo 'selected';
                                        }?>>No</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="reports"><?php echo display('supervisor_report')?> </label>
                                        <input type="text" class="form-control" id="benifit_acc_date"
                                        name="reports" placeholder="Reports" value="<?php echo $data->supervisor_report;?>">
                                    </div>
                                </div> -->

                            </div>

                        <div class="form-group text-right">
                           
                           <input type="button" class="btn btn-primary btnPrevious"  value="Previous">
             <input type="button" class="btn btn-primary btnNext" onclick="valid_inf4()" value="NEXT">
                        </div>
                   

                </div>  
            </div>
        </div>
    </div>
    </div>
    <div id="menu4" class="tab-pane fade">
        <div class="row">
        <div class="col-sm-12 col-md-11">
            <div class="panel">
                
                <div class="panel-body">

                    <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="s_name"><?php echo display('dob')?><sup class="color-red ">*</sup></label>
                                        <input type="text" class="form-control datepicker" id="dob"
                                        name="dob" placeholder="Date Of Birth" value="<?php echo $data->dob;?>">
                                    </div>
                                </div>
                                 
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="gender"><?php echo display('gender')?><sup class="color-red ">*</sup></label>
                                       <select name="gender" id="gender" class="form-control" style="width: 480px">
                                        <option value="1" <?php if($data->gender==1){
                                            echo 'selected';
                                        }?>>Male</option>
                                        <option value="2" <?php if($data->gender==2){
                                            echo 'selected';
                                        }?>>Female</option>
                                        <option value="2" <?php if($data->gender==3){
                                            echo 'selected';
                                        }?>>Other</option>
                                    </select>
                                              <span id="gend"></span>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="reports"><?php echo display('marital_stats')?> </label>
                                       <select name="marital_status"  class="form-control" style="width: 480px">
                                        <option value="1" <?php if($data->marital_status==1){
                                            echo 'selected';
                                        }?>>Single</option>
                                        <option value="2" <?php if($data->marital_status==2){
                                            echo 'selected';
                                        }?>>Married</option>
                                        <option value="3" <?php if($data->marital_status==3){
                                            echo 'selected';
                                        }?>>Divorced</option>
                                        <option value="4" <?php if($data->marital_status==4){
                                            echo 'selected';
                                        }?>>Widowed</option>
                                        <option value="5" <?php if($data->marital_status==5){
                                            echo 'selected';
                                        }?>>Other</option>
                                    </select>
                                    </div>
                                </div>
                                
                             <!--  <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="s_name"><?php echo display('ethnic_group')?></label>
                                        <input type="text" class="form-control" id="ethnic"
                                        name="ethnic" placeholder="Ethnic" value="<?php echo $data->ethnic_group;?>">
                                    </div>
                                </div>
                                 <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="eeo_class"><?php echo display('eeo_class_gp')?></label>
                                        <input type="text" class="form-control" id="eeo_class"
                                        name="eeo_class" placeholder="EEO Class Group" value="<?php echo $data->eeo_class_gp;?>">
                                    </div>
                                </div>-->
                                <div class="col-sm-6">
            <div class="form-group">
              <label for="adhar_card_no"> <?php  echo display('adhar_card_number')?> <sup class="color-red ">*</sup></label>
                <input type="text" class="form-control" id="adhar_card_no"
                name="adhar_card_no" placeholder="<?php echo display('adhar_card_number')?>" value="<?php echo $data->adhar_card_no ; ?>">
            </div>
          </div>

                                <!--  <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="w_s"><?php echo display('work_in_state')?></label>
                                       <select name="w_s"  class="form-control" style="width: 480px">
                                        <option value="1" <?php if($data->work_in_state==1){
                                            echo 'selected';
                                        }?>>Yes</option>
                                        <option value="2" <?php if($data->work_in_state==2){
                                            echo 'selected';
                                        }?>>No</option>
                                    </select>
                                    </div>
                                </div>
                                 <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="l_in_s"><?php echo display('live_in_state')?></label>
                                       <select name="l_in_s"  class="form-control" style="width: 480px">
                                        <option value="1" <?php if($data->live_in_state==1){
                                            echo 'selected';
                                        }?>>Yes</option>
                                        <option value="2" <?php if($data->live_in_state==2){
                                            echo 'selected';
                                        }?>>No</option>
                                    </select>
                                    </div>
                                </div>-->

                                 <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="citizenship"><?php echo display('citizenship')?></label>
                                         <select name="citizenship"  class="form-control" style="width: 480px">
                                          <option value="">Select</option>
                                        <option value="1" <?php if($data->citizenship==1){
                                          echo 'selected';
                                        }?>> Citizen</option>
                                        <option value="0" <?php if($data->citizenship==0){
                                          echo 'selected';
                                        }?>> Non-citizen</option>
                                    </select>
                                    </div>
                                </div>
 
                                  <div class="col-sm-6">
                                <label for="picture"><?php echo display('picture')?></label>
                               <input type="file" accept="image/*" name="picture" onchange="loadFile(event)">
                                <small id="fileHelp" class="text-muted"><img src="<?php echo base_url().$data->picture ?>" id="output" style="height: 150px;width: 200px" class="img-thumbnail"/>
</small>
<input type="hidden" name="old_image" value="<?php echo $data->picture;?>">
                            </div>

                            </div>

                        <div class="form-group text-right">
                           
                           <input type="button" class="btn btn-primary btnPrevious"  value="Previous">
             <input type="button" class="btn btn-primary btnNext" onclick="valid_inf5()" value="NEXT">
                        </div>
                   

                </div>  
            </div>
        </div>
    </div>
    </div>
      <div id="menu5" class="tab-pane fade">
      <div class="row">
        <div class="col-sm-12 col-md-11">
            <div class="panel">
                
                <div class="panel-body">

                    <div class="row">			<input type="hidden" name="emp_exp_id" value="<?php echo $experience_arr->emp_exp_id ; ?>" >			<div class="col-sm-6">              			<div class="form-group">                			<label for="company_name"><?php echo display('company_name')?> <sup class="color-red ">*</sup></label>			<input type="text" class="form-control" id="company_name" name="company_name" placeholder="Company Name" value="<?php echo $experience_arr->company_name ; ?>">			</div>			</div>			<div class="col-sm-6">			<div class="form-group">			<label for="duration"><?php echo display('duration')?> <sup class="color-red ">*</sup></label>			<input type="text" class="form-control" id="duration" name="duration" placeholder="<?php echo display('duration')?>" value="<?php echo $experience_arr->duration ; ?>">			</div>			</div>			<div class="col-sm-6">			<div class="form-group">			<label for="designation"><?php echo display('designation')?> <sup class="color-red ">*</sup></label>			<input type="text" class="form-control" id="designation" name="designation" placeholder="<?php echo display('designation')?>" value="<?php echo $experience_arr->designation ; ?>">			</div>			</div>			<div class="col-sm-6">			<div class="form-group">			<label for="salary"><?php echo display('s_rate') ?> </label> 			<input type="text" class="form-control" id="salary" name="salary" placeholder="<?php echo display('s_rate')?>" value="<?php echo $experience_arr->salary ; ?>">			</div>			</div>			<div class="col-sm-6">			<div class="form-group">			<label for="esi_pf_welfare_scheme_card_no"><?php echo display('esi_pf_welfare_scheme_card_no')?>		</label>			<input type="text" class="form-control" id="esi_pf_welfare_scheme_card_no" name="esi_pf_welfare_scheme_card_no" placeholder="<?php echo display('esi_pf_welfare_scheme_card_no')?>" value="<?php echo $experience_arr->esi_pf_welfare_scheme_card_no ; ?>" >			</div>			</div>			<div class="col-sm-6">			<div class="form-group">			<label for="pan_card_no"><?php echo display('pan_card_no')?> </label>			<input type="text" class="form-control" id="pan_card_no" name="pan_card_no" placeholder="<?php echo display('pan_card_no')?>" value="<?php echo $experience_arr->pan_card_no ; ?>">			</div>			</div>			<div class="col-sm-6">			<div class="form-group"> 			<label for="reason_of_leaving"><?php echo display('reason_of_leaving')?></label>			<input type="text" class="form-control" id="reason_of_leaving" name="reason_of_leaving" placeholder="<?php echo display('reason_of_leaving')?>" value="<?php echo $experience_arr->reason_of_leaving ; ?>">			</div>			</div>			<div class="col-sm-6">			<div class="form-group">			<label for="other_work_experience"><?php echo display('other_work_experience')?></label>			<input type="text" class="form-control" id="other_work_experience" name="other_work_experience" placeholder="<?php echo display('other_work_experience')?>" value="<?php echo $experience_arr->other_work_experience ; ?>">			</div>			</div>			<div class="col-sm-6">			<div class="form-group">			<label for="training_attended"><?php echo display('training_attended')?></label>			<input type="text" class="form-control" id="training_attended" name="training_attended" placeholder		=	"<?php echo display('training_attended')?>"			value="<?php echo $experience_arr->training_attended ; ?>"			>			</div>			</div>		</div>

                        <div class="form-group text-right">
                           
                           <input type="button" class="btn btn-primary btnPrevious"  value="Previous">
             <input type="button" class="btn btn-primary btnNext" onclick="valid_inf6()" value="NEXT">
                        </div>
                   

                </div>  
            </div>
        </div>
    </div>
    </div>
       <div id="menu6" class="tab-pane fade">
      <div class="row">
        <div class="col-sm-12 col-md-11">
            <div class="panel">
                
                <div class="panel-body">

                    <div class="row">				<table  style="width:100%" cellspacing="30">		<tr>		<th></th>		<th><strong><?php echo display('course') ?><strong></th>		<th><strong><?php echo display('institution') ?></strong></th>		<th><strong><?php echo display('year_of_passing') ?></strong></th>		</tr>				<tr>		<td><strong>10th</strong></td>		<td>		<input type="hidden" name="emp_edu_id" value="<?php echo $education_arr->emp_edu_id ; ?>" >			<input type="text" class="form-control" id="tenth_course" name="tenth_course" placeholder="<?php echo display('course')?>" value="<?php echo $education_arr->tenth_course ; ?>">		</td>		<td>			<input type="text" class="form-control" id="tenth_institution" name="tenth_institution" placeholder="<?php echo display('institution')?>" value="<?php echo $education_arr->tenth_institution ; ?>">		</td>		<td>			<input type="text" class="form-control" id="tenth_year_of_passing" name="tenth_year_of_passing" placeholder="<?php echo display('year_of_passing')?>" value="<?php echo $education_arr->tenth_year_of_passing ; ?>">		</td>		</tr>				<tr>		<td><strong>Plus two/Predegree/dipl</strong></td>		<td>			<input type="text" class="form-control" id="plus_two_course" name="plus_two_course" placeholder="<?php echo display('course')?>" value="<?php echo $education_arr->plus_two_predeeree_dipl_course ; ?>">		</td>		<td>			<input type="text" class="form-control" id="plus_two_institution" name="plus_two_institution" placeholder="<?php echo display('institution')?>"  value="<?php echo $education_arr->plus_two_predeeree_dipl_institution ; ?>" >		</td>		<td>			<input type="text" class="form-control" id="plus_two_year_of_passing" name="plus_two_year_of_passing" placeholder="<?php echo display('year_of_passing')?>" value="<?php echo $education_arr->plus_two_predeeree_dipl_year_of_passing ; ?>">		</td>		</tr>				<tr>		<td><strong>Graduation</strong></td>		<td>			<input type="text" class="form-control" id="graduation_course" name="graduation_course" placeholder="<?php echo display('course')?>" value="<?php echo $education_arr->graduation_course ; ?>">		</td>		<td>			<input type="text" class="form-control" id="graduation_institution" name="graduation_institution" placeholder="<?php echo display('institution')?>" value="<?php echo $education_arr->graduation_institution ; ?>">		</td>		<td>			<input type="text" class="form-control" id="graduation_year_of_passing" name="graduation_year_of_passing" placeholder="<?php echo display('year_of_passing')?>" value="<?php echo $education_arr->graduation_year_of_passing ; ?>">		</td>		</tr>				<tr>		<td><strong>Post Graduation</strong></td>		<td>			<input type="text" class="form-control" id="post_graduation_course" name="post_graduation_course" placeholder="<?php echo display('course')?>" value="<?php echo $education_arr->post_graduation_course ; ?>">		</td>		<td>			<input type="text" class="form-control" id="post_graduation_institution" name="post_graduation_institution" placeholder="<?php echo display('institution')?>"  value="<?php echo $education_arr->post_graduation_institution ; ?>">		</td>		<td>			<input type="text" class="form-control" id="post_graduation_year_of_passing" name="post_graduation_year_of_passing" placeholder="<?php echo display('year_of_passing')?>" value="<?php echo $education_arr->post_graduation_year_of_passing ; ?>" >		</td>		</tr>				<tr>		<td><strong>Additional Qualifications</strong></td>		<td>			<input type="text" class="form-control" id="aq_course" name="aq_course" placeholder="<?php echo display('course')?>" value="<?php echo $education_arr->aq_course ; ?>">		</td>		<td>			<input type="text" class="form-control" id="aq_institution" name="aq_institution" placeholder="<?php echo display('institution')?>" value="<?php echo $education_arr->aq_institution ; ?>">		</td>		<td>			<input type="text" class="form-control" id="aq_year_of_passing" name="aq_year_of_passing" placeholder="<?php echo display('year_of_passing')?>" value="<?php echo $education_arr->aq_year_of_passing ; ?>">		</td>		</tr>				<tr>		<td><strong>Computer Knowledge</strong></td>		<td>			<input type="text" class="form-control" id="ck_course" name="ck_course" placeholder="<?php echo display('course')?>" value="<?php echo $education_arr->computer_knowledge_course ; ?>">		</td>		<td>			<input type="text" class="form-control" id="ck_institution" name="ck_institution" placeholder="<?php echo display('institution')?>" value="<?php echo $education_arr->computer_knowledge_institution ; ?>">		</td>		<td>			<input type="text" class="form-control" id="ck_year_of_passing" name="ck_year_of_passing" placeholder="<?php echo display('year_of_passing')?>" value="<?php echo $education_arr->computer_knowledge_year_of_passing ; ?>">		</td>		</tr>		</table>			</div>

                        <div class="form-group text-right">
                            <input type="button" class="btn btn-primary btnPrevious"  value="Previous">
                            <input type="button" class="btn btn-primary" value="Next" onclick="valid_inf45()">
                        </div>
                   
                </div>  
            </div>
        </div>
    </div>
    </div>	<!-- MENU 7 -->   <div id="menu7" class="tab-pane fade"> 
	<div class="row">
	
	<!-- Bank  -->
	<div class="col-sm-12 col-md-11">
	<h4><strong>Bank Details</strong></h4>
		<div class="panel">                 
		<div class="panel-body">          
		<div class="row">
			<input type="hidden" name="emp_bank_id" value="<?php echo $data_new['bank']->emp_bank_id ?>" >
			<div class="col-sm-6">              
			<div class="form-group">                
			<label for="bank_name"> <?php echo display('bank_name'); ?></label>
			<input type="text" class="form-control" id="bank_name" name="bank_name" placeholder="<?php echo display('bank_name'); ?>" value="<?php echo $data_new['bank']->bank_name; ?>" >
			</div>
			</div>
			
			<div class="col-sm-6">              
			<div class="form-group">                
			<label for="ifsc"><?php echo display('ifsc'); ?></label>
			<input type="text" class="form-control" id="ifsc" name="ifsc" placeholder="<?php echo display('ifsc'); ?>" value="<?php echo $data_new['bank']->ifsc ?> ">
			</div>
			</div>
			
			<div class="col-sm-6">              
			<div class="form-group">                
			<label for="account_name"><?php echo display('account_name'); ?> </label>
			<input type="text" class="form-control" id="account_name" name="account_name" placeholder="<?php echo display('account_name'); ?> " value="<?php echo $data_new['bank']->account_name ?>" >
			</div>
			</div>
			
			
			<div class="col-sm-6">              
			<div class="form-group">                
			<label for="account_no"><?php echo display('account_number'); ?></label>
			<input type="text" class="form-control" id="account_no" name="account_no" placeholder="<?php echo display('account_number'); ?>" value="<?php echo $data_new['bank']->account_no ?>" >
			</div>
			</div>
			
			
		</div>
		</div>
		</div>
	</div>
	<!-- End bank -->
	
	 
	
	<div class="col-sm-12 col-md-11">
	<div class="panel">
	<div class="panel-body">
	<div class="row">				
	<table  style="width:100%" >		<tr>	
	<th><strong><?php echo display('name') ?><strong></th>	
	<th><strong><?php echo display('relation') ?><strong></th>	
	<th><strong><?php echo display('dob') ?></strong></th>	
	<th><strong><?php echo display('occupation') ?></strong></th>	
	</tr>				<tr>		<td>	
	<input type="hidden" name="emp_nom_id[]"  value="<?php echo $nominee_details_arr[0]->emp_nom_id ; ?>">		
	<input type="text" class="form-control" id="nominee_name" name="nominee_name[]" placeholder="<?php echo display('name')?>" value="<?php echo $nominee_details_arr[0]->name ; ?>">	
	</td>		<td>		
	<input type="text" class="form-control" id="nominee_relation1" name="nominee_relation[]" placeholder="<?php echo display('relation')?>" value="<?php echo $nominee_details_arr[0]->relation ; ?>">		</td>		<td>		
	<input type="text" class="form-control datepicker" id="nominee_dob1" name="nominee_dob[]" placeholder="<?php echo display('dob')?>" value="<?php echo $nominee_details_arr[0]->date_of_birth ; ?>">		</td>		<td>			<input type="text" class="form-control" id="nominee_occupation1" name="nominee_occupation[]" placeholder="<?php echo display('occupation')?>"  value="<?php echo $nominee_details_arr[0]->occupation ; ?>">		</td>		</tr>		
	<tr>		<input type="hidden" name="emp_nom_id[]"  value="<?php echo $nominee_details_arr[1]->emp_nom_id ; ?>">		<td>			<input type="text" class="form-control" id="nominee_name2" name="nominee_name[]" placeholder="<?php echo display('name')?>" value="<?php echo $nominee_details_arr[1]->name ; ?>"></td>		<td>			<input type="text" class="form-control" id="nominee_relation2" name="nominee_relation[]" placeholder="<?php echo display('relation')?>" value="<?php echo $nominee_details_arr[1]->relation ; ?>">		</td>
	<td>			<input type="text" class="form-control datepicker" id="nominee_dob2" name="nominee_dob[]" placeholder="<?php echo display('dob')?>" value="<?php echo $nominee_details_arr[1]->date_of_birth ; ?>">		</td>		<td>			<input type="text" class="form-control" id="nominee_occupation2" name="nominee_occupation[]" placeholder="<?php echo display('occupation')?>" 			value="<?php echo $nominee_details_arr[1]->occupation ; ?>"			>		</td>		</tr>				<tr>		<input type="hidden" name="emp_nom_id[]"  value="<?php echo $nominee_details_arr[2]->emp_nom_id ; ?>">		<td>			<input type="text" class="form-control" id="nominee_name3" name="nominee_name[]" placeholder="<?php echo display('name') ?>" value="<?php echo $nominee_details_arr[2]->name ; ?>">		</td>	
	<td>			<input type="text" class="form-control" id="nominee_relation3" name="nominee_relation[]" placeholder="<?php echo display('relation')?>" value="<?php echo $nominee_details_arr[2]->relation ; ?>">		</td>		<td>			<input type="text" class="form-control datepicker" id="nominee_dob3" name="nominee_dob[]" placeholder="<?php echo display('dob')?>" value="<?php echo $nominee_details_arr[2]->date_of_birth ; ?>">		</td>		<td>			<input type="text" class="form-control" id="nominee_occupation3" name="nominee_occupation[]" placeholder="<?php echo display('occupation')?>" value="<?php echo $nominee_details_arr[2]->occupation ; ?>">		</td>		</tr>				<tr>		<input type="hidden" name="emp_nom_id[]"  value="<?php echo $nominee_details_arr[3]->emp_nom_id ; ?>">		<td>	
	<input type="text" class="form-control" id="nominee_name4" name="nominee_name[]" placeholder="<?php echo display('name')?>" value="<?php echo $nominee_details_arr[3]->name ; ?>">	
	</td>		<td>	
	<input type="text" class="form-control" id="nominee_relation4" name="nominee_relation[]" placeholder="<?php echo display('relation') ?>" value="<?php echo $nominee_details_arr[3]->relation ; ?>">		</td>		<td>			<input type="text" class="form-control datepicker" id="nominee_dob4" name="nominee_dob[]" placeholder="<?php echo display('dob')?>" value="<?php echo $nominee_details_arr[3]->date_of_birth ; ?>">		</td>		<td>			<input type="text" class="form-control" id="nominee_occupation4" name="nominee_occupation[]" placeholder="<?php echo display('occupation')?>" value="<?php echo $nominee_details_arr[3]->occupation ; ?>">		</td>		</tr>		</table>			</div>                  
	<div class="form-group text-right">
                          <input type="button" class="btn btn-primary btnPrevious"  value="Previous">  
                          <input type="submit" class="btn btn-success" onclick="valid_inf7()" value="Update">
                        </div>
                   
<?php echo form_close() ?>                           
	</div>            
	</div>     
	</div>
	</div>    
	</div>
	<!-- MENU 7 END -->		
        <!--<div id="menu8" class="tab-pane fade">
     <!-- <div class="row">
        <div class="col-sm-12 col-md-11">
            <div class="panel">
                
                <!--<div class="panel-body">
                    <span>
                    <?php foreach($custominfo as $custom){ ?>
                          <!--<div class="row">
                  <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="c_f_name"><?php echo 'Custom Field Name';?></label>
                                        <input type="text" class="form-control" id="c_f_name"
                                        name="c_f_name[]" value="<?php echo $custom->custom_field; ?>" placeholder="Custom Field Name">
                                    </div>
                                </div>
                                 
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="c_f_type"><?php echo 'Custom Field Type';?></label>
                                       <select name="c_f_type[]"  class="form-control">
                                        <option value="1" <?php if($custom->custom_data_type==1){ 
                                            echo 'selected';
                                        } ?>>Text</option>
                                        <option value="2" <?php if($custom->custom_data_type==2){ 
                                            echo 'selected';
                                        } ?>>Date</option>
                                        <option value="3" <?php if($custom->custom_data_type==3){ 
                                            echo 'selected';
                                        } ?>>Text Area</option>
                                    </select>
                                    </div>
                                </div>
                            
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="reports"><?php echo 'Custom Value'?> </label>
                                            <input type="text" name="customvalue[]" class="form-control" placeholder="custom value" value="<?php echo $custom->custom_data; ?>">

                                    </div>
                                </div>
                   
                            </div>-->

                    <?php } ?>
                     <?php if(empty($custominfo)){ ?>
                           <!-- <div class="row">
                  <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="c_f_name"><?php echo 'Custom Field Name';?></label>
                                        <input type="text" class="form-control" id="c_f_name"
                                        name="c_f_name[]" value="<?php echo $custom->custom_field; ?>" placeholder="Custom Field Name">
                                    </div>
                                </div>
                                 
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="c_f_type"><?php echo 'Custom Field Type';?></label>
                                       <select name="c_f_type[]"  class="form-control">
                                        <option value="1" <?php if($custom->custom_data_type==1){ 
                                            echo 'selected';
                                        } ?>>Text</option>
                                        <option value="2" <?php if($custom->custom_data_type==2){ 
                                            echo 'selected';
                                        } ?>>Date</option>
                                        <option value="3" <?php if($custom->custom_data_type==3){ 
                                            echo 'selected';
                                        } ?>>Text Area</option>
                                    </select>
                                    </div>
                                </div>
                            
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="reports"><?php echo 'Custom Value'?> </label>
                                            <input type="text" name="customvalue[]" class="form-control" placeholder="custom value" value="<?php echo $custom->custom_data; ?>">

                                    </div>
                                </div>
                   
                            </div>-->
                      <?php } ?>
                      </span>
                     
                         <!--<div id="add" class="toggle">
                            <span>
                      <div class="row">
                  <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="c_f_name"><?php echo 'Custom Field Name';?></label>
                                        <input type="text" class="form-control" id="c_f_name"
                                        name="c_f_name[]" placeholder="Custom Field Name">
                                    </div>
                                </div>
                                 
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="c_f_type"><?php echo 'Custom Field Type';?></label>
                                       <select name="c_f_type[]"  class="form-control">
                                        <option value="1">Text</option>
                                        <option value="2">Date</option>
                                        <option value="3">Text Area</option>
                                    </select>
                                    </div>
                                </div>
                            
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="reports"><?php echo 'Custom Value'?> </label>
                                            <input type="text" name="customvalue[]" class="form-control" placeholder="custom value">

                                    </div>
                                </div>
                   
                            </div>
                        </span>
                              <div id="add" class="toggle">
                                <span>
                      <div class="row">
                  <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="c_f_name"><?php echo 'Custom Field Name';?></label>
                                        <input type="text" class="form-control" id="c_f_name"
                                        name="c_f_name[]" placeholder="Custom Field Name">
                                    </div>
                                </div>
                                 
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="c_f_type"><?php echo 'Custom Field Type';?></label>
                                       <select name="c_f_type[]"  class="form-control">
                                        <option value="1">Text</option>
                                        <option value="2">Date</option>
                                        <option value="3">Text Area</option>
                                    </select>
                                    </div>
                                </div>
                            
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="reports"><?php echo 'Custom Value'?> </label>
                                            <input type="text" name="customvalue[]" class="form-control" placeholder="custom value">

                                    </div>
                                </div>
                   
                            </div>
                        </span>
                  </div>
                  </div>-->

                       <!-- <div class="form-group text-right">
                          <input type="button" class="btn btn-primary btnPrevious"  value="Previous">  
                          <input type="submit" class="btn btn-success" onclick="valid_inf8()" value="Update">
                        </div>
                   
<?php echo form_close() ?>
                </div>  
            </div>
        </div>-->
    </div>
    </div>
  
  </div>
</div>
</div>
<script>
  var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
  };
</script>
<script>

  $('.btnPrevious').click(function(){
    $('.nav-tabs > .active').prev('li').find('a').trigger('click');
  });

  $("#first_name").on('keyup', function() {
    var inpfirstname = document.getElementById('first_name');
    if (inpfirstname.value.length === 0) return;
    document.getElementById("first_name").style.borderColor = "green";
  });
  $("#phone").on('keyup', function() {
    var inputphone = document.getElementById('phone');
    if (inputphone.value.length === 0) return;
   document.getElementById("phone").style.borderColor = "green";
  });
  $("#email").on('keyup', function() {
    var inpemail = document.getElementById('email');
    if (inpemail.value.length === 0) return;
    document.getElementById("email").style.borderColor = "green";
  });
//hire date
$("#hiredate").on('change', function() {
  var inputhiredate = document.getElementById('hiredate');
  if (inputhiredate.value.length === 0) return;
 document.getElementById("hiredate").style.borderColor = "green";
});
$("#ohiredate").on('change', function() {
  var inputhiredate = document.getElementById('ohiredate');
  if (inputhiredate.value.length === 0) return;
 document.getElementById("ohiredate").style.borderColor = "green";
});
$("#designation").on('change', function() {
  var inputdesignaiton = document.getElementById('designation');
  if (inputdesignaiton.value.length === 0) return;
 document.getElementById("desig").innerHTML = "";
});
$("#division").on('change', function() {
  var inputdivision = document.getElementById('division');
  if (inputdivision.value.length === 0) return;
 document.getElementById("divis").innerHTML = "";
});
$("#rate_type").on('change', function() {
  var inputrate_type = document.getElementById('rate_type');
  if (inputrate_type.value.length === 0) return;
 document.getElementById("rat_tp").innerHTML = "";
});

$("#rate").on('keyup', function() {
  var inputrate = document.getElementById('rate');
  if (inputrate.value.length === 0) return;
 document.getElementById("rate").style.borderColor = "green";
});
$("#pay_frequency").on('change', function() {

  var inputpay_frequency = document.getElementById('pay_frequency');
  if (inputpay_frequency.value.length === 0) return;
document.getElementById("frequ").innerHTML = "";
});
$("#dob").on('change', function() {
  var inputdob = document.getElementById('dob');
  if (inputdob.value.length === 0) return;
 document.getElementById("dob").style.borderColor = "green";
});
$("#gender").on('change', function() {
  var inputgender = document.getElementById('gender');
  if (inputgender.value.length === 0) return;
document.getElementById("gend").innerHTML = "";
});
$("#ssn").on('keyup', function() {
  var inputssn = document.getElementById('ssn');
  if (inputssn.value.length === 0) return;
  document.getElementById("ssn").style.borderColor = "green";
});
$("#h_phone").on('keyup', function() {
  var inputh_phone = document.getElementById('h_phone');
  if (inputh_phone.value.length === 0) return;
document.getElementById("h_phone").style.borderColor = "green";
});
$("#c_phone").on('keyup', function() {
  var inputc_phone = document.getElementById('c_phone');
  if (inputc_phone.value.length === 0) return;
 document.getElementById("c_phone").style.borderColor = "green";
});
$("#e_h_phone").on('keyup', function() {
  var inpute_h_phone = document.getElementById('e_h_phone');
  if (inpute_h_phone.value.length === 0) return;
document.getElementById("e_h_phone").style.borderColor = "green";
});
$("#e_w_phone").on('keyup', function() {
  var inpute_w_phone = document.getElementById('e_w_phone');
  if (inpute_w_phone.value.length === 0) return;
  document.getElementById("e_w_phone").style.borderColor = "green";
});
$("#em_contact").on('keyup', function() {
  var inputem_contact = document.getElementById('em_contact');
  if (inputem_contact.value.length === 0) return;
  document.getElementById("em_contact").style.borderColor = "green";
});
function valid_inf() {
  var usernameInput = document.getElementById('first_name');
  var phoneInput = document.getElementById('phone');
  var emailInput = document.getElementById('email');
  var firstname = $('#first_name').val();
  var phone = $('#phone').val();
  var email = $('#email').val();
  if (firstname == "") {
    document.getElementById("first_name").style.borderColor = "red";

  }else{
    $("#first_name").on('keyup', function(){
     document.getElementById("first_name").style.borderColor = "green";
   });

  }
  if (phone == "") {
    document.getElementById("phone").style.borderColor = "red";

  }else{
    $("#phone").on('keyup', function(){
      document.getElementById("phone").style.borderColor = "green";
   });

  }
  if (email == "") {
     document.getElementById("email").style.borderColor = "red";
    return false;
  }else{
    $("#email").on('keyup', function(){
       document.getElementById("email").style.borderColor = "green";
   });
  }
  if(email !== "" && phone !== "" && firstname !== ""){
   $('.nav-tabs > .active').next('li').find('a').trigger('click');
 }
} 

// second tab validation
function valid_inf2() {
  var hiredateInput = document.getElementById('hiredate');
  var ohiredateInput = document.getElementById('ohiredate');
  var divisionInput = document.getElementById('division');
  var designationInput = document.getElementById('designation');
  var rate_typeInput = document.getElementById('rate_type');
  var rateInput = document.getElementById('rate');
  var pay_frequencyInput = document.getElementById('pay_frequency');
  var hiredate = $('#hiredate').val();
  var ohiredate = $('#ohiredate').val();
  var designation = $('#designation').val();
  var division = $('#division').val();
  var rate_type = $('#rate_type').val();
  var rate = $('#rate').val();
  var pay_frequency = $('#pay_frequency').val();
  if (division == ""){
    document.getElementById("divis").style.color = "red";
    document.getElementById("divis").innerHTML ='Division Field is Required';
  }else{
    $("#division").on('keyup', function(){
       document.getElementById("divis").style.color = "green";
   });

  }
  if (designation == "") {
       document.getElementById("desig").style.color = "red";
       document.getElementById("desig").innerHTML ='Designation Field is Required';

  }else{
    $("#designation").on('keyup', function(){
        document.getElementById("designation").style.color = "green";
        document.getElementById("desig").innerHTML ='';
   });

  }

  if (hiredate == "") {
     document.getElementById("hiredate").style.borderColor = "red";
  }else{
    $("#hiredate").on('keyup', function(){
     document.getElementById("hiredate").style.borderColor = "green";
   });
    

  }
  if (ohiredate == "") {
     document.getElementById("ohiredate").style.borderColor = "red";

  }else{
    $("#ohiredate").on('keyup', function(){
   document.getElementById("ohiredate").style.borderColor = "green";
   });
    

  }
  if (rate_type == "") {
     document.getElementById("rat_tp").style.color = "red";
     document.getElementById("rat_tp").innerHTML ='Rate Type Field is Required';
  }else{
    $("#rate_type").on('keyup', function(){
     document.getElementById("rat_tp").innerHTML = "";
   });
    

  }
  if (rate == "") {
   document.getElementById("rate").style.borderColor = "red";

  }else{
    $("#rate").on('keyup', function(){
    document.getElementById("rate").style.borderColor = "green";
   });
    

  }
  if (pay_frequency == "") {
       document.getElementById("frequ").style.color = "red";
       document.getElementById("frequ").innerHTML ='Frequency Field is Required';
  }else{
    $("#pay_frequency").on('keyup', function(){
      document.getElementById("frequ").innerHTML ='';
   });
    

  }
  if(division !== "" && designation !== "" && hiredate !== "" && ohiredate !== "" && rate_type !== "" && rate !== "" && pay_frequency !== ""){
   $('.nav-tabs > .active').next('li').find('a').trigger('click');
 }
}

// third tab validation
function valid_inf3() {
  
 $('.nav-tabs > .active').next('li').find('a').trigger('click');

}
function valid_class() {
  
 $('.nav-tabs > .active').next('li').find('a').trigger('click');

}
// third tab validation
function valid_inf4() {
  
 
 $('.nav-tabs > .active').next('li').find('a').trigger('click');

}
function valid_inf5() {
  var dobInput = document.getElementById('dob');
  var genderInput = document.getElementById('gender');
  var ssnInput = document.getElementById('ssn');
  var dob = $('#dob').val();
  var gender = $('#gender').val();
  var ssn = $('#ssn').val();
  if (dob == "") {
    document.getElementById("dob").style.borderColor = "red";
  }else{
    $("#dob").on('keyup', function(){
     document.getElementById("dob").style.borderColor = "green";
   });
    

  }
  if (gender == "") {
  document.getElementById("gend").style.color = "red";
  document.getElementById("gend").innerHTML ='Gender Field is Required';

  }else{
    $("#gender").on('keyup', function(){
   document.getElementById("gend").innerHTML ='';
   });
    

  }
  if (ssn == "") {
    document.getElementById("ssn").style.borderColor = "red";

  }else{
    $("#ssn").on('keyup', function(){
     document.getElementById("ssn").style.borderColor = "green";
   });
    

  }
  if(dob !== "" && gender !== "" && ssn !== ""){
   $('.nav-tabs > .active').next('li').find('a').trigger('click');
 }

}
function valid_inf6() {
  
  var h_phoneInput = document.getElementById('h_phone');
  var c_phoneInput = document.getElementById('c_phone');
  var h_phone = $('#h_phone').val();
  var c_phone = $('#c_phone').val();
  if (h_phone == "") {
    document.getElementById("h_phone").style.borderColor = "red";
  }else{
    $("#h_phone").on('keyup', function(){
     document.getElementById("h_phone").style.borderColor = "green";
   });

  }
  if (c_phone == "") {
  document.getElementById("c_phone").style.borderColor = "red";
  }else{
    $("#c_phone").on('keyup', function(){
     document.getElementById("c_phone").style.borderColor = "green";
   });

  }
  if(h_phone !== "" && c_phone !== ""){
   $('.nav-tabs > .active').next('li').find('a').trigger('click');
 }

}

function valid_inf45() {
  
  
   $('.nav-tabs > .active').next('li').find('a').trigger('click');
 

}
function valid_inf7() {
 var em_contactInput = document.getElementById('em_contact');
 var em_contact = $('#em_contact').val();
 var e_h_phoneInput = document.getElementById('e_h_phone');
 var e_h_phone = $('#e_h_phone').val();
 var e_w_phoneInput = document.getElementById('e_w_phone');
 var e_w_phone = $('#e_w_phone').val();
 if (em_contact == "") {
  document.getElementById("em_contact").style.borderColor = "red";
}else{
  $("#em_contact").on('keyup', function(){
    document.getElementById("em_contact").style.borderColor = "green";
 });

}
if (e_h_phone == "") {
  document.getElementById("e_h_phone").style.borderColor = "red";
}else{
  $("#e_h_phone").on('keyup', function(){
    document.getElementById("e_h_phone").style.borderColor = "green";
 });

}
if (e_w_phone == "") {
   document.getElementById("e_w_phone").style.borderColor = "red";
}else{
  $("#e_w_phone").on('keyup', function(){
   document.getElementById("e_w_phone").style.borderColor = "green";
 });

}
if(em_contact !== "" && e_h_phone !== "" && e_w_phone !== ""){
  document.getElementById("emp_form").submit();
  
}

}



</script>
<script type="text/javascript">
function newcustomfield() {
    var objTo = document.getElementById('appendediv')
    var divtest = document.createElement("div");
    divtest.innerHTML = "<div class='row'><div class='col-sm-6'> <div class='form-group'><label for='c_f_name'><?php echo 'Custom Field Name';?></label><input type='text' class='form-control' id='c_f_name' name='c_f_name[]' placeholder='Custom Field Name'></div></div><div class='col-sm-6'><div class='form-group'><label for='c_f_type'><?php echo 'Custom Field Type';?></label><select name='c_f_type[]'  class='form-control'><option value='1'>Text</option><option value='2'>Date</option><option value='3'>Text Area</option></select></div></div><div class='col-sm-12'><div class='form-group'><label for='reports'><?php echo 'Custom Value'?> </label><input type='text' name='customvalue[]' class='form-control' placeholder='custom value'></div> </div></div>"
    objTo.appendChild(divtest)
}
</script>
<script type="text/javascript">


  $(document).ready(function() {
   
// choose text for the show/hide link - can contain HTML (e.g. an image)
var showText='<span class="btn btn-primary" >Add More</span>';
var hideText='<span class="btn btn-danger" >Close</span>';

// initialise the visibility check
var is_visible = false;

// append show/hide links to the element directly preceding the element with a class of "toggle"
$('.toggle').prev().append(' <a href="#" class="toggleLink">'+showText+'</a>');

// hide all of the elements with a class of 'toggle'
$('.toggle').hide();

// capture clicks on the toggle links
$('a.toggleLink').click(function() {
 
// switch visibility
is_visible = !is_visible;

// change the link depending on whether the element is shown or hidden
$(this).html( (!is_visible) ? showText : hideText);

// toggle the display - uncomment the next line for a basic "accordion" style
//$('.toggle').hide();$('a.toggleLink').html(showText);
$(this).parent().next('.toggle').toggle('slow');

// return false so any link destination is not followed
return false;

});
});

function pf_status_fun()
{
	var radioValue = $("input[name='pf_status']:checked").val();
	if(radioValue == 1)
	{
		$("#pf_uan_div").css("display","block");
		$("#pf_uan").focus();
	}
	else
	{
		$("#pf_uan_div").css("display","none");
	}
	
}

function esi_status_fun()
{
	 var radioValue = $("input[name='esi_status']:checked").val();
	 
	if(radioValue == 1)
	{
		$("#esi_ip_number_div").css("display","block");
		$("#esi_ip_number").focus();
	}
	else
	{
		$("#esi_ip_number_div").css("display","none");
	} 
	
}
</script>