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
ul li a{
  font-size: 12.5px;
}

td, th {	
	padding: 15px;
}
.load_hide{
	display:none;
}

.select_up{
        position: absolute;
    top: -23px;
    font-weight: normal;
    
}
</style>

<div class="row">
  <div class="container">
    <ul class="nav nav-tabs">
      <li class="active"><a data-toggle="tab" href="#home"><?php echo 'BASIC INFO';?></a></li>
      <li ><a data-toggle="tab" href="#menu1" ><?php echo 'FUNCTIONAL SKILLS';?></a></li>
      <li ><a data-toggle="tab" href="#menu2" ><?php echo 'INTERPERSONAL SKILLS';?></a></li>
	  <li><a data-toggle="tab" href="#menu4" ><?php echo 'LEADERSHIP SKILLS';?></a></li>
	  <li><a data-toggle="tab" href="#menu5" ><?php echo 'OVERALL PROGRESS';?></a></li>
	  <li><a data-toggle="tab" href="#menu6" ><?php echo 'COMMENTS';?></a></li>
	  <li><a data-toggle="tab" href="#menu7" ><?php echo 'DETAILS';?></a></li>
    </ul>

    <div class="tab-content">
      <div id="home" class="tab-pane fade in active">
        <div class="row">
          <div class="col-sm-12 col-md-11">
            <div class="panel">
              
              <div class="panel-body">

                <?= form_open_multipart('employee/Evaluation/update_eval/'. $eval->eval_id,'id="emp_form"') ?>
               <div class="row">
                <div class="col-sm-4">
                  <div class="form-group">
                    <label for="first_name"><?php echo display('Employee_Name') ?> <sup class="color-red ">*</sup></label>
                    <input type="text" class="form-control" id="employee_id" name="employee_id"  value="<?php echo $data->first_name;echo " ";echo $data->last_name; ?>" readonly> 
                      <?php //echo form_dropdown('employee_id',$employee,$eval->employee_id,'class="form-control" id="employee_id"  readonly') ?>
                  </div>
                  
                </div>
               
              <div class="col-sm-4">
                  <div class="form-group">
                    <label for="l_name"><?php echo 'Designation';?></label>
                    
                    <input type="text" class="form-control" id="designation"
                    name="designation" placeholder="Designation" value="<?php echo $pos->position_name; ?>" readonly> 
                  </div>
                </div> 

                <div class="col-sm-4">
                  <div class="form-group">
                    <label for="l_name"><?php echo 'Salary';?> </label>
                    <input type="text" class="form-control" id="salary"
                    name="salary" placeholder="Salary" value="<?php echo $data->rate; ?>" readonly>
                  </div>
                </div>
              </div>
              

              <div class="row">
              <!-- <div class="col-sm-4">
                <div class="form-group">
                <label for="l_name"><?php// echo 'Department';?> </label>
                    <input type="text" class="form-control" id="dept"
                    name="dept" placeholder="Department">
                </div>
              </div>-->
              <div class="col-sm-4">
                <div class="form-group">
                  <label for="l_name"><?php echo 'Joining Date';?> </label>
                    <input type="text" class="form-control" id="join_date"
                    name="join_date" placeholder="Joining Date"value="<?php echo $data->hire_date;?>" readonly >
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                 <label for="l_name"><?php echo 'Review Period';?> </label>
				 <div class="form-group row">
				<label class="col-sm-5 col-form-label" style="font-weight: 100;"><?php echo 'Start Date';?> </label> <div class="col-sm-7" style=" padding-bottom: 10px;"><input type="date" class="form-control" id="start_date" name="start_date" placeholder="Start Date" value="<?php echo $eval->start_date;?>"></div>
				<div style="display: inline-block"></div>
				  <label class="col-sm-5 col-form-label" style="font-weight: 100;"><?php echo 'End Date';?> </label><div class="col-sm-7"> <input type="date" class="form-control " id="end_date"
                    name="end_date" placeholder="End Date" value="<?php echo $eval->end_date;?>"></div>
                   </div>
                </div>
              </div>
              
               <div class="col-sm-4">
                <div class="form-group">
                <label for="l_name"><?php echo 'Department';?> </label>
                      <?php echo form_dropdown('department',$dept,$eval->dept_id,'class="form-control" id="department" onchange="pf_status_fun()"') ?>
                </div>
              </div>
            </div>
            
             <div class="row">
                <div class="col-sm-4 " id="scored" style="<?php if($eval->dept_id == '4') {?> display: block <?php } else {?> display: none <?php } ?>">
                    <div class="form-group">
                    <label for="scored"><?php  echo "Scored"; ?> </label>
                    <input type="text" class="form-control" 
                     name="scored" id="scored" placeholder="<?php  echo "Scored"; ?>" value="<?php echo $eval->scored;?>">  
                    </div>
		        </div>	
		        <div class="col-sm-4" id="target" style="<?php if($eval->dept_id == '4') {?> display: block <?php } else {?> display: none <?php } ?>" >
                    <div class="form-group">
                    <label for="target"><?php  echo "Target"; ?> </label>
                    <input type="text" class="form-control" 
                     name="target" id="target" placeholder="<?php  echo "Target"; ?> " value="<?php echo $eval->target;?>">  
                    </div>
		        </div>
		        <div class="col-sm-4" id="month1" style="display: none" >
                    <div class="form-group">
                    <label for="month1"><?php  echo "Month"; ?> </label><br>
                    <select name="month1" class="form-control" <?php if($eval->month1) {?> selected <?php } ?> >
                        <option value="">Select</option>
                        <option value="Jan">JANUARY</option>
                        <option value="Feb">FEBRUARY</option>
                         <option value="Mar">MARCH</option>
                          <option value="April">APRIL</option>
                           <option value="May">MAY</option>
                            <option value="June">JUNE</option>
                             <option value="July">JULY</option>
                              <option value="Aug">AUGUST</option>
                               <option value="Sept">SEPTEMBER</option>
                               <option value="Oct">OCTOBER</option>
                               <option value="Nov">NOVEMBER</option>
                               <option value="Dec">DECEMBER</option>
                               
                    </select>  
                    </div>
		        </div>
            </div>
            
            <div class="form-group text-right">
             <input type="button" class="btn btn-primary" onclick="valid_inf()"  value="NEXT">
             
           </div>
           

         </div>  
       </div>
     </div>
   </div>
 </div>
 <div id="menu1" class="tab-pane fade ">
   <div class="row">
    <div class="col-sm-12 col-md-11">
      <div class="panel">
        
        <div class="panel-body">
            <h4 style="padding-left:17px"><b>Quality of Work (Out of 15 Marks)</b></h4>
            <div class="clearfix" style="display: inline-block"></div>
          <div class="row" style=" margin-top: 10px; margin-bottom: 40px;">


            <div class="col-sm-6">
            <div class="form-group">
                <label for="type_name" class="col-sm-8 col-form-label" style="font-weight: 100;"><?php echo 'Accuracy,neatness and timeliness of work'; ?> *</label>

                        <div class="col-sm-4">
                            <label class="select_up">0 </label> <input type="radio"  name="qow_q1" class="qow"  value="0"  <?php if($eval->qow_q1== '0'){?> checked <?php }?> >&nbsp;
			                 <label class="select_up">1 </label><input type="radio" name="qow_q1"  class="qow" value="1" <?php if($eval->qow_q1== '1'){?> checked <?php }?> >&nbsp;
				             <label class="select_up">2 </label><input type="radio" name="qow_q1"  class="qow" value="2" <?php if($eval->qow_q1== '2'){?> checked <?php }?> >&nbsp;
				             <label class="select_up">3</label><input type="radio" name="qow_q1"  class="qow" value="3"  <?php if($eval->qow_q1== '3'){?> checked <?php }?> >&nbsp;
				            <label class="select_up">4 </label><input type="radio" name="qow_q1"  class="qow" value="4"  <?php if($eval->qow_q1== '4'){?> checked <?php }?> >&nbsp;
				             <label class="select_up">5 </label><input type="radio" name="qow_q1"  class="qow" value="5"  <?php if($eval->qow_q1== '5'){?> checked <?php }?> >&nbsp;
                   <?php //echo form_dropdown('qow_q1',$option,null,'class="form-control qow" id="qow_q1" style="width:80px"') ?>
                 </div>
              
            </div>
          </div>

        <div class="col-sm-6">
          <div class="form-group">
           <label for="type_name" class="col-sm-8 col-form-label" style="font-weight: 100;"><?php echo 'Adherence to duties and procedures in Job Description and Work Instructions'; ?> *</label>
           <div class="col-sm-4">
                           <label class="select_up">0 </label> <input type="radio"  name="qow_q2" class="qow"  value="0"<?php if($eval->qow_q2== '0'){?> checked <?php }?> >&nbsp;
			                 <label class="select_up">1 </label> <input type="radio" name="qow_q2"  class="qow" value="1"  <?php if($eval->qow_q2== '1'){?> checked <?php }?>>&nbsp;
				             <label class="select_up">2 </label><input type="radio" name="qow_q2"  class="qow" value="2"   <?php if($eval->qow_q2== '2'){?> checked <?php }?>>&nbsp;
				             <label class="select_up">3 </label><input type="radio" name="qow_q2"  class="qow" value="3"  <?php if($eval->qow_q2== '3'){?> checked <?php }?>>&nbsp;
				             <label class="select_up">4 </label> <input type="radio" name="qow_q2"  class="qow" value="4"  <?php if($eval->qow_q2== '4'){?> checked <?php }?>>&nbsp;
				             <label class="select_up">5 </label> <input type="radio" name="qow_q2"  class="qow" value="5"  <?php if($eval->qow_q2== '5'){?> checked <?php }?>>&nbsp;
           <?php //echo form_dropdown('qow_q2',$option,null,'class="form-control qow" id="qow_q2" style="width:80px" ') ?>
          </div>
        </div>
          
        </div>
        </div>
        <div class="row" style=" margin-top: 10px; margin-bottom: 10px;">


          <div class="col-sm-6">
          <div class="form-group">
            <!--<label for="work_hour"><?php // echo display('gross_salary')?> <sup class="color-red ">*</sup></label>
              <input type="number" class="form-control" 
              name="rate" id="rate" placeholder="Rate">-->
                <label for="type_name" class="col-sm-8 col-form-label" style="font-weight: 100;"><?php echo 'Achievement of target (monthly target and achievement details to be attached)'; ?> *</label>
                <div class="col-sm-4">
                             <label class="select_up">0 </label> <input type="radio"  name="qow_q3" class="qow"  value="0" <?php if($eval->qow_q3== '0'){?> checked <?php }?> >&nbsp;
			                 <label class="select_up">1 </label> <input type="radio" name="qow_q3"  class="qow" value="1" <?php if($eval->qow_q3== '1'){?> checked <?php }?> >&nbsp;
				             <label class="select_up">2 </label> <input type="radio" name="qow_q3"  class="qow" value="2" <?php if($eval->qow_q3== '2'){?> checked <?php }?> >&nbsp;
				             <label class="select_up">3 </label> <input type="radio" name="qow_q3"  class="qow" value="3" <?php if($eval->qow_q3== '3'){?> checked <?php }?>  >&nbsp;
				             <label class="select_up">4 </label> <input type="radio" name="qow_q3"  class="qow" value="4" <?php if($eval->qow_q3== '4'){?> checked <?php }?> >&nbsp;
				             <label class="select_up">5 </label> <input type="radio" name="qow_q3"  class="qow" value="5" <?php if($eval->qow_q3== '5'){?> checked <?php }?> >&nbsp;
                   <?php// echo form_dropdown('qow_q3',$option,null,'class="form-control qow" id="qow_q3" style="width:80px" ') ?>
                 </div>
              
              
          </div>
		  </div>
		  
		</div>
		<div class="clearfix" style="display: inline-block"></div>
		<div class="row">
		    <div class="col-sm-6"></div>
		  <div class="col-sm-6">
          <div class="form-group">
             <label for="type_name" class="col-sm-6 col-form-label"><?php echo 'SUB TOTAL'; ?> *</label>
             <div class="col-sm-6">
                 
				<input id="qow_total" name="qow_total" type="text" class="form-control qow_subTotal subTotal" placeholder="Sub Total" value="<?php echo $eval->qow_total;?>">	
            </div>
          </div>
		  </div>
		</div>
		<!-- End Of Quality Of work -->
        <div class="clearfix" style="display: inline-block"></div>
		<div style="border-top:1px solid #e4e5e7;"><h4 style="padding-left:15px"><b>Work Habits (Out of 20 Marks)</b></h4></div>
		<div class="row" style=" margin-top: 10px; margin-bottom: 40px;">
		
		<div class="col-sm-6">
          <div class="form-group">
           <label for="type_name" class="col-sm-8 col-form-label" style="font-weight: 100;"><?php echo 'Punctuality to workplace'; ?> *</label>

                        <div class="col-sm-4">
                           <label class="select_up">0 </label> <input type="radio"  name="wh_q1" class="wh"  value="0" <?php if($eval->wh_q1== '0'){?> checked <?php }?> >&nbsp;
			                 <label class="select_up">1 </label> <input type="radio" name="wh_q1"  class="wh" value="1" <?php if($eval->wh_q1== '1'){?> checked <?php }?> >&nbsp;
				             <label class="select_up">2 </label> <input type="radio" name="wh_q1"  class="wh" value="2" <?php if($eval->wh_q1== '2'){?> checked <?php }?> >&nbsp;
				             <label class="select_up">3 </label> <input type="radio" name="wh_q1"  class="wh" value="3" <?php if($eval->wh_q1== '3'){?> checked <?php }?> >&nbsp;
				             <label class="select_up">4 </label> <input type="radio" name="wh_q1"  class="wh" value="4" <?php if($eval->wh_q1== '4'){?> checked <?php }?> >&nbsp;
				             <label class="select_up">5 </label> <input type="radio" name="wh_q1"  class="wh" value="5" <?php if($eval->wh_q1== '5'){?> checked <?php }?> >&nbsp;
                   <?php //echo form_dropdown('wh_q1',$option,null,'class="form-control wh" id="wh_q1" style="width:80px"') ?>
                 </div>
          </div>
		</div>
		<div class="col-sm-6">
          <div class="form-group">
            <label for="type_name" class="col-sm-8 col-form-label" style="font-weight: 100;"><?php echo 'Attendance'; ?> *</label>
					<div class="col-sm-4">
					     <label class="select_up">0 </label> <input type="radio"  name="wh_q2" class="wh"  value="0"  <?php if($eval->wh_q2== '0'){?> checked <?php }?> >&nbsp;
			                 <label class="select_up">1 </label><input type="radio" name="wh_q2"  class="wh" value="1" <?php if($eval->wh_q2== '1'){?> checked <?php }?> >&nbsp;
				             <label class="select_up">2 </label> <input type="radio" name="wh_q2"  class="wh" value="2" <?php if($eval->wh_q2== '2'){?> checked <?php }?> >&nbsp;
				             <label class="select_up">3 </label> <input type="radio" name="wh_q2"  class="wh" value="3" <?php if($eval->wh_q2== '3'){?> checked <?php }?> >&nbsp;
				             <label class="select_up">4 </label> <input type="radio" name="wh_q2"  class="wh" value="4" <?php if($eval->wh_q2== '4'){?> checked <?php }?> >&nbsp;
				             <label class="select_up">5 </label> <input type="radio" name="wh_q2"  class="wh" value="5" <?php if($eval->wh_q2== '5'){?> checked <?php }?> >&nbsp;
                   <?php //echo form_dropdown('wh_q2',$option,null,'class="form-control wh" id="wh_q2" style="width:80px"') ?>
                 </div>  
          </div>
		</div>		
		</div>
	
		<div class="row" style=" margin-top: 10px; margin-bottom: 40px;">
		
		<div class="col-sm-6">
          <div class="form-group">
            <label for="type_name" class="col-sm-8 col-form-label" style="font-weight: 100;"><?php echo 'Doest the employee stay busy, look for things to do, takes initiatives at workplace'; ?> *</label>
					<div class="col-sm-4">
					    <label class="select_up">0 </label> <input type="radio"  name="wh_q3" class="wh"  value="0" <?php if($eval->wh_q3== '0'){?> checked <?php }?>>&nbsp;
			                 <label class="select_up">1 </label> <input type="radio" name="wh_q3"  class="wh" value="1" <?php if($eval->wh_q3== '1'){?> checked <?php }?> >&nbsp;
				             <label class="select_up">2 </label> <input type="radio" name="wh_q3"  class="wh" value="2" <?php if($eval->wh_q3== '2'){?> checked <?php }?> >&nbsp;
				            <label class="select_up">3 </label> <input type="radio" name="wh_q3"  class="wh" value="3" <?php if($eval->wh_q3== '3'){?> checked <?php }?> >&nbsp;
				             <label class="select_up">4 </label> <input type="radio" name="wh_q3"  class="wh" value="4" <?php if($eval->wh_q3== '4'){?> checked <?php }?> >&nbsp;
				            <label class="select_up">5 </label> <input type="radio" name="wh_q3"  class="wh" value="5" <?php if($eval->wh_q3== '5'){?> checked <?php }?> >&nbsp;
                   <?php //echo form_dropdown('wh_q3',$option,null,'class="form-control wh" id="wh_q3" style="width:80px"') ?>
                 </div>
          </div>
		</div>
		<div class="col-sm-6" >
          <div class="form-group">
             <label for="type_name" class="col-sm-8 col-form-label" style="font-weight: 100;"><?php echo 'Submits reports on time and meets deadlines'; ?> *</label>
            <div class="col-sm-4">
                             <label class="select_up">0 </label> <input type="radio"  name="wh_q4" class="wh"  value="0" <?php if($eval->wh_q4== '0'){?> checked <?php }?>>&nbsp;
			                 <label class="select_up">1 </label> <input type="radio" name="wh_q4"  class="wh" value="1" <?php if($eval->wh_q4== '1'){?> checked <?php }?> >&nbsp;
				             <label class="select_up">2 </label> <input type="radio" name="wh_q4"  class="wh" value="2" <?php if($eval->wh_q4== '2'){?> checked <?php }?> >&nbsp;
				             <label class="select_up">3 </label> <input type="radio" name="wh_q4"  class="wh" value="3" <?php if($eval->wh_q4== '3'){?> checked <?php }?>  >&nbsp;
				             <label class="select_up">4 </label> <input type="radio" name="wh_q4"  class="wh" value="4" <?php if($eval->wh_q4== '4'){?> checked <?php }?> >&nbsp;
				             <label class="select_up">5 </label> <input type="radio" name="wh_q4"  class="wh" value="5" <?php if($eval->wh_q4== '5'){?> checked <?php }?> >&nbsp;
                  <?php //echo form_dropdown('wh_q4',$option,null,'class="form-control wh" id="wh_q4" style="width:80px" ') ?>
             </div>
          </div>
		</div>
		</div>
		<div class="clearfix" style="display: inline-block"></div>
		<div class="row">
		    <div class="col-sm-6"></div>
		  <div class="col-sm-6">
          <div class="form-group">
             <label for="type_name" class="col-sm-6 col-form-label"><?php echo 'SUB TOTAL'; ?> *</label>
                        <div class="col-sm-6">
						<input id="wh_total" name="wh_total" type="text" class="form-control wh_subTotal subTotal" placeholder="Sub Total" value="<?php echo $eval->wh_total; ?>" >	
                        </div>
          </div>
		  </div>
		</div>
		<!-- End Of Work habits -->
		<div class="clearfix" style="display: inline-block"></div>
		<div style="border-top:1px solid #e4e5e7;"><h4 style="padding-left:15px"><b>Job Knowledge (Out of 15 Marks)</b></h4></div>
		<div class="row" style=" margin-top: 10px; margin-bottom: 40px;">
		
		<div class="col-sm-6">
          <div class="form-group">
            <label for="type_name" class="col-sm-8 col-form-label" style="font-weight: 100;"><?php echo 'Skill and ability to perform job satisfactorily'; ?> *</label>
                        <div class="col-sm-4">
                              <label class="select_up">0 </label> <input type="radio"  name="jk_q1" class="jk"  value="0" <?php if($eval->jk_q1== '0'){?> checked <?php }?> >&nbsp;
			                 <label class="select_up">1 </label> <input type="radio" name="jk_q1"  class="jk" value="1" <?php if($eval->jk_q1== '1'){?> checked <?php }?> >&nbsp;
				             <label class="select_up">2 </label> <input type="radio" name="jk_q1"  class="jk" value="2" <?php if($eval->jk_q1== '2'){?> checked <?php }?> >&nbsp;
				             <label class="select_up">3 </label><input type="radio" name="jk_q1"  class="jk" value="3" <?php if($eval->jk_q1== '3'){?> checked <?php }?> >&nbsp;
				             <label class="select_up">4 </label> <input type="radio" name="jk_q1"  class="jk" value="4" <?php if($eval->jk_q1== '4'){?> checked <?php }?> >&nbsp;
				             <label class="select_up">5 </label> <input type="radio" name="jk_q1"  class="jk" value="5" <?php if($eval->jk_q1== '5'){?> checked <?php }?> >&nbsp;
                   <?php //echo form_dropdown('jk_q1',$option,null,'class="form-control jk" id="jk_q1" style="width:80px" ') ?>
                 </div>
          </div>
		</div>
		<div class="col-sm-6" >
          <div class="form-group">
            <label for="type_name" class="col-sm-8 col-form-label" style="font-weight: 100;"><?php echo 'Shown interest in learning and improving'; ?> *</label>
            <div class="col-sm-4">
                             <label class="select_up">0 </label> <input type="radio"  name="jk_q2" class="jk"  value="0" <?php if($eval->jk_q2== '0'){?> checked <?php }?> >&nbsp;
			                 <label class="select_up">1 </label><input type="radio" name="jk_q2"  class="jk" value="1" <?php if($eval->jk_q2== '1'){?> checked <?php }?> >&nbsp;
				             <label class="select_up">2 </label> <input type="radio" name="jk_q2"  class="jk" value="2"  <?php if($eval->jk_q2== '2'){?> checked <?php }?> >&nbsp;
				             <label class="select_up">3 </label> <input type="radio" name="jk_q2"  class="jk" value="3" <?php if($eval->jk_q2== '3'){?> checked <?php }?> >&nbsp;
				             <label class="select_up">4 </label> <input type="radio" name="jk_q2"  class="jk" value="4" <?php if($eval->jk_q2== '4'){?> checked <?php }?>  >&nbsp;
				             <label class="select_up">5 </label> <input type="radio" name="jk_q2"  class="jk" value="5" <?php if($eval->jk_q2== '5'){?> checked <?php }?> >&nbsp;
                   <?php //echo form_dropdown('jk_q2',$option,null,'class="form-control jk" id="jk_q2" style="width:80px" ') ?>
                 </div>
          </div>
		</div>
		</div>
		 <div class="row" style=" margin-top: 10px;margin-bottom: 40px;">


          <div class="col-sm-6">
          <div class="form-group">
            <!--<label for="work_hour"><?php // echo display('gross_salary')?> <sup class="color-red ">*</sup></label>
              <input type="number" class="form-control" 
              name="rate" id="rate" placeholder="Rate">-->
                <label for="type_name" class="col-sm-8 col-form-label" style="font-weight: 100;"><?php echo 'Problem solving ability'; ?> *</label>
                        <div class="col-sm-4">
                           <label class="select_up">0 </label> <input type="radio"  name="jk_q3" class="jk"  value="0" <?php if($eval->jk_q3== '0'){?> checked <?php }?>>&nbsp;
			                 <label class="select_up">1 </label><input type="radio" name="jk_q3"  class="jk" value="1" <?php if($eval->jk_q3== '1'){?> checked <?php }?> >&nbsp;
				             <label class="select_up">2 </label> <input type="radio" name="jk_q3"  class="jk" value="2" <?php if($eval->jk_q3== '2'){?> checked <?php }?> >&nbsp;
				             <label class="select_up">3 </label> <input type="radio" name="jk_q3"  class="jk" value="3" <?php if($eval->jk_q3== '3'){?> checked <?php }?> >&nbsp;
				             <label class="select_up">4 </label><input type="radio" name="jk_q3"  class="jk" value="4" <?php if($eval->jk_q3== '4'){?> checked <?php }?> >&nbsp;
				             <label class="select_up">5 </label> <input type="radio" name="jk_q3"  class="jk" value="5" <?php if($eval->jk_q3== '5'){?> checked <?php }?> >&nbsp;
                   <?php //echo form_dropdown('jk_q3',$option,null,'class="form-control jk" id="jk_q3" style="width:80px" ') ?>
                 </div>
              
              
          </div>
		  </div>
		  
		</div>
		<div class="clearfix" style="display: inline-block"></div>
		<div class="row" style=" margin-top: 10px; margin-bottom: 40px;">
		    <div class="col-sm-6"></div>
		  <div class="col-sm-6">
          <div class="form-group">
             <label for="type_name" class="col-sm-6 col-form-label"><?php echo 'SUB TOTAL'; ?> *</label>
                        <div class="col-sm-6">
						<input id="jk_total" name="jk_total" type="text" class="form-control jk_subTotal subTotal" placeholder="Sub Total" value="<?php echo $eval->jk_total; ?>">	
                        </div>
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
<div id="menu2" class="tab-pane fade ">
  <div class="row">
    <div class="col-sm-12 col-md-11">
      <div class="panel">
        
        <div class="panel-body">
        <h4 style="padding-left:17px"><b><u>Interpersonal relations/ behaviour(Out of 25 Marks)</u></b></h4>
            <div class="clearfix" style="display: inline-block"></div>
          <div class="row" style=" margin-top: 10px; margin-bottom: 40px;">


            <div class="col-sm-6">
            <div class="form-group">
                <label for="type_name" class="col-sm-8 col-form-label" style="font-weight: 100;"><?php echo 'Responds and contributes to team efforts'; ?> *</label>

                       <div class="col-sm-4">
                            <label class="select_up">0 </label> <input type="radio"  name="irb_q1" class="irb"  value="0" <?php if($eval->irb_q1== '0'){?> checked <?php }?> >&nbsp;
			                <label class="select_up">1 </label> <input type="radio" name="irb_q1"  class="irb" value="1" <?php if($eval->irb_q1== '1'){?> checked <?php }?> >&nbsp;
				             <label class="select_up">2 </label> <input type="radio" name="irb_q1"  class="irb" value="2" <?php if($eval->irb_q1== '2'){?> checked <?php }?> >&nbsp;
				             <label class="select_up">3 </label> <input type="radio" name="irb_q1"  class="irb" value="3" <?php if($eval->irb_q1== '3'){?> checked <?php }?> >&nbsp;
				             <label class="select_up">4 </label> <input type="radio" name="irb_q1"  class="irb" value="4" <?php if($eval->irb_q1== '4'){?> checked <?php }?> >&nbsp;
				             <label class="select_up">5 </label> <input type="radio" name="irb_q1"  class="irb" value="5" <?php if($eval->irb_q1== '5'){?> checked <?php }?>  >&nbsp;
                   <?php //echo form_dropdown('irb_q1',$option,null,'class="form-control irb" id="irb_q1" style="width:80px" ') ?>
                 </div>
              
            </div>
          </div>

        <div class="col-sm-6">
          <div class="form-group">
           <label for="type_name" class="col-sm-8 col-form-label" style="font-weight: 100;"><?php echo 'Responds positively to suggestions and instructions and criticism'; ?> *</label>
         <div class="col-sm-4">
                             <label class="select_up">0 </label> <input type="radio"  name="irb_q2" class="irb"  value="0" <?php if($eval->irb_q2== '0'){?> checked <?php }?> >&nbsp;
			                 <label class="select_up">1 </label> <input type="radio" name="irb_q2"  class="irb" value="1" <?php if($eval->irb_q2== '1'){?> checked <?php }?> >&nbsp;
				             <label class="select_up">2 </label> <input type="radio" name="irb_q2"  class="irb" value="2" <?php if($eval->irb_q2== '2'){?> checked <?php }?> >&nbsp;
				             <label class="select_up">3 </label> <input type="radio" name="irb_q2"  class="irb" value="3" <?php if($eval->irb_q2== '3'){?> checked <?php }?> >&nbsp;
				             <label class="select_up">4 </label> <input type="radio" name="irb_q2"  class="irb" value="4" <?php if($eval->irb_q2== '4'){?> checked <?php }?>  >&nbsp;
				             <label class="select_up">5 </label> <input type="radio" name="irb_q2"  class="irb" value="5" <?php if($eval->irb_q2== '5'){?> checked <?php }?> >&nbsp;
                   <?php// echo form_dropdown('irb_q2',$option,null,'class="form-control irb" id="irb_q2" style="width:80px" ') ?>
                 </div>
        </div>
          
        </div>
        </div>
        
        <div class="row" style=" margin-top: 10px; margin-bottom: 40px;">


            <div class="col-sm-6">
            <div class="form-group">
                <label for="type_name" class="col-sm-8 col-form-label" style="font-weight: 100;"><?php echo 'Keeps supervisor informed of all details'; ?> *</label>
                        <div class="col-sm-4">
                           <label class="select_up">0 </label> <input type="radio"  name="irb_q3" class="irb"  value="0" <?php if($eval->irb_q3== '0'){?> checked <?php }?> >&nbsp;
			                 <label class="select_up">1 </label> <input type="radio" name="irb_q3"  class="irb" value="1" <?php if($eval->irb_q3== '1'){?> checked <?php }?> >&nbsp;
				             <label class="select_up">2 </label> <input type="radio" name="irb_q3"  class="irb" value="2" <?php if($eval->irb_q3== '2'){?> checked <?php }?>  >&nbsp;
				             <label class="select_up">3 </label> <input type="radio" name="irb_q3"  class="irb" value="3" <?php if($eval->irb_q3== '3'){?> checked <?php }?>  >&nbsp;
				             <label class="select_up">4 </label> <input type="radio" name="irb_q3"  class="irb" value="4" <?php if($eval->irb_q3== '4'){?> checked <?php }?> >&nbsp;
				             <label class="select_up">5</label> <input type="radio" name="irb_q3"  class="irb" value="5" <?php if($eval->irb_q3== '5'){?> checked <?php }?> >&nbsp;
                   <?php //echo form_dropdown('irb_q3',$option,null,'class="form-control irb" id="irb_q3" style="width:80px"') ?>
                 </div>
              
            </div>
          </div>

        <div class="col-sm-6">
          <div class="form-group">
           <label for="type_name" class="col-sm-8 col-form-label" style="font-weight: 100;"><?php echo 'Adapts well to changing circumstances'; ?> *</label>
             <div class="col-sm-4">
                            <label class="select_up">0 </label> <input type="radio"  name="irb_q4" class="irb"  value="0" <?php if($eval->irb_q4== '0'){?> checked <?php }?> >&nbsp;
			                 <label class="select_up">1 </label> <input type="radio" name="irb_q4"  class="irb" value="1" <?php if($eval->irb_q4== '1'){?> checked <?php }?> >&nbsp;
				             <label class="select_up">2 </label> <input type="radio" name="irb_q4"  class="irb" value="2" <?php if($eval->irb_q4== '2'){?> checked <?php }?> >&nbsp;
				             <label class="select_up">3 </label> <input type="radio" name="irb_q4"  class="irb" value="3" <?php if($eval->irb_q4== '3'){?> checked <?php }?> >&nbsp;
				             <label class="select_up">4 </label> <input type="radio" name="irb_q4"  class="irb" value="4" <?php if($eval->irb_q4== '4'){?> checked <?php }?> >&nbsp;
				             <label class="select_up">5 </label> <input type="radio" name="irb_q4"  class="irb" value="5" <?php if($eval->irb_q4== '5'){?> checked <?php }?> >&nbsp;
                   <?php //echo form_dropdown('irb_q4',$option,null,'class="form-control irb" id="irb_q4" style="width:80px" ') ?>
                 </div>
        </div>
          
        </div>
        </div>
        
        <div class="row" style=" margin-top: 10px;margin-bottom: 40px;">


            <div class="col-sm-6">
            <div class="form-group">
               <label for="type_name" class="col-sm-8 col-form-label" style="font-weight: 100;"><?php echo 'Seeks feedback to improve'; ?> *</label>
                       <div class="col-sm-4">
                          <label class="select_up">0 </label> <input type="radio"  name="irb_q5" class="irb"  value="0" <?php if($eval->irb_q5== '0'){?> checked <?php }?> >&nbsp;
			                <label class="select_up">1 </label> <input type="radio" name="irb_q5"  class="irb" value="1" <?php if($eval->irb_q5== '1'){?> checked <?php }?> >&nbsp;
				             <label class="select_up">2 </label> <input type="radio" name="irb_q5"  class="irb" value="2" <?php if($eval->irb_q5== '2'){?> checked <?php }?> >&nbsp;
				             <label class="select_up">3 </label> <input type="radio" name="irb_q5"  class="irb" value="3" <?php if($eval->irb_q5== '3'){?> checked <?php }?> >&nbsp;
				             <label class="select_up">4 </label> <input type="radio" name="irb_q5"  class="irb" value="4" <?php if($eval->irb_q5== '4'){?> checked <?php }?> >&nbsp;
				             <label class="select_up">5 </label> <input type="radio" name="irb_q5"  class="irb" value="5" <?php if($eval->irb_q5== '5'){?> checked <?php }?> >&nbsp;
                   <?php// echo form_dropdown('irb_q5',$option,null,'class="form-control irb" id="irb_q5" style="width:80px" ') ?>
                 </div>
              
            </div>
          </div>

        </div>
        
        <div class="clearfix" style="display: inline-block"></div>
		<div class="row">
		    <div class="col-sm-6"></div>
		  <div class="col-sm-6">
          <div class="form-group">
             <label for="type_name" class="col-sm-6 col-form-label"><?php echo 'SUB TOTAL'; ?> *</label>
                        <div class="col-sm-6">
						<input id="irb_total" name="irb_total" type="text" class="form-control irb_subTotal subTotal" placeholder="Sub Total" value="<?php echo $eval->irb_total ;?>" >
          </div>
		  </div>
		</div>
		</div>
		
		<div class="clearfix" style="display: inline-block"></div>
		<div style="border-top:1px solid #e4e5e7;"></div>
		<div class="row" style=" margin-top: 10px; margin-bottom: 40px;">
		
		<div class="col-sm-6">
          <div class="form-group">
            <label for="type_name" class="col-sm-8 col-form-label" style="font-weight: 600;"><?php echo 'Whether warning letter or showcause notice issued ? '; ?> *</label>
                        <div class="col-sm-4">
                            
                    <input type="radio"  name="irb_q6" id="irb_q6" value="1" <?php if($eval->irb_q6== '1'){?> checked <?php }?>  > Yes &nbsp;&nbsp;
			      <input type="radio" name="irb_q6" id="irb_q6" value="0" <?php if($eval->irb_q6== '0'){?> checked <?php }?> >No
									 
							
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
</div>

