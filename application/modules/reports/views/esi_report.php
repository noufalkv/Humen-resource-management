<!--<div class="row">            <div class="col-sm-12">                
<div class="panel panel-default" style="float: left;width: 100%;">
                   				
			<?php /*if( $this->session->userdata('branch_id') == 1) { ?>
		
               <div class="panel-body" style="padding: 15px;float: left;">	
				<?php echo form_open('reports/Report_controller/manageemployee',array('class' => 'form-inline', 'id' => 'validate'));?>		
				<label class="select"><?php echo display('branch1') ?>:</label>	
				
				<?php echo form_dropdown('branch',$branch_options,$branch_id,'class="form-control"'); ?>			
				<button type="submit" class="btn btn-primary"><?php echo display('submit') ?></button>			
				<div>            
				</div>            
				</div>
				<?php } */?>
        </div>-->
<div class="row">
    <!--  table area -->
    <div class="col-sm-12">

        <div class="panel panel-default thumbnail"> 
    
            <div class="panel-body">
                <table width="100%" class="datatable table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th><?php echo display('cid') ?></th>
                            <th>IP Number</th>
                            <th>IP Name</th>
                            <th>No of Days for which wages paid/payable during the month</th>
                            <th>Total Monthly Wages</th>
                            <th> Reason Code for Zero workings days</th>
                            <th>Last Working Day</th>
                            
                           
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($esi)) { ?>
                            <?php $sl = 1; ?>
                            <?php foreach ($esi as $que) { ?>
                                <tr class="<?php echo ($sl & 1)?"odd gradeX":"even gradeC" ?>">
                                      <td><?php echo $sl; ?></td>
                                      <td><?php echo $que->esi_ip_number; ?></td>
                                      <td><?php echo $que->first_name.' '.$que->last_name; ?></td>
                                      <td><?php echo $que->total_days; ?></td>
                                      <td><?php echo $que->gross_salary; ?></td>
                                      <td></td>
                                      <td></td>
                                   
                                      
                                      
                                                                
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
 
 