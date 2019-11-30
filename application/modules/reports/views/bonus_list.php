


<div class="row">            <div class="col-sm-12">                
<!--<div class="panel panel-default" style="float: left;width: 100%;">
                   				
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
        <div class="row">    <!--  table area -->    <div class="col-sm-12">      
        <div class="panel panel-default thumbnail">        
        <div class="panel-body table-responsive">               
        <table width="100%" class="datatable table table-striped table-bordered table-hover">          
        <thead>                        <tr>                    
        <th><?php echo display('cid') ?></th>
                          <th><?php echo display('name')?></th>
                          <th><?php echo display('designation') ?></th>
                          <th><?php echo display('gross_salary') ?></th>
                          <th><?php echo display('april') ?></th>
                          <th><?php echo display('may') ?></th>
                          <th><?php echo display('june') ?></th>
                          <th><?php echo display('july') ?></th>
                          <th><?php echo display('august') ?></th>
                          <th><?php echo display('sept') ?></th>
                          <th><?php echo display('october') ?></th>
                          <th><?php echo display('nov') ?></th>
                          <th><?php echo display('december') ?></th>
                          <th><?php echo display('jan') ?></th>
                          <th><?php echo display('feb') ?></th>
                          <th><?php echo display('march') ?></th>
                          <th><?php echo "Total"; ?></th>
                          <th><?php echo display('declared_bonus') ?></th>
                           <th><?php echo display('fin_year') ?></th>
                          <th><?php echo display('add_date') ?></th>  
                          <th><?php echo "Status";?></th>
                            
        </tr>                 
        </thead>                  
        <tbody>                   
        <?php if (!empty($emp_history)) { ?>                   
        <?php $sl = 1; ?>                     
        <?php foreach ($emp_history as $row) { ?>                      
        <tr class="<?php echo ($sl & 1)?"odd gradeX":"even gradeC" ?>">       
        <td><?php echo $sl; ?></td>                          
        <td><?php echo $row->first_name; echo " ";echo $row->last_name; ?></td>                            
        <td><?php echo $row->position_name; ?></td>                       
        <td><?php echo $row->rate; ?></td>                             
        <td><?php echo $row->apr; ?></td>                           
        <td><?php echo $row->may; ?></td> 
        <td><?php echo $row->jne; ?></td> 
                                   
         <td><?php echo $row->jly; ?></td>               
           <td><?php echo $row->aug; ?></td>              
        <td><?php echo $row->sept; ?></td>                       
        <td><?php echo $row->oct; ?></td> 
         <td><?php echo $row->nov; ?></td>
        <td><?php echo $row->decem; ?></td>              
        <td><?php echo $row->jan; ?></td>                
                    
        <td><?php echo $row->feb; ?></td>                   
        <td><?php echo $row->mar; ?></td>           
        <td><?php echo $row->total; ?></td>                  
        <td><?php echo $row->dis_bonus; ?></td>                
        <td><?php echo $row->year; ?></td> 
        <td><?php echo $row->add_date; ?></td> 
         <td><?php if($row->status == '0') echo "Paid"; else echo "Pending"; ?></td> 
                       
        </tr>                                <?php $sl++; ?>                    
        <?php } ?>                         <?php } ?>                   
        </tbody>                </table>  <!-- /.table-responsive -->   
        </div>        </div> 
        </div></div>
