<div class="form-group text-right">


<?php if($this->permission->method('branch','create')->access()): ?>
<button type="button" class="btn btn-primary btn-md" data-target="#add" data-toggle="modal"  ><i class="fa fa-plus-circle" aria-hidden="true"></i>
<?php echo display('add_new_branch') ?></button> 
<?php endif; ?>


<?php if($this->permission->method('branch','view')->access()): ?>
<a href="<?php echo base_url();?>/branch/Branch_controller/branch_view" class="btn btn-primary"><?php echo display('manage_branch') ?></a>
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
                            <th><?php echo display('branch_id') ?></th>
                            <th><?php echo display('branch_name') ?></th>
                            <th><?php echo display('branch_code') ?></th>
                            <th><?php echo display('branch_address') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($mang)) { ?>
                            <?php $sl = 1; ?>
                            <?php foreach ($mang as $row) { ?>
                                <tr class="<?php echo ($sl & 1)?"odd gradeX":"even gradeC" ?>">
                                    <td><?php echo $sl; ?></td>
                                    <td><?php echo $row->branch_name; ?></td>
                                    <td><?php  $text=$row->branch_code;
                                           $ps = substr($pieces, 0, 16)."...";
                                           //echo $ps ;

                                           $cn=strlen($text);
                                           //echo $cn;

                                           if ($cn>20) {
                                              echo $ps;
                                           }else
                                           {
                                              echo $text;
                                           }

                                ?>
                                  
                                </td>
                                <td><?php echo $row->branch_address; ?></td>
                                                               
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
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header"  style="background-color: green;color:white">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <center><strong><h4><i class='fa fa-trophy' aria-hidden='true'></i> Branch Form</h4></strong></center>
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

                    <?= form_open_multipart('branch/branch_controller/create_branch') ?>
                   
                       <div class="form-group row">
                           
                            <label for="branch_name" class="col-sm-3 col-form-label">
                            <?php echo display('branch_name') ?></label>
                            <div class="col-sm-9">
                            <input type="text" name="branch_name" placeholder="<?php echo display('branch_name') ?>" class=" form-control">
                               
                            </div>
                           
                        </div>
                        <div class="form-group row">
                           
                            <label for="branch_code" class="col-sm-3 col-form-label">
                            <?php echo display('branch_code') ?></label>
                            <div class="col-sm-9">
                            <input type="text" name="branch_code" placeholder="<?php echo display('branch_code') ?>" class=" form-control" id="branch_code">
                               
                            </div>
                           
                        </div>
                         <div class="form-group row">
                           
                            <label for="branch_address" class="col-sm-3 col-form-label">
                            <?php echo display('branch_address') ?></label>
                            <div class="col-sm-9">
                          
                             <textarea  name="branch_address" placeholder="<?php echo display('branch_address') ?>" class=" form-control"></textarea>
                               
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
    </div>
     
            </div>
            <div class="modal-footer">

            </div>

        </div>

    </div>



 <script language="javascript"> 

 $(function(){
        $("#date").datepicker({ dateFormat:'yy-mm-dd' });
        $("#end_date").datepicker({ dateFormat:'yy-mm-dd' }).bind("change",function(){
            var minValue = $(this).val();
            minValue = $.datepicker.parseDate("yy-mm-dd", minValue);
            minValue.setDate(minValue.getDate());
            $("#end_date").datepicker( "option", "minDate", minValue );
        })
    });
    </script>