<div id="menu4" class="tab-pane fade">
  <div class="row">
    <div class="col-sm-12 col-md-11">
      <div class="panel">
        
        <div class="panel-body">
         <h4 style="padding-left:17px"><b><u>Leadership (Out of 25 Marks)</u></b></h4>
            <div class="clearfix" style="display: inline-block"></div>
          <div class="row" style=" margin-top: 10px; margin-bottom: 65px;">


            <div class="col-sm-6">
            <div class="form-group">
                <label for="type_name" class="col-sm-8 col-form-label" style="font-weight: 100;"><?php echo 'Aspirant to climb up the ladder, accepts challenges, new responsibilities and roles. (out of 10)'; ?> *</label>

                        <div class="col-sm-4">
                            <label class="select_up">0 </label> <input type="radio"  name="leader_q1" class="leader"  value="0" <?php if($eval->leader_q1== '0'){?> checked <?php }?> >&nbsp;
			                 <label class="select_up">1 </label> <input type="radio" name="leader_q1"  class="leader" value="1" <?php if($eval->leader_q1== '1'){?> checked <?php }?> >&nbsp;
				             <label class="select_up">2 </label><input type="radio" name="leader_q1"  class="leader" value="2" <?php if($eval->leader_q1== '2'){?> checked <?php }?> >&nbsp;
				             <label class="select_up">3 </label> <input type="radio" name="leader_q1"  class="leader" value="3" <?php if($eval->leader_q1== '3'){?> checked <?php }?> >&nbsp;
				             <label class="select_up">4 </label> <input type="radio" name="leader_q1"  class="leader" value="4" <?php if($eval->leader_q1== '4'){?> checked <?php }?>>&nbsp;
				             <label class="select_up">5 </label> <input type="radio" name="leader_q1"  class="leader" value="5" <?php if($eval->leader_q1== '5'){?> checked <?php }?> >&nbsp;<br><br>
				             <label class="select_up" style=" top: 25px;">6 </label> <input type="radio" name="leader_q1"  class="leader" value="6" <?php if($eval->leader_q1== '6'){?> checked <?php }?> >&nbsp;
				             <label class="select_up" style=" top: 25px;">7 </label> <input type="radio" name="leader_q1"  class="leader" value="7" <?php if($eval->leader_q1== '7'){?> checked <?php }?>>&nbsp;
				             <label class="select_up" style=" top: 25px;">8 </label> <input type="radio" name="leader_q1"  class="leader" value="8" <?php if($eval->leader_q1== '8'){?> checked <?php }?> >&nbsp;
				             <label class="select_up" style=" top: 25px;">9 </label> <input type="radio" name="leader_q1"  class="leader" value="9" <?php if($eval->leader_q1== '9'){?> checked <?php }?> >&nbsp;
				             <label class="select_up" style=" top: 25px;">10 </label> <input type="radio" name="leader_q1"  class="leader" value="10" <?php if($eval->leader_q1== '10'){?> checked <?php }?> >&nbsp;
                   <?php //echo form_dropdown('leader_q1',$option,null,'class="form-control leader" id="leader_q1" style="width:80px" ') ?>
                 </div>
              
            </div>
          </div>

        <div class="col-sm-6">
          <div class="form-group">
           <label for="type_name" class="col-sm-8 col-form-label" style="font-weight: 100;"><?php echo 'Innovative thinking - contribution to organizations and functions and personal growth. (out of 10)'; ?> *</label>
                        <div class="col-sm-4">
                            <label class="select_up" >0 </label> <input type="radio"  name="leader_q2" class="leader"  value="0" <?php if($eval->leader_q2== '0'){?> checked <?php }?> >&nbsp;
			                 <label class="select_up">1 </label> <input type="radio" name="leader_q2"  class="leader" value="1" <?php if($eval->leader_q2== '1'){?> checked <?php }?> >&nbsp;
				            <label class="select_up">2 </label><input type="radio" name="leader_q2"  class="leader" value="2" <?php if($eval->leader_q2== '2'){?> checked <?php }?> >&nbsp;
				             <label class="select_up">3 </label> <input type="radio" name="leader_q2"  class="leader" value="3" <?php if($eval->leader_q2== '3'){?> checked <?php }?> >&nbsp;
				             <label class="select_up">4 </label> <input type="radio" name="leader_q2"  class="leader" value="4" <?php if($eval->leader_q2== '4'){?> checked <?php }?>  >&nbsp;
				             <label class="select_up">5 </label> <input type="radio" name="leader_q2"  class="leader" value="5" <?php if($eval->leader_q2== '5'){?> checked <?php }?> >&nbsp;<br><br>
				             <label class="select_up" style=" top: 25px;">6 </label> <input type="radio" name="leader_q2"  class="leader" value="6" <?php if($eval->leader_q2== '6'){?> checked <?php }?> >&nbsp;
				             <label class="select_up" style=" top: 25px;">7 </label> <input type="radio" name="leader_q2"  class="leader" value="7" <?php if($eval->leader_q2== '7'){?> checked <?php }?> >&nbsp;
				             <label class="select_up" style=" top: 25px;">8 </label> <input type="radio" name="leader_q2"  class="leader" value="8" <?php if($eval->leader_q2== '8'){?> checked <?php }?> >&nbsp;
				             <label class="select_up" style=" top: 25px;">9 </label> <input type="radio" name="leader_q2"  class="leader" value="9" <?php if($eval->leader_q2== '9'){?> checked <?php }?> >&nbsp;
				             <label class="select_up"style=" top: 25px;">10 </label> <input type="radio" name="leader_q2"  class="leader" value="10" <?php if($eval->leader_q2== '10'){?> checked <?php }?> >&nbsp;
                   <?php// echo form_dropdown('leader_q2',$option,null,'class="form-control leader" id="leader_q2" style="width:80px" ') ?>
                 </div>
        </div>
          
        </div>
        </div>
        
         <div class="row" style=" margin-top: 10px; margin-bottom: 40px;">


            <div class="col-sm-6">
            <div class="form-group">
              <label for="type_name" class="col-sm-8 col-form-label" style="font-weight: 100;"><?php echo 'Work motivation. (out of 5)'; ?> *</label>
                         <div class="col-sm-4">
                             
                              <label class="select_up">0 </label> <input type="radio"  name="leader_q3" class="leader"  value="0" <?php if($eval->leader_q3== '0'){?> checked <?php }?> >&nbsp;
			                 <label class="select_up">1 </label><input type="radio" name="leader_q3"  class="leader" value="1" <?php if($eval->leader_q3== '1'){?> checked <?php }?> >&nbsp;
				             <label class="select_up">2 </label> <input type="radio" name="leader_q3"  class="leader" value="2" <?php if($eval->leader_q3== '2'){?> checked <?php }?> >&nbsp;
				             <label class="select_up">3 </label> <input type="radio" name="leader_q3"  class="leader" value="3" <?php if($eval->leader_q3== '3'){?> checked <?php }?>  >&nbsp;
				             <label class="select_up">4 </label> <input type="radio" name="leader_q3"  class="leader" value="4" <?php if($eval->leader_q3== '4'){?> checked <?php }?> >&nbsp;
				             <label class="select_up">5 </label> <input type="radio" name="leader_q3"  class="leader" value="5" <?php if($eval->leader_q3== '5'){?> checked <?php }?> >&nbsp;
                   <?php //echo form_dropdown('leader_q3',$option,null,'class="form-control leader" id="leader_q3" style="width:80px" ') ?>
                 </div>
              
            </div>
          </div>

        </div>
        
        <div class="clearfix" style="display: inline-block"></div>
		<div class="row" style=" margin-top: 10px; margin-bottom: 40px;">
		    <div class="col-sm-6"></div>
		  <div class="col-sm-6">
          <div class="form-group">
             <label for="type_name" class="col-sm-6 col-form-label"><?php echo 'SUB TOTAL'; ?> *</label>
                        <div class="col-sm-6">
						<input id="leader_total" name="leader_total" type="text" class="form-control leader_subTotal subTotal" placeholder="Sub Total" value="<?php echo $eval->leader_total ; ?>">	
                        </div>
		  </div>
		</div>
		</div>
          

        <div class="form-group text-right">
         
         <input type="button" class="btn btn-primary btnPrevious"  value="Previous">
         <input type="button" class="btn btn-primary btnNext" onclick="valid_inf4()"  value="NEXT">
       </div>
       

     </div>  
   </div>
 </div>
