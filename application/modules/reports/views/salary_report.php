<div class="row">            <div class="col-sm-12">                
<div class="panel panel-default" style="float: left;width: 100%;">
                   				
			<?php if( $this->session->userdata('branch_id') == 1) { ?>
		
               <div class="panel-body" style="padding: 15px;float: left;">	
				<?php echo form_open('reports/Report_controller/manageemployee',array('class' => 'form-inline', 'id' => 'validate'));?>		
				<label class="select"><?php echo display('branch1') ?>:</label>	
				
				<?php echo form_dropdown('branch',$branch_options,$branch_id,'class="form-control"'); ?>			
				<button type="submit" class="btn btn-primary"><?php echo display('submit') ?></button>			
				<div>            
				</div>            
				</div>
				<?php } ?>
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
                            <th>NAME</th>
                            <th>DESIGNATION</th>
                            <th>PRESENT DAYS</th>
                            <th>LEAVE ADJ.</th>
                            <th>TOTAL DAYS</th>
                            <th>BASIC + DA</th>
                            <th>HRA</th>
                            <th>CA</th>
                            <th>MA</th>
                            <th>GROSS SALARY</th>
                            <th>EARNED SALARY AFTER HRA</th>
                            <th>EARNED SALARY</th>
                            <th>EPF</th>
                            <th>ESI</th>
                            <th>ADVANCE</th>
                            <th>LOAN</th>
                            <th>TDS</th>
                            <th>TOTAL DEDUCTIONS</th>
                            <th>SALARY PAYABLE</th>
                            <th>EMPLOYER EPF</th>
                            <th>EMPLOYER ESI</th>
                            <th>TA & DA</th>
                            <th>NET SALARY</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($emp_sl_setup)) { ?>
                            <?php $sl = 1; ?>
                            <?php foreach ($emp_sl_setup as $que) { ?>
                                <tr class="<?php echo ($sl & 1)?"odd gradeX":"even gradeC" ?>">
                                      <td><?php echo $sl; ?></td>
                                      <td><?php echo $que->first_name.' '.$que->last_name; ?></td>
                                      <td><?php echo $que->position; ?></td>
                                      <td><?php echo $que->present_days; ?></td>
                                      <td><?php echo $que->adj_leave; ?></td>
                                      <td><?php echo $que->total_days; ?></td>
                                      <td><?php echo $que->basic; ?></td>
                                      <td><?php echo $que->hra; ?></td>
                                      <td><?php echo $que->ca; ?></td>
                                      <td><?php echo $que->ma; ?></td>
                                      <td><?php echo $que->gross_salary; ?></td>
                                      <td><?php echo $que->earned_salary_after_hra; ?></td>
                                      <td><?php echo $que->earned_salary; ?></td>
                                      <td><?php echo $que->pf ; ?></td>
                                      <td><?php echo $que->esi ; ?></td>
                                      <td><?php echo $que->advance ; ?></td>
                                      <td><?php echo $que->loan ; ?></td>
                                      <td><?php echo $que->tds ; ?></td>
                                      <td><?php echo $que->total_deductions ; ?></td>
                                      <td><?php echo $que->salary_payable ; ?></td>
                                      <td><?php echo $que->employer_pf ; ?></td>
                                      <td><?php echo $que->employer_esi ; ?></td>
                                      <td><?php echo $que->ta ; ?></td>
                                      <td><?php echo $que->net_salary ; ?></td>
                                                                
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
 
 