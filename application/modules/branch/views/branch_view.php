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
                                <td><?php   $text=$row->branch_code;

                                     $pieces = substr($text, 0, 20);
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

                                ?></td>
                                <td><?php echo $row->branch_address; ?></td>
                                
                                                           
                                   <td class="center">
                                  
                                    <?php if($this->permission->method('branch','update')->access()): ?>
                                        <a href="<?php echo base_url("branch/Branch_controller/update_branch_form/$row->branch_id") ?>" class="btn btn-xs btn-success"><i class="fa fa-pencil"></i></a>
                                        <?php endif; ?>
                                    
                                    <!--<?php if($this->permission->method('branch','delete')->access()): ?>  
                                        <a href="<?php echo base_url("branch/Branch_controller/delete_branch/$row->branch_id") ?>" class="btn btn-xs btn-danger" onclick="return confirm('<?php echo display('are_you_sure') ?>') "><i class="fa fa-close"></i></a>
                                         <?php endif; ?> -->
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
 