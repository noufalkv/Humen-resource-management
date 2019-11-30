<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h4>
                        <a href="<?php echo base_url('asset/equipment_maping/maping_list') ?>" class="btn btn-sm btn-success" title="List"> <i class="fa fa-list"></i> <?php echo display('list') ?></a> 

                        <a href="<?php echo base_url('asset/equipment_maping/maping_form') ?>" class="btn btn-sm btn-info" title="Add"><i class="fa fa-plus"></i> <?php echo display('assign_asset') ?></a> 
                    </h4>
                </div>
            </div>
            <div class="panel-body">

                <?php echo form_open_multipart('asset/equipment_maping/maping_update') ?>
                    <div class="form-group row">
                        <label for="type" class="col-sm-2 col-form-label"><?php echo display('employee') ?>*</label>
                        <div class="col-sm-8">
                            <input type="hidden" name="old_emp_id" value="<?php echo $empselect->employee_id;?>">
                             <?php echo form_dropdown('employee_id',$employee,(!empty($empselect->employee_id)?$empselect->employee_id:null),'class="form-control" readonly') ?>

                        </div>
                        
                    </div> 
                     <div class="form-group row">
                        <div class="col-sm-10">
                              <table class="table table-bordered table-hover"  id="equipment_table">
                               <thead>
                                  <tr>
                                     <th>Equipment</th> 
                                     <th>Date</th> 
                                    
                                  </tr>
                              </thead>
                                <tbody id="equipmnet_info">
                                    
                                    <tr class="">
                                        <?php  foreach($vendorcat as $vend){ 
                                            $json_sid = $vend->equipment_id ;
                                            $sid_arr = json_decode($json_sid);?>
                                            <input type="hidden" name="id" value="<?=$vend->id?>">
                                      <td>
                                          <?php //print_r($vendorcat);?>
                                              <select name="equipment[]" class="form-control"  multiple id="equipment_id_1">  
                                                         <?php foreach($equip as $category):?>                                              
                                                         <?php $selected = in_array($category->equipment_id,$sid_arr) ? " selected " : null;?>
                                                               <option value="<?php echo $category->equipment_id ; ?>" <?php echo $selected; ?> ><?php echo $category->equipment_name ; ?>
                                                                 </option>                              
                                                             <?php endforeach?>
                                             </select>
                                             
                                             

                                        </td>
                                        <td> <input type="text" name="dates" class="form-control datepicker" value="<?php echo $vend->issue_date;?>"></td>
                                        
                                        </td>
                                        <?php }?>
                                    </tr>
                               
                                </tbody>
                            </table>
                        </div>
                    </div> 
                     
                    <div class="form-group text-right">
                        <button type="reset" class="btn btn-primary w-md m-b-5"><?php echo display('reset') ?></button>
                        <button type="submit" class="btn btn-success w-md m-b-5"><?php echo display('update') ?></button>
                    </div>
                <?php echo form_close() ?>

            </div>  
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function () {
 $(".datepicker").datepicker({
        dateFormat: "yy-mm-dd"
    }); 
});

}

</script>