</div>
</div> 


<div id="menu5" class="tab-pane fade ">
	<div class="row">
	<div class="col-sm-12 col-md-11">
		<div class="panel">                 
		<div class="panel-body">
		<div class="row" style=" margin-top: 10px; margin-bottom: 40px;">
		
		<div class="col-sm-6">
          <div class="form-group">
            <label for="type_name" class="col-sm-8 col-form-label" style="font-weight: 100;"><?php echo 'Employee performance and learning is unsatisfactory and is failing to improve at a satisfactory rate'; ?> *</label>
                        <div class="col-sm-4">
                    <input type="radio"  name="op_q1" id="op_q1" value="1" <?php if($eval->op_q1== '1'){?> checked <?php }?> > Yes &nbsp;&nbsp;
			      <input type="radio" name="op_q1" id="op_q1" value="0" <?php if($eval->op_q1== '0'){?> checked <?php }?> >No
                        </div>
          </div>
		</div>
		
			<div class="col-sm-6">
          <div class="form-group">
            <label for="type_name" class="col-sm-8 col-form-label" style="font-weight: 100;"><?php echo 'Employee performance and learning is acceptable and is improving at a satisfactory rate'; ?> *</label>
                        <div class="col-sm-4">
                    <input type="radio"  name="op_q2" id="op_q2" value="1" <?php if($eval->op_q2== '1'){?> checked <?php }?> > Yes &nbsp;&nbsp;
			      <input type="radio" name="op_q2" id="op_q2" value="0" <?php if($eval->op_q2== '0'){?> checked <?php }?> >No
                        </div>
          </div>
		</div>
		
		</div>
		<div class="row" style=" margin-top: 10px; margin-bottom: 40px;">
		
		<div class="col-sm-6">
          <div class="form-group">
          <label for="type_name" class="col-sm-8 col-form-label" style="font-weight: 100;"><?php echo 'Employee has successfully demonstrated outstanding overall performance'; ?> *</label>
                        <div class="col-sm-4">
                    <input type="radio"  name="op_q3" id="op_q3" value="1"<?php if($eval->op_q3== '1'){?> checked <?php }?> > Yes &nbsp;&nbsp;
			      <input type="radio" name="op_q3" id="op_q3" value="0" <?php if($eval->op_q3== '0'){?> checked <?php }?> >No
                        </div>
          </div>
		</div>

		
		</div>
		<div class="form-group text-right">
		<input type="button" class="btn btn-primary btnPrevious"  value="Previous">
		<input type="button" class="btn btn-primary" onclick="valid_inf5()" value="Next" >
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
			<div class="row" style=" margin-top: 10px; margin-bottom: 40px;">
		
		<div class="col-sm-12">
          <div class="form-group">
           <label for="type_name" class="col-sm-3 col-form-label"><?php echo 'FINAL COMMENTS'; ?> *</label>

                        <div class="col-sm-9">
					    <textarea name="final_comment" class="form-control"  id="final_comment" ><?php echo $eval->final_comment ;?></textarea>

                        </div>
          </div>
		</div>
		
		
		</div>
		
			<div class="row" style=" margin-top: 10px; margin-bottom: 40px;">
		
		<div class="col-sm-12">
          <div class="form-group">
          <label for="type_name" class="col-sm-3 col-form-label"><?php echo 'RECOMMENDATIONS'; ?> *</label>

                        <div class="col-sm-9">
						<textarea name="recommendation" class="form-control" placeholder="recommendation" id="recommendation" ><?php echo $eval->recommendation ;?></textarea>

                        </div>
          </div>
		</div>
		
		
		</div>
		<div class="form-group text-right">
		<input type="button" class="btn btn-primary btnPrevious"  value="Previous">
		<input type="button" class="btn btn-primary" onclick="valid_inf6()"  value="Next">
		</div>
		</div>
		</div>
    </div>
	</div>
