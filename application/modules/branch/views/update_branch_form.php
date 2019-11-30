      <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="panel">
                <div class="panel-heading">
                    <div class="panel-title">
                       <h4><?php echo (!empty($title)?$title:null) ?></h4>
                    </div>
                </div>
                <div class="panel-body">

                <?= form_open('branch/Branch_controller/update_branch_form/'. $data->branch_id) ?>
                

                    <input name="branch_id" type="hidden" value="<?php echo $data->branch_id ?>">
                    <div class="form-group row">
                           
                            <label for="branch_name" class="col-sm-3 col-form-label">
                            <?php echo display('branch_name') ?></label>
                            <div class="col-sm-9">
                            <input type="text" name="branch_name" class=" form-control" value="<?php echo $data->branch_name ?>">
                               
                            </div>
                           
                        </div>

                        <div class="form-group row">
                           
                            <label for="branch_code" class="col-sm-3 col-form-label">
                            <?php echo display('branch_code') ?></label>
                            <div class="col-sm-9">
                            <textarea  name="branch_code" class=" form-control"><?php echo $data->branch_code ?></textarea>
                               
                            </div>
                           
                        </div>

                         <div class="form-group row">
                           
                            <label for="branch_address" class="col-sm-3 col-form-label">
                            <?php echo display('branch_address') ?></label>
                            <div class="col-sm-9">
                            <input type="text" name="branch_address" class=" form-control" id="branch_address" value="<?php echo $data->branch_address ?>">
                               
                            </div>
                           
                        </div>
                     
                         
                        <div class="form-group text-right">
                            
                            <button type="submit" class="btn btn-success w-md m-b-5"><?php echo display('update') ?></button>
                        </div>

                    <?php echo form_close() ?>


                </div>  
            </div>
        </div>
    </div>


     
 <script language="javascript"> 

 $(function(){
        $("#notice_date").datepicker({ dateFormat:'yy-mm-dd' });
        $("#end_date").datepicker({ dateFormat:'yy-mm-dd' }).bind("change",function(){
            var minValue = $(this).val();
            minValue = $.datepicker.parseDate("yy-mm-dd", minValue);
            minValue.setDate(minValue.getDate());
            $("#end_date").datepicker( "option", "minDate", minValue );
        })
    });


    </script>