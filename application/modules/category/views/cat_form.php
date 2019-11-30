<div class="form-group text-right">
 <?php if($this->permission->method('category','create')->access()): ?>  
<button type="button" class="btn btn-primary btn-md" data-target="#add" data-toggle="modal"  ><i class="fa fa-plus-circle" aria-hidden="true"></i>
<?php echo display('add_new_cat')?></button> 
<?php endif; ?>
 <?php if($this->permission->method('category','read')->access()): ?>  
<a href="<?php echo base_url();?>/category/Category_controller/cat_view" class="btn btn-primary"><?php echo display('manage_cat')?></a>
<?php endif; ?>
</div>
<!--  -->

<div class="row">
    <!--  table area -->
    <div class="col-sm-12">

        <div class="panel panel-default thumbnail"> 

            <div class="panel-body">
                <table width="100%" class="datatable table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th><?php echo display('cid') ?></th>
                            <th><?php echo display('category_name') ?></th>
                             <th><?php echo "Type"; ?></th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($mang)) { ?>
                            <?php $sl = 1; ?>
                            <?php foreach ($mang as $row) { ?>
                                <tr class="<?php echo ($sl & 1)?"odd gradeX":"even gradeC" ?>">
                                    <td><?php echo $sl; ?></td>
                                    <td><?php echo $row->category_name; ?></td>
                                    <td><?php echo $row->type; ?></td>
                                     
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
 
 
 <div id="add" class="modal fade" role="dialog">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header"  style="background-color: green;color:white">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <center><strong><h4><i class='fa fa-university' aria-hidden='true'></i>Category Form</h4></strong></center>
            </div>
            <div class="modal-body">
               
    
   <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="panel">
                <div class="panel-heading">
                    <div class="panel-title">
                       
                    </div>
                </div>
                <div class="panel-body">

                    <?= form_open('category/Category_controller/create_cat'); ?>
                   
                       <div class="form-group row">
                           
                            <label for="category_name" class="col-sm-3 col-form-label">
                            <?php echo display('category_name') ?></label>
                            <div class="col-sm-9">
                           <input type="text" name="category_name" class=" form-control" placeholder="<?php echo display('category_name') ?>">
                               
                            </div>
                           
                        </div>
                        
                         <div class="form-group row">
                           
                            <label for="category_name" class="col-sm-3 col-form-label">
                            <?php echo "Type"; ?></label>
                            <div class="col-sm-9">
                           <input type="text" name="type" class=" form-control" placeholder="<?php echo "Type"; ?>">
                               
                            </div>
                           
                        </div>
                       
                        
             
                        <div class="form-group text-right">
                            <button type="reset" class="btn btn-primary w-md m-b-5"><?php echo display('reset') ?></button>
                            <button type="submit" class="btn btn-success w-md m-b-5"><?php echo display('ad') ?></button>
                        </div>
                    <?php echo form_close() ?>

                </div>  
            </div>
        </div>
    </div>
    </div>
     
            </div>
            <div class="modal-footer">

            </div>

        </div>

    </div>