</div>

<!--MENU 7 -->

<div id="menu7" class="tab-pane fade">
	<div class="row">
	<div class="col-sm-12 col-md-11">
		<div class="panel">                 
		<div class="panel-body">
		<div class="row" style=" margin-top: 10px; margin-bottom: 10px;">
		
		<div class="col-sm-6">
          <div class="form-group">
            <label for="type_name" class="col-sm-4 col-form-label"><?php echo 'Evaluator Name'; ?> *</label>
                        <div class="col-sm-8">
					    <input id="evaluator_name" name="evaluator_name" type="text" class="form-control" placeholder="Evaluator Name" value="<?php echo $eval->evaluator_name ;?>" >	
                        </div>
						
          </div>
		</div>
		
			<div class="col-sm-6">
          <div class="form-group">
           <label for="type_name" class="col-sm-4 col-form-label"><?php echo 'Evaluation Purpose'; ?> *</label>
                        <div class="col-sm-8">
					    <input id="eval_purpose" name="eval_purpose" type="text" class="form-control" placeholder="Evaluation Purpose" value="<?php echo $eval->eval_purpose ;?>" >	
                        </div>
          </div>
		</div>
		
		</div>
		<div class="row" style=" margin-top: 10px; margin-bottom: 10px;">
		
		<div class="col-sm-6">
          <div class="form-group">
          <label for="type_name" class="col-sm-4 col-form-label"><?php echo 'Date'; ?> *</label>
                       <div class="col-sm-8">
					    <input id="dateval" name="dateval" type="date" class="form-control" value="<?php echo $eval->dateval ;?>" >	
                        </div>
          </div>
		</div>
		<div class="col-sm-6">
          <div class="form-group">
          <label for="type_name" class="col-sm-4 col-form-label"><?php echo 'Total'; ?> *</label>
                       <div class="col-sm-8">
					    <input id="total" name="total" type="text" class="form-control total" value="<?php echo $eval->total ;?>" >	
                        </div>
          </div>
		</div>

		
		</div>
		<div class="form-group text-right">
		<input type="button" class="btn btn-primary btnPrevious"  value="Previous">
	    <input type="submit" class="btn btn-success"  onclick="valid_inf8()"  value="Update">
		</div>
		</div>
		</div>
    </div>
	</div>
	
	
	
	
