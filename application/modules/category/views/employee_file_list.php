
<div class="row">           
<div class="col-sm-12">                
<div class="panel panel-default" style="float: left;width: 100%;">
                  					
		
               <div class="panel-body" style="padding: 15px;float: left;">	
				<?php echo form_open('category/Filetrack_controller/employee_file_list',array('class' => 'form-inline', 'id' => 'validate'));?>		
				<label class="select"><?php echo "Employee" ;?>:</label>				
				
				<?php echo form_dropdown('employee_id',$employee,(!empty($filetrack->file_emp)?$filetrack->file_emp:null),'class="form-control" id="employee_id"') ?>
				
				<label class="select"><?php echo "Category" ;?>:</label>				
				
					<?php echo form_dropdown('category',$category,(!empty($filetrack->parent_id)?$filetrack->parent_id:null),'class="form-control" id="category"') ?>
				<button type="submit" class="btn btn-primary"><?php echo display('submit') ?></button>			
				<div>            
				</div>            
				</div>
                </div>
        <?php echo form_close() ?> 

<div class="row">
    <!--  table area -->
    <div class="col-sm-12">

        <div class="panel panel-default thumbnail"> 

            <div class="panel-body">
                <table width="100%" class="datatable table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th><?php echo display('cid') ?></th>
                            <th><?php echo display('filetrack_name') ?></th>
                            <th><?php echo "Employee Name"; ?></th>
                            <th><?php echo "Category"; ?></th>
                            <th><?php echo display('category_desc') ?></th>
                             <th><?php echo display('category_reg') ?></th>
                             <th><?php echo display('category_exp') ?></th>
                             <th><?php echo display('category_file') ?></th>
                             <th><?php echo "Status"; ?></th>
                            <th><?php echo display('action') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($filetrack)) { ?>
                            <?php $sl = 1; ?>
                            <?php foreach ($filetrack as $row) { ?>
                                <tr class="<?php echo ($sl & 1)?"odd gradeX":"even gradeC" ?>">
                                    <td><?php echo $sl; ?></td>
                                    <td><?php echo $row->file_name; ?></td>
                                    <td><?php echo $row->first_name;echo " ";echo $row->last_name;  ?></td>
                                     <td><?php echo $row->category_name; ?></td>
                                     <td><?php echo $row->file_desc; ?></td>
                                 <td><?php echo $row->file_reg; ?></td> 
                                  <td><?php echo $row->file_exp; ?></td> 
                                   <td><?php echo $row->filee_file; ?></td> 
                                   <td><?php echo $row->file_status; ?></td> 
                                      <td class="center">
                                  
                                   
                                        <a href="<?php echo base_url("category/Filetrack_controller/employee_file_form/$row->file_id") ?>" class="btn btn-xs btn-success"><i class="fa fa-pencil"></i></a>
                                  
                                    
                                     
                                        <a href="<?php echo base_url("category/Filetrack_controller/delete_employee_file/$row->file_id") ?>" class="btn btn-xs btn-danger" onclick="return confirm('<?php echo display('are_you_sure') ?>') "><i class="fa fa-close"></i></a>
                                         
                                    </td>
                                </tr>
                                <?php $sl++; ?>
                            <?php } ?> 
                        <?php } ?> 
                    </tbody>
                </table>  <!-- /.table-responsive -->
                   <?= $links ?>
            </div>
        </div>
    </div>
</div>