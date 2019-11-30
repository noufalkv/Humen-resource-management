<div class="row">          
  <div class="col-sm-12">                
<div class="panel panel-default" style="float: left;width: 100%;">
                  <div class="panel-body" style="padding: 15px;float: left;">                        
				   <?php echo form_open('employee/Evaluation/ManageEvalun',array('class' => 'form-inline', 'id' => 'validate'));?>                           
				   <label class="select"><?php echo display('search') ?>:</label>                         
				   <input type="text" name="what_you_search" class="form-control" placeholder='<?php echo display('what_you_search') ?>' id="what_you_search" required>                            
				   <button type="submit" class="btn btn-primary"><?php echo display('search') ?></button>                        
				   <?php echo form_close()?>
				   </div>					
			<?php if( $this->session->userdata('branch_id') == 1) { ?>
               <div class="panel-body" style="padding: 15px;float: left;">	
				<?php echo form_open('employee/Evaluation/ManageEvaluation',array('class' => 'form-inline', 'id' => 'validate'));?>					
				<label class="select"><?php echo display('branch1') ?>:</label>					
				<?php echo form_dropdown('branch',$branch_options,'id="branch_id" class="form-control"'); ?>					
				<button type="submit" class="btn btn-primary"><?php echo display('submit') ?>
				</button>
				<?php echo form_close()?>
				<div>               
				</div>            
				</div>
				<?php } ?>
        </div>
		<div class="row">    <!--  table area -->    
		<div class="col-sm-12">        
		<div class="panel panel-default thumbnail">           
		
		<div class="panel-body table-responsive">              
		<table width="100%" class="datatable table table-striped table-bordered table-hover">                    
		<thead>                       
		<tr>                          
		<th><?php echo display('cid') ?></th>                                                
		<th><?php echo display('first_name')?></th>                          
		<th><?php echo display('last_name')?></th>                                                  
		<!--<th><?php //echo display('division')?></th> -->                        
		<th><?php echo 'Designation';?></th> 		                      
		<th><?php echo 'Join Date';?></th>                         		                                     
		<th><?php echo 'Evaluator Name';?></th>                      
		<th><?php echo 'Evaluator Purpose';?></th> 		
		<th><?php echo 'Total';?></th>                                                                     
		<th><?php echo 'Review Start';?></th>                       
		<th><?php echo 'Review End';?></th>                                               
   <th style="width: 65px;"><?php echo display('action')?></th>                  
   </tr>                    </thead>                  
   <tbody>                      
   <?php if (!empty($eval_det)) { ?>                        
   <?php $sl = 1; ?>                       
   <?php foreach ($eval_det as $row) { ?>                             
   <tr class="<?php echo ($sl & 1)?"odd gradeX":"even gradeC"; ?>">                                
   <td><?php echo $sl; ?></td>                                                             
   <td><?php echo $row->first_name; ?></td>                                
   <td><?php echo $row->last_name; ?></td>                                                              
   <!--<td><?php //echo $row->dept; ?></td>   -->                           
   <td><?php echo $row->position; ?></td> 
   <td><?php echo $row->hire_date; ?></td> 
  
   <td><?php echo $row->evaluator_name; ?></td>                               
   <td><?php echo $row->eval_purpose; ?></td>                                
   <td><?php echo $row->total; ?></td>                     
   <td><?php echo $row->start_date; ?></td>                       
   <td><?php echo $row->end_date; ?></td>                                                        
  <?php //$supervisor = $this->db->select('first_name,last_name')->from('employee_history')->where('employee_id',$row->super_visor_id)->get()->row();                                                            
   ?>                                
                 
   <td class="center" style="width: 65px;">
        <a href="<?php echo base_url("employee/Evaluation/eval_detail/$row->eval_id");?>" class="btn btn-xs btn-primary"><i class="fa fa-eye"></i></a>                                      
   <a href="<?php echo base_url("employee/Evaluation/update_eval/$row->eval_id") ?>" class="btn btn-xs btn-success"><i class="fa fa-pencil"></i></a>                                    
   <a href="<?php echo base_url("employee/Evaluation/delete_eval/$row->eval_id") ?>" class="btn btn-xs btn-danger" onclick="return confirm('<?php echo display('are_you_sure') ?>') "><i class="fa fa-trash"></i></a>                                       
                                                                          
   </td>                               
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
   </div>
   </div>