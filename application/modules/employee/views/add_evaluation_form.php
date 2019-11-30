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

               <?= form_open('employee/Evaluation/AddEvaluation') ?>
               <div class="row">
                <div class="col-sm-4">
                  <div class="form-group">
                    <label for="first_name"><?php echo display('Employee_Name') ?> <sup class="color-red ">*</sup></label>
                      <?php echo form_dropdown('employee_id',$employee,null,'class="form-control" id="employee_id" onchange="employechange(this.value)"') ?>
                  </div>
                  
                </div>
               
              <div class="col-sm-4">
                  <div class="form-group">
                    <label for="l_name"><?php echo 'Designation';?></label>
                    
                    <input type="text" class="form-control" id="designation"
                    name="designation" placeholder="Designation"> 
                  </div>
                </div> 

                <div class="col-sm-4">
                  <div class="form-group">
                    <label for="l_name"><?php echo 'Salary';?> </label>
                    <input type="text" class="form-control" id="salary"
                    name="salary" placeholder="Salary">
                  </div>
                </div>
              </div>
              

              <div class="row">
              
              <div class="col-sm-4">
                <div class="form-group">
                  <label for="l_name"><?php echo 'Joining Date';?> </label>
                    <input type="text" class="form-control" id="join_date"
                    name="join_date" placeholder="Joining Date">
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                 <label for="l_name"><?php echo 'Review Period';?> </label>
				 <div class="form-group row">
				<label class="col-sm-5 col-form-label" style="font-weight: 100;"><?php echo 'Start Date';?> </label> <div class="col-sm-7" style=" padding-bottom: 10px;"><input type="date" class="form-control" id="start_date" name="start_date" placeholder="Start Date" ></div>
				<div style="display: inline-block"></div>
				  <label class="col-sm-5 col-form-label" style="font-weight: 100;"><?php echo 'End Date';?> </label><div class="col-sm-7"> <input type="date" class="form-control " id="end_date"
                    name="end_date" placeholder="End Date"></div>
                   </div>
                </div>
              </div>
           
                <div class="col-sm-4">
                <div class="form-group">
                <label for="l_name"><?php echo 'Department';?> </label>
                      <?php echo form_dropdown('department',$dept,null,'class="form-control" id="department" onchange="pf_status_fun()"') ?>
                </div>
              </div>
                
            </div>
            
            <div class="row">
                <!--  Sales 1 tab-->
                <div class="col-sm-4 " id="scored1" style="display: none">
                    <div class="form-group">
                    <label for="scored1"><?php  echo "Scored"; ?> </label>
                    <input type="text" class="form-control" 
                     name="scored1" id="scored1" placeholder="<?php  echo "Scored"; ?> ">  
                    </div>
		        </div>	
		        <div class="col-sm-4" id="target1" style="display: none" >
                    <div class="form-group">
                    <label for="target1"><?php  echo "Target"; ?> </label>
                    <input type="text" class="form-control" 
                     name="target1" id="target1" placeholder="<?php  echo "Target"; ?> ">  
                    </div>
		        </div>
		        <div class="col-sm-4" id="month1" style="display: none" >
                    <div class="form-group">
                    <label for="month1"><?php  echo "Month"; ?> </label><br>
                    <select name="month1" class="form-control">
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
		        <!-- End of Sales 1 tab-->
		        <!--  Service 1 tab-->
		        <div class="col-sm-4 " id="serviced1" style="display: none">
                    <div class="form-group">
                    <label for="serviced1"><?php  echo "Scored"; ?> </label>
                    <input type="text" class="form-control" 
                     name="serviced1" id="serviced1" placeholder="<?php  echo "Scored"; ?> ">  
                    </div>
		        </div>	
		        
		        <div class="col-sm-4" id="month4" style="display: none" >
                    <div class="form-group">
                    <label for="month4"><?php  echo "Month"; ?> </label><br>
                    <select name="month4" class="form-control" >
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
		        <!-- End of Service 1 tab-->
            </div>
            
            <div class="row">
                <!-- Sales  2 tab-->
                <div class="col-sm-4 " id="scored2" style="display: none">
                    <div class="form-group">
                    <label for="scored2"><?php  echo "Scored"; ?> </label>
                    <input type="text" class="form-control" 
                     name="scored2" id="scored2" placeholder="<?php  echo "Scored"; ?> ">  
                    </div>
		        </div>	
		        <div class="col-sm-4" id="target2" style="display: none" >
                    <div class="form-group">
                    <label for="target2"><?php  echo "Target"; ?> </label>
                    <input type="text" class="form-control" 
                     name="target2" id="target2" placeholder="<?php  echo "Target"; ?> ">  
                    </div>
		        </div>
		        <div class="col-sm-4" id="month2" style="display: none" >
                    <div class="form-group">
                    <label for="month2"><?php  echo "Month"; ?> </label><br>
                    <select name="month2" class="form-control" >
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
		        <!-- End of Sales 2 tab-->
		         <!--  Service 2 tab-->
		        <div class="col-sm-4 " id="serviced2" style="display: none">
                    <div class="form-group">
                    <label for="serviced2"><?php  echo "Scored"; ?> </label>
                    <input type="text" class="form-control" 
                     name="serviced2" id="serviced2" placeholder="<?php  echo "Scored"; ?> ">  
                    </div>
		        </div>	
		        
		        <div class="col-sm-4" id="month5" style="display: none" >
                    <div class="form-group">
                    <label for="month5"><?php  echo "Month"; ?> </label><br>
                    <select name="month5" class="form-control" >
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
		        <!-- End of Service 2 tab-->
		        
            </div>
            
            <div class="row">
                <!--  Sales 3 tab-->
                <div class="col-sm-4 " id="scored3" style="display: none">
                    <div class="form-group">
                    <label for="scored3"><?php  echo "Scored"; ?> </label>
                    <input type="text" class="form-control" 
                     name="scored3" id="scored3" placeholder="<?php  echo "Scored"; ?> ">  
                    </div>
		        </div>	
		        <div class="col-sm-4" id="target3" style="display: none" >
                    <div class="form-group">
                    <label for="target3"><?php  echo "Target"; ?> </label>
                    <input type="text" class="form-control" 
                     name="target3" id="target3" placeholder="<?php  echo "Target"; ?> ">  
                    </div>
		        </div>
		        <div class="col-sm-4" id="month3" style="display: none" >
                    <div class="form-group">
                    <label for="month3"><?php  echo "Month"; ?> </label><br>
                    <select name="month3" class="form-control" >
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
		        
		        <!-- End of Sales 3 tab-->
		         <!-- Service 3 tab -->
		        <div class="col-sm-4 " id="serviced3" style="display: none">
                    <div class="form-group">
                    <label for="serviced3"><?php  echo "Scored"; ?> </label>
                    <input type="text" class="form-control" 
                     name="serviced3" id="serviced3" placeholder="<?php  echo "Scored"; ?> ">  
                    </div>
		        </div>	
		        
		        <div class="col-sm-4" id="month6" style="display: none" >
                    <div class="form-group">
                    <label for="month6"><?php  echo "Month"; ?> </label><br>
                    <select name="month6" class="form-control" >
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
		        <!-- End of Service 3 tab-->
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
                            <label class="select_up">0 </label> <input type="radio"  name="qow_q1" class="qow"  value="0" checked="checked">&nbsp;
			                 <label class="select_up">1 </label><input type="radio" name="qow_q1"  class="qow" value="1"  >&nbsp;
				             <label class="select_up">2 </label><input type="radio" name="qow_q1"  class="qow" value="2"  >&nbsp;
				             <label class="select_up">3</label><input type="radio" name="qow_q1"  class="qow" value="3"  >&nbsp;
				            <label class="select_up">4 </label><input type="radio" name="qow_q1"  class="qow" value="4"  >&nbsp;
				             <label class="select_up">5 </label><input type="radio" name="qow_q1"  class="qow" value="5"  >&nbsp;
                   <?php //echo form_dropdown('qow_q1',$option,null,'class="form-control qow" id="qow_q1" style="width:80px"') ?>
                 </div>
              
            </div>
          </div>

        <div class="col-sm-6">
          <div class="form-group">
           <label for="type_name" class="col-sm-8 col-form-label" style="font-weight: 100;"><?php echo 'Adherence to duties and procedures in Job Description and Work Instructions'; ?> *</label>
           <div class="col-sm-4">
                           <label class="select_up">0 </label> <input type="radio"  name="qow_q2" class="qow"  value="0" checked="checked">&nbsp;
			                 <label class="select_up">1 </label> <input type="radio" name="qow_q2"  class="qow" value="1" >&nbsp;
				             <label class="select_up">2 </label><input type="radio" name="qow_q2"  class="qow" value="2"  >&nbsp;
				             <label class="select_up">3 </label><input type="radio" name="qow_q2"  class="qow" value="3"  >&nbsp;
				             <label class="select_up">4 </label> <input type="radio" name="qow_q2"  class="qow" value="4"  >&nbsp;
				             <label class="select_up">5 </label> <input type="radio" name="qow_q2"  class="qow" value="5"  >&nbsp;
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
                             <label class="select_up">0 </label> <input type="radio"  name="qow_q3" class="qow"  value="0" checked="checked">&nbsp;
			                 <label class="select_up">1 </label> <input type="radio" name="qow_q3"  class="qow" value="1" >&nbsp;
				             <label class="select_up">2 </label> <input type="radio" name="qow_q3"  class="qow" value="2"  >&nbsp;
				             <label class="select_up">3 </label> <input type="radio" name="qow_q3"  class="qow" value="3"  >&nbsp;
				             <label class="select_up">4 </label> <input type="radio" name="qow_q3"  class="qow" value="4"  >&nbsp;
				             <label class="select_up">5 </label> <input type="radio" name="qow_q3"  class="qow" value="5"  >&nbsp;
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
                 
				<input id="qow_total" name="qow_total" type="text" class="form-control qow_subTotal subTotal" placeholder="Sub Total" >	
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
                           <label class="select_up">0 </label> <input type="radio"  name="wh_q1" class="wh"  value="0" checked="checked">&nbsp;
			                 <label class="select_up">1 </label> <input type="radio" name="wh_q1"  class="wh" value="1"  >&nbsp;
				             <label class="select_up">2 </label> <input type="radio" name="wh_q1"  class="wh" value="2"  >&nbsp;
				             <label class="select_up">3 </label> <input type="radio" name="wh_q1"  class="wh" value="3"  >&nbsp;
				             <label class="select_up">4 </label> <input type="radio" name="wh_q1"  class="wh" value="4"  >&nbsp;
				             <label class="select_up">5 </label> <input type="radio" name="wh_q1"  class="wh" value="5"  >&nbsp;
                   <?php //echo form_dropdown('wh_q1',$option,null,'class="form-control wh" id="wh_q1" style="width:80px"') ?>
                 </div>
          </div>
		</div>
		<div class="col-sm-6">
          <div class="form-group">
            <label for="type_name" class="col-sm-8 col-form-label" style="font-weight: 100;"><?php echo 'Attendance'; ?> *</label>
					<div class="col-sm-4">
					     <label class="select_up">0 </label> <input type="radio"  name="wh_q2" class="wh"  value="0" checked="checked">&nbsp;
			                 <label class="select_up">1 </label><input type="radio" name="wh_q2"  class="wh" value="1"  >&nbsp;
				             <label class="select_up">2 </label> <input type="radio" name="wh_q2"  class="wh" value="2"  >&nbsp;
				             <label class="select_up">3 </label> <input type="radio" name="wh_q2"  class="wh" value="3"  >&nbsp;
				             <label class="select_up">4 </label> <input type="radio" name="wh_q2"  class="wh" value="4"  >&nbsp;
				             <label class="select_up">5 </label> <input type="radio" name="wh_q2"  class="wh" value="5"  >&nbsp;
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
					    <label class="select_up">0 </label> <input type="radio"  name="wh_q3" class="wh"  value="0" checked="checked">&nbsp;
			                 <label class="select_up">1 </label> <input type="radio" name="wh_q3"  class="wh" value="1"  >&nbsp;
				             <label class="select_up">2 </label> <input type="radio" name="wh_q3"  class="wh" value="2"  >&nbsp;
				            <label class="select_up">3 </label> <input type="radio" name="wh_q3"  class="wh" value="3"  >&nbsp;
				             <label class="select_up">4 </label> <input type="radio" name="wh_q3"  class="wh" value="4"  >&nbsp;
				            <label class="select_up">5 </label> <input type="radio" name="wh_q3"  class="wh" value="5"  >&nbsp;
                   <?php //echo form_dropdown('wh_q3',$option,null,'class="form-control wh" id="wh_q3" style="width:80px"') ?>
                 </div>
          </div>
		</div>
		<div class="col-sm-6" >
          <div class="form-group">
             <label for="type_name" class="col-sm-8 col-form-label" style="font-weight: 100;"><?php echo 'Submits reports on time and meets deadlines'; ?> *</label>
            <div class="col-sm-4">
                             <label class="select_up">0 </label> <input type="radio"  name="wh_q4" class="wh"  value="0" checked="checked">&nbsp;
			                 <label class="select_up">1 </label> <input type="radio" name="wh_q4"  class="wh" value="1"  >&nbsp;
				             <label class="select_up">2 </label> <input type="radio" name="wh_q4"  class="wh" value="2"  >&nbsp;
				             <label class="select_up">3 </label> <input type="radio" name="wh_q4"  class="wh" value="3"  >&nbsp;
				             <label class="select_up">4 </label> <input type="radio" name="wh_q4"  class="wh" value="4"  >&nbsp;
				             <label class="select_up">5 </label> <input type="radio" name="wh_q4"  class="wh" value="5"  >&nbsp;
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
						<input id="wh_total" name="wh_total" type="text" class="form-control wh_subTotal subTotal" placeholder="Sub Total" >	
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
                              <label class="select_up">0 </label> <input type="radio"  name="jk_q1" class="jk"  value="0" checked="checked">&nbsp;
			                 <label class="select_up">1 </label> <input type="radio" name="jk_q1"  class="jk" value="1"  >&nbsp;
				             <label class="select_up">2 </label> <input type="radio" name="jk_q1"  class="jk" value="2"  >&nbsp;
				             <label class="select_up">3 </label><input type="radio" name="jk_q1"  class="jk" value="3"  >&nbsp;
				             <label class="select_up">4 </label> <input type="radio" name="jk_q1"  class="jk" value="4"  >&nbsp;
				             <label class="select_up">5 </label> <input type="radio" name="jk_q1"  class="jk" value="5"  >&nbsp;
                   <?php //echo form_dropdown('jk_q1',$option,null,'class="form-control jk" id="jk_q1" style="width:80px" ') ?>
                 </div>
          </div>
		</div>
		<div class="col-sm-6" >
          <div class="form-group">
            <label for="type_name" class="col-sm-8 col-form-label" style="font-weight: 100;"><?php echo 'Shown interest in learning and improving'; ?> *</label>
            <div class="col-sm-4">
                             <label class="select_up">0 </label> <input type="radio"  name="jk_q2" class="jk"  value="0" checked="checked">&nbsp;
			                 <label class="select_up">1 </label><input type="radio" name="jk_q2"  class="jk" value="1"  >&nbsp;
				             <label class="select_up">2 </label> <input type="radio" name="jk_q2"  class="jk" value="2"  >&nbsp;
				             <label class="select_up">3 </label> <input type="radio" name="jk_q2"  class="jk" value="3"  >&nbsp;
				             <label class="select_up">4 </label> <input type="radio" name="jk_q2"  class="jk" value="4"  >&nbsp;
				             <label class="select_up">5 </label> <input type="radio" name="jk_q2"  class="jk" value="5"  >&nbsp;
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
                           <label class="select_up">0 </label> <input type="radio"  name="jk_q3" class="jk"  value="0" checked="checked">&nbsp;
			                 <label class="select_up">1 </label><input type="radio" name="jk_q3"  class="jk" value="1"  >&nbsp;
				             <label class="select_up">2 </label> <input type="radio" name="jk_q3"  class="jk" value="2"  >&nbsp;
				             <label class="select_up">3 </label> <input type="radio" name="jk_q3"  class="jk" value="3"  >&nbsp;
				             <label class="select_up">4 </label><input type="radio" name="jk_q3"  class="jk" value="4"  >&nbsp;
				             <label class="select_up">5 </label> <input type="radio" name="jk_q3"  class="jk" value="5"  >&nbsp;
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
						<input id="jk_total" name="jk_total" type="text" class="form-control jk_subTotal subTotal" placeholder="Sub Total" >	
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
                            <label class="select_up">0 </label> <input type="radio"  name="irb_q1" class="irb"  value="0" checked="checked">&nbsp;
			                <label class="select_up">1 </label> <input type="radio" name="irb_q1"  class="irb" value="1"  >&nbsp;
				             <label class="select_up">2 </label> <input type="radio" name="irb_q1"  class="irb" value="2"  >&nbsp;
				             <label class="select_up">3 </label> <input type="radio" name="irb_q1"  class="irb" value="3"  >&nbsp;
				             <label class="select_up">4 </label> <input type="radio" name="irb_q1"  class="irb" value="4"  >&nbsp;
				             <label class="select_up">5 </label> <input type="radio" name="irb_q1"  class="irb" value="5"  >&nbsp;
                   <?php //echo form_dropdown('irb_q1',$option,null,'class="form-control irb" id="irb_q1" style="width:80px" ') ?>
                 </div>
              
            </div>
          </div>

        <div class="col-sm-6">
          <div class="form-group">
           <label for="type_name" class="col-sm-8 col-form-label" style="font-weight: 100;"><?php echo 'Responds positively to suggestions and instructions and criticism'; ?> *</label>
         <div class="col-sm-4">
                             <label class="select_up">0 </label> <input type="radio"  name="irb_q2" class="irb"  value="0" checked="checked">&nbsp;
			                 <label class="select_up">1 </label> <input type="radio" name="irb_q2"  class="irb" value="1"  >&nbsp;
				             <label class="select_up">2 </label> <input type="radio" name="irb_q2"  class="irb" value="2"  >&nbsp;
				             <label class="select_up">3 </label> <input type="radio" name="irb_q2"  class="irb" value="3"  >&nbsp;
				             <label class="select_up">4 </label> <input type="radio" name="irb_q2"  class="irb" value="4"  >&nbsp;
				             <label class="select_up">5 </label> <input type="radio" name="irb_q2"  class="irb" value="5"  >&nbsp;
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
                           <label class="select_up">0 </label> <input type="radio"  name="irb_q3" class="irb"  value="0" checked="checked">&nbsp;
			                 <label class="select_up">1 </label> <input type="radio" name="irb_q3"  class="irb" value="1"  >&nbsp;
				             <label class="select_up">2 </label> <input type="radio" name="irb_q3"  class="irb" value="2"  >&nbsp;
				             <label class="select_up">3 </label> <input type="radio" name="irb_q3"  class="irb" value="3"  >&nbsp;
				             <label class="select_up">4 </label> <input type="radio" name="irb_q3"  class="irb" value="4"  >&nbsp;
				             <label class="select_up">5</label> <input type="radio" name="irb_q3"  class="irb" value="5"  >&nbsp;
                   <?php //echo form_dropdown('irb_q3',$option,null,'class="form-control irb" id="irb_q3" style="width:80px"') ?>
                 </div>
              
            </div>
          </div>

        <div class="col-sm-6">
          <div class="form-group">
           <label for="type_name" class="col-sm-8 col-form-label" style="font-weight: 100;"><?php echo 'Adapts well to changing circumstances'; ?> *</label>
             <div class="col-sm-4">
                            <label class="select_up">0 </label> <input type="radio"  name="irb_q4" class="irb"  value="0" checked="checked">&nbsp;
			                 <label class="select_up">1 </label> <input type="radio" name="irb_q4"  class="irb" value="1"  >&nbsp;
				             <label class="select_up">2 </label> <input type="radio" name="irb_q4"  class="irb" value="2"  >&nbsp;
				             <label class="select_up">3 </label> <input type="radio" name="irb_q4"  class="irb" value="3"  >&nbsp;
				             <label class="select_up">4 </label> <input type="radio" name="irb_q4"  class="irb" value="4"  >&nbsp;
				             <label class="select_up">5 </label> <input type="radio" name="irb_q4"  class="irb" value="5"  >&nbsp;
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
                          <label class="select_up">0 </label> <input type="radio"  name="irb_q5" class="irb"  value="0" checked="checked">&nbsp;
			                <label class="select_up">1 </label> <input type="radio" name="irb_q5"  class="irb" value="1"  >&nbsp;
				             <label class="select_up">2 </label> <input type="radio" name="irb_q5"  class="irb" value="2"  >&nbsp;
				             <label class="select_up">3 </label> <input type="radio" name="irb_q5"  class="irb" value="3"  >&nbsp;
				             <label class="select_up">4 </label> <input type="radio" name="irb_q5"  class="irb" value="4"  >&nbsp;
				             <label class="select_up">5 </label> <input type="radio" name="irb_q5"  class="irb" value="5"  >&nbsp;
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
						<input id="irb_total" name="irb_total" type="text" class="form-control irb_subTotal subTotal" placeholder="Sub Total" >
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
                            
                    <input type="radio"  name="irb_q6" id="irb_q6" value="1" > Yes &nbsp;&nbsp;
			      <input type="radio" name="irb_q6" id="irb_q6" value="0" checked="checked" >No
									 
							
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
                            <label class="select_up">0 </label> <input type="radio"  name="leader_q1" class="leader"  value="0" checked="checked">&nbsp;
			                 <label class="select_up">1 </label> <input type="radio" name="leader_q1"  class="leader" value="1"  >&nbsp;
				             <label class="select_up">2 </label><input type="radio" name="leader_q1"  class="leader" value="2"  >&nbsp;
				             <label class="select_up">3 </label> <input type="radio" name="leader_q1"  class="leader" value="3"  >&nbsp;
				             <label class="select_up">4 </label> <input type="radio" name="leader_q1"  class="leader" value="4"  >&nbsp;
				             <label class="select_up">5 </label> <input type="radio" name="leader_q1"  class="leader" value="5"  >&nbsp;<br><br>
				             <label class="select_up" style=" top: 25px;">6 </label> <input type="radio" name="leader_q1"  class="leader" value="6"  >&nbsp;
				             <label class="select_up" style=" top: 25px;">7 </label> <input type="radio" name="leader_q1"  class="leader" value="7"  >&nbsp;
				             <label class="select_up" style=" top: 25px;">8 </label> <input type="radio" name="leader_q1"  class="leader" value="8"  >&nbsp;
				             <label class="select_up" style=" top: 25px;">9 </label> <input type="radio" name="leader_q1"  class="leader" value="9"  >&nbsp;
				             <label class="select_up" style=" top: 25px;">10 </label> <input type="radio" name="leader_q1"  class="leader" value="10"  >&nbsp;
                   <?php //echo form_dropdown('leader_q1',$option,null,'class="form-control leader" id="leader_q1" style="width:80px" ') ?>
                 </div>
              
            </div>
          </div>

        <div class="col-sm-6">
          <div class="form-group">
           <label for="type_name" class="col-sm-8 col-form-label" style="font-weight: 100;"><?php echo 'Innovative thinking - contribution to organizations and functions and personal growth. (out of 10)'; ?> *</label>
                        <div class="col-sm-4">
                            <label class="select_up" >0 </label> <input type="radio"  name="leader_q2" class="leader"  value="0" checked="checked">&nbsp;
			                 <label class="select_up">1 </label> <input type="radio" name="leader_q2"  class="leader" value="1"  >&nbsp;
				            <label class="select_up">2 </label><input type="radio" name="leader_q2"  class="leader" value="2"  >&nbsp;
				             <label class="select_up">3 </label> <input type="radio" name="leader_q2"  class="leader" value="3"  >&nbsp;
				             <label class="select_up">4 </label> <input type="radio" name="leader_q2"  class="leader" value="4"  >&nbsp;
				             <label class="select_up">5 </label> <input type="radio" name="leader_q2"  class="leader" value="5"  >&nbsp;<br><br>
				             <label class="select_up" style=" top: 25px;">6 </label> <input type="radio" name="leader_q2"  class="leader" value="6"  >&nbsp;
				             <label class="select_up" style=" top: 25px;">7 </label> <input type="radio" name="leader_q2"  class="leader" value="7"  >&nbsp;
				             <label class="select_up" style=" top: 25px;">8 </label> <input type="radio" name="leader_q2"  class="leader" value="8"  >&nbsp;
				             <label class="select_up" style=" top: 25px;">9 </label> <input type="radio" name="leader_q2"  class="leader" value="9"  >&nbsp;
				             <label class="select_up"style=" top: 25px;">10 </label> <input type="radio" name="leader_q2"  class="leader" value="10"  >&nbsp;
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
                              <label class="select_up">0 </label> <input type="radio"  name="leader_q3" class="leader"  value="0" checked="checked">&nbsp;
			                 <label class="select_up">1 </label><input type="radio" name="leader_q3"  class="leader" value="1"  >&nbsp;
				             <label class="select_up">2 </label> <input type="radio" name="leader_q3"  class="leader" value="2"  >&nbsp;
				             <label class="select_up">3 </label> <input type="radio" name="leader_q3"  class="leader" value="3"  >&nbsp;
				             <label class="select_up">4 </label> <input type="radio" name="leader_q3"  class="leader" value="4"  >&nbsp;
				             <label class="select_up">5 </label> <input type="radio" name="leader_q3"  class="leader" value="5"  >&nbsp;
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
						<input id="leader_total" name="leader_total" type="text" class="form-control leader_subTotal subTotal" placeholder="Sub Total" >	
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
                    <input type="radio"  name="op_q1" id="op_q1" value="1" > Yes &nbsp;&nbsp;
			      <input type="radio" name="op_q1" id="op_q1" value="0" checked="checked" >No
                        </div>
          </div>
		</div>
		
			<div class="col-sm-6">
          <div class="form-group">
            <label for="type_name" class="col-sm-8 col-form-label" style="font-weight: 100;"><?php echo 'Employee performance and learning is acceptable and is improving at a satisfactory rate'; ?> *</label>
                        <div class="col-sm-4">
                    <input type="radio"  name="op_q2" id="op_q2" value="1" > Yes &nbsp;&nbsp;
			      <input type="radio" name="op_q2" id="op_q2" value="0" checked="checked" >No
                        </div>
          </div>
		</div>
		
		</div>
		<div class="row" style=" margin-top: 10px; margin-bottom: 40px;">
		
		<div class="col-sm-6">
          <div class="form-group">
          <label for="type_name" class="col-sm-8 col-form-label" style="font-weight: 100;"><?php echo 'Employee has successfully demonstrated outstanding overall performance'; ?> *</label>
                        <div class="col-sm-4">
                    <input type="radio"  name="op_q3" id="op_q3" value="1" > Yes &nbsp;&nbsp;
			      <input type="radio" name="op_q3" id="op_q3" value="0" checked="checked" >No
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
					    <textarea name="final_comment" class="form-control" placeholder="final comment" id="final_comment"></textarea>

                        </div>
          </div>
		</div>
		
		
		</div>
		
			<div class="row" style=" margin-top: 10px; margin-bottom: 40px;">
		
		<div class="col-sm-12">
          <div class="form-group">
          <label for="type_name" class="col-sm-3 col-form-label"><?php echo 'RECOMMENDATIONS'; ?> *</label>

                        <div class="col-sm-9">
						<textarea name="recommendation" class="form-control" placeholder="recommendation" id="recommendation"></textarea>

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
					    <input id="evaluator_name" name="evaluator_name" type="text" class="form-control" placeholder="Evaluator Name" >	
                        </div>
						
          </div>
		</div>
		
			<div class="col-sm-6">
          <div class="form-group">
           <label for="type_name" class="col-sm-4 col-form-label"><?php echo 'Evaluation Purpose'; ?> *</label>
                        <div class="col-sm-8">
					    <input id="eval_purpose" name="eval_purpose" type="text" class="form-control" placeholder="Evaluation Purpose" >	
                        </div>
          </div>
		</div>
		
		</div>
		<div class="row" style=" margin-top: 10px; margin-bottom: 10px;">
		
		<div class="col-sm-6">
          <div class="form-group">
          <label for="type_name" class="col-sm-4 col-form-label"><?php echo 'Date'; ?> *</label>
                       <div class="col-sm-8">
					    <input id="dateval" name="dateval" type="date" class="form-control" >	
                        </div>
          </div>
		</div>
		<div class="col-sm-6">
          <div class="form-group">
          <label for="type_name" class="col-sm-4 col-form-label"><?php echo 'Total'; ?> *</label>
                       <div class="col-sm-8">
					    <input id="total" name="total" type="text" class="form-control total" >	
                        </div>
          </div>
		</div>

		
		</div>
		<div class="form-group text-right">
		<input type="button" class="btn btn-primary btnPrevious"  value="Previous">
	<input type="submit" class="btn btn-success"  value="Save">
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
function valid_inf7() {
 /*var em_contactInput = document.getElementById('em_contact');
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

}*/
/*if(em_contact !== "" && e_h_phone !== "" && e_w_phone !== ""){*/
  //$('.nav-tabs > .active').next('li').find('a').trigger('click');
/*}*/
 //document.getElementById("emp_form").submit();
}

