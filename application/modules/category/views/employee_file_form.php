   <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="panel">
                <div class="panel-heading">
                    <div class="panel-title">
                       
                    </div>
                </div>
                <div class="panel-body">

                <?= form_open_multipart('category/filetrack_controller/employee_file_form') ?>
            
                    <?php echo form_hidden('file_id', (!empty($filetrack->file_id)?$filetrack->file_id:null)) ?>
                    
                    
                    <div class="form-group row">
                        <label for="filetrack_name" class="col-sm-3 col-form-label"><?php echo "Employee Name"; ?> *</label>
                        <div class="col-sm-9">
                                    <?php echo form_dropdown('employee',$employee,(!empty($filetrack->file_emp)?$filetrack->file_emp:null),'class="form-control" required') ?>
                        </div>
                    </div> 
      
                     <div class="form-group row">
                        <label for="filetrack_name" class="col-sm-3 col-form-label"><?php echo display('filetrack_name') ?> *</label>
                        <div class="col-sm-9">
                                    <input name="filetrack_name" class="form-control" type="text" placeholder="<?php echo display('filetrack_name') ?>" id="filetrack_name" value="<?php echo (!empty($filetrack->file_name)?$filetrack->file_name:null) ?>" required >
                        </div>
                    </div> 
                    <div class="form-group row">
                        <label for="filetrack_desc" class="col-sm-3 col-form-label"><?php echo display('category_desc') ?> *</label>
                        <div class="col-sm-9">
                                    <input name="filetrack_desc" class="form-control" type="text" placeholder="<?php echo display('category_desc') ?>" id="filetrack_desc" value="<?php echo (!empty($filetrack->file_desc)?$filetrack->file_desc:null) ?>" required >
                        </div>
                    </div> 
                    
                    <div class="form-group row">
                        <label for="filetrack_reg" class="col-sm-3 col-form-label"><?php echo display('category_reg') ?> *</label>
                        <div class="col-sm-9" >
                                    <input name="filetrack_reg" class="form-control" type="date" placeholder="<?php echo display('category_reg') ?>" id="filetrack_reg" value="<?php echo (!empty($filetrack->file_reg)?$filetrack->file_reg:null) ?>" required >
                            
                        </div>
                    </div> 
                    <div class="form-group row">
                        <label for="filetrack_exp" class="col-sm-3 col-form-label"><?php echo display('category_exp') ?> *</label>
                        <div class="col-sm-9">
                                    <input name="filetrack_exp" class="form-control" type="date" placeholder="<?php echo display('category_exp') ?>" id="filetrack_exp" value="<?php echo (!empty($filetrack->file_exp)?$filetrack->file_exp:null) ?>" required >
                        </div>
                    </div> 
                    <div class="form-group row">
                        <label for="filetrack_file" class="col-sm-3 col-form-label"><?php echo display('category_file') ?> *</label>
                        <div class="col-sm-5">
                                    <input name="filetrack_file" class="form-control" type="file"  id="filetrack_file" value="<?php if (!empty($filetrack->filee_file)) echo $filetrack->filee_file ; ?>" >
                        </div>
                        <div class="col-sm-4">
                                    <input  class="form-control" type="text"  id="filetrack_file" name="file_read" value="<?php echo (!empty($filetrack->filee_file)?$filetrack->filee_file:null) ?>" readonly >
                        </div>
                    </div> 


                    <div class="form-group row">
                        <label for="category" class="col-sm-3 col-form-label"><?php echo display('category_name') ?>*</label>
                        <div class="col-sm-9">
                             <?php echo form_dropdown('parent_id',$category,(!empty($filetrack->parent_id)?$filetrack->parent_id:null),'class="form-control" required') ?>
                        </div>
                    </div> 
                    
                     
                    <div class="form-group text-right">
                        <button type="reset" class="btn btn-primary w-md m-b-5"><?php echo display('reset') ?></button>
                        <button type="submit" class="btn btn-success w-md m-b-5"><?php echo display('save') ?></button>
                    </div>
                <?php echo form_close() ?>

            </div>  
        </div>
    </div>
</div>