</div>


<!--MENU 7 END -->

        <?php echo form_close() ?>
      </div>    
    </div>
  </div>
</div>
</div>

</div>
</div>
</div>
<script>
  //var loadFile = function(event) {
   // var output = document.getElementById('output');
   // output.src = URL.createObjectURL(event.target.files[0]);
  //};
</script>
<script>

  $('.btnPrevious').click(function(){
    $('.nav-tabs > .active').prev('li').find('a').trigger('click');
  });

 

</script>


<!--CALCULATE TOTAL AND SUB TOTAL -->
<script>


        $(".qow").click(function() {
     var sum = 0;
         $(".qow:checked").each(function() {
	
	      sum += +$(this).val();
	    });
	    $(".qow_subTotal").val(sum);
            calcTotal();
            
        });
        
        
        $(".wh").click(function() {
         var sum = 0;
         $(".wh:checked").each(function() {
	
	      sum += +$(this).val();
	    });
	    $(".wh_subTotal").val(sum);
            calcTotal();
            
        });
        
        $(".jk").click(function() {
         var sum = 0;
         $(".jk:checked").each(function() {
	
	      sum += +$(this).val();
	    });
	    $(".jk_subTotal").val(sum);
            calcTotal();
            
        });
        
        $(".irb").click(function() {
         var sum = 0;
         $(".irb:checked").each(function() {
	
	      sum += +$(this).val();
	    });
	    $(".irb_subTotal").val(sum);
            calcTotal();
            
        });
        
        $(".leader").click(function() {
         var sum = 0;
         $(".leader:checked").each(function() {
	
	      sum += +$(this).val();
	    });
	    $(".leader_subTotal").val(sum);
            calcTotal();
            
        });
        


	
	// Does work
	function calcTotal() {
	    var sum = 0;
	    $(".subTotal").each(function(){
	        sum += +$(this).val();
	    });
	    $(".total").val(sum);
	}; 