function valid_inf8() {
  


}

</script>
<script>
function employechange(id){
//alert(id);
$.ajax({
  url:"<?php echo base_url('employee/Evaluation/getemployee')?>",
  method:'post',
  dataType:'json',
  data:{
'employee_id': id,
  },
  success:function(data){
document.getElementById('salary').value=data.basic;
/*document.getElementById('picture').value=data.picture;*/
document.getElementById('designation').value=data.position_name;
document.getElementById('join_date').value=data.hire_date;
  }
});
}
</script>

<script>
function pf_status_fun()
{
	var department = document.getElementById("department");
	
	
	var target1 = document.getElementById("target1");
	var scored1 = document.getElementById("scored1");
	var month1 = document.getElementById("month1");
	
	var target2 = document.getElementById("target2");
	var scored2 = document.getElementById("scored2");
	var month2 = document.getElementById("month2");
	
	var target3 = document.getElementById("target3");
	var scored3 = document.getElementById("scored3");
	var month3 = document.getElementById("month3");
	
	var serviced1 = document.getElementById("serviced1");
	var month4 = document.getElementById("month4");
	
	var serviced2 = document.getElementById("serviced2");
	var month5 = document.getElementById("month5");
	
	var serviced3 = document.getElementById("serviced3");
	var month6 = document.getElementById("month6");
	
	
	
	month1.style.display = department.value == "4" ? "block" : "none";
    target1.style.display = department.value == "4" ? "block" : "none";
    scored1.style.display = department.value == "4" ? "block" : "none";
    
    month2.style.display = department.value == "4" ? "block" : "none";
    target2.style.display = department.value == "4" ? "block" : "none";
    scored2.style.display = department.value == "4" ? "block" : "none";
    
    month3.style.display = department.value == "4" ? "block" : "none";
    target3.style.display = department.value == "4" ? "block" : "none";
    scored3.style.display = department.value == "4" ? "block" : "none";
    
     month4.style.display = department.value == "11" ? "block" : "none";
    serviced1.style.display = department.value == "11" ? "block" : "none";
    
    month5.style.display = department.value == "11" ? "block" : "none";
    serviced2.style.display = department.value == "11" ? "block" : "none";
    
      month6.style.display = department.value == "11" ? "block" : "none";
    serviced3.style.display = department.value == "11" ? "block" : "none";
    
    
	
	
}
</script>