</script>
<script>

  $('.btnPrevious').click(function(){
    $('.nav-tabs > .active').prev('li').find('a').trigger('click');
  });

 //tab1 validation
function valid_inf() {
 /* var employee_id = $('#employee_id').val();
  var start_date = $('#start_date').val();
  var end_date = $('#end_date').val();
 
  if (start_date == "") {
    document.getElementById("start_date").style.borderColor = "red";

  }else{
    $("#start_date").on('keyup', function(){
     document.getElementById("start_date").style.borderColor = "green";
   });

  }
  if (end_date == "") {
    document.getElementById("end_date").style.borderColor = "red";

  }else{
    $("#end_date").on('keyup', function(){
     document.getElementById("end_date").style.borderColor = "green";
   });

  }
   if(document.getElementById('employee_id').selectedIndex == 0)
    {
    alert("Employee name is necessary");
    }

  if(start_date !== "" && end_date !== ""){*/
   $('.nav-tabs > .active').next('li').find('a').trigger('click');
 /*}*/
} 

// tab2 validation
function valid_inf2() {

   $('.nav-tabs > .active').next('li').find('a').trigger('click');
 
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
 /* var dobInput = document.getElementById('dob');
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
  if(dob !== "" && gender !== "" && ssn !== ""){*/
   $('.nav-tabs > .active').next('li').find('a').trigger('click');
/* }*/

}
function valid_inf6() {
  
/*  var h_phoneInput = document.getElementById('h_phone');
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

  }*/
/*  if(h_phone !== "" && c_phone !== ""){*/
   $('.nav-tabs > .active').next('li').find('a').trigger('click');
/* }*/

}

function valid_inf8() {
  
document.getElementById("emp_form").submit();

}

</script>

<script>
function pf_status_fun()
{
	var department = document.getElementById("department");
	var target = document.getElementById("target");
	var scored = document.getElementById("scored");
    target.style.display = department.value == "4" ? "block" : "none";
    scored.style.display = department.value == "4" ? "block" : "none";
	
	
}
</script>


