<div class="row">
    <!--  table area -->
    <div class="col-sm-12">

        <div class="panel panel-default thumbnail"> 
	
            <div class="panel-body">
                <table width="100%" class="datatable table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                <!-- 1 -->	<th><?php echo display('cid') ?></th>
                <!-- 2 -->	<th>Employee name</th>
                <!-- 3 -->	<th>Name of father/husband</th>
                <!-- 4 -->	<th>Sex</th>
                <!-- 5 -->  <th>Date of Birth</th>
                <!-- 6 -->  <th>Designation</th>
                <!-- 7 -->  <th>Designation code/ grade as in Government Order</th>
                <!-- 8 -->  <th>Date of joining</th>
                <!-- 9 -->  <th>Mobile Number</th>
                <!-- 10 -->	<th>E-mail ID</th>
                <!-- 11 --> <th>Bank Name</th>
                <!-- 12 --> <th>IFSC Code</th>
                <!-- 13 --> <th>Bank Account Number</th>
                <!-- 14 -->	<th>Days of attendance</th>
                <!-- 15 -->	<th>Loss of pay days</th>
                <!-- 16 -->	<th>Number of weekly off granted</th>
                <!-- 17 -->	<th>Number of Leave granted</th>
                <!-- 18 -->	<th>Basic</th>
                <!-- 19 --> <th>DA</th>
                <!-- 20 --> <th>HRA</th>
                <!-- 21 --> <th>CA</th>                    
                <!-- 22 --> <th>Gross Monthly Wages</th>
                <!-- 23 -->	<th>Overtime wages</th>
                <!-- 24 -->	<th>Leave wages</th>
                <!-- 25 -->	<th>National & Festival Holidays wages</th>
                <!-- 26 -->	<th>Arrear paid</th>
                <!-- 27 -->	<th>Bonus</th>
                <!-- 28 -->	<th>Maternity Benefit</th>
                <!-- 29 -->	<th>Advance</th>
                <!-- 30 -->	<th>Total Amount</th>
                <!-- 31 -->	<th>Employees Provident Fund</th>
                <!-- 32 -->	<th>Employees State Insurance</th>
                <!-- 33 --> <th>Welfare Fund</th>
                <!-- 34 --> <th>Professional Tax</th>
                <!-- 35 --> <th>Tax Deductedat Source</th>
                <!-- 36 --> <th>Deduction of Fine</th>
                <!-- 37 --> <th>Deduction  for  Loss & Damages</th>
                <!-- 38 --> <th>Other Deduction</th>
                <!-- 39 --> <th>Total Deduction</th>
                <!-- 40 --> <th>Net wages paid</th>
                <!-- 41 --> <th>Date of payment</th>
                <!-- 42 --> <th>Remarks</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($emp_sl_setup)) { ?>
                            <?php $sl = 1; ?>
                            <?php foreach ($emp_sl_setup as $que) {
								$leave_wages = ( $que->gross_salary / $que->num_days_n_month) * $que->adj_leave ;
								$gender = '';
								if($que->gender == 1 )
								{
									$gender = "Male";
								}elseif($que->gender == 0)
								{
									$gender = "Female";
								}
								else
								{
									$gender = "";
								}
								?>
							
							
                                <tr class="<?php echo ($sl & 1)?"odd gradeX":"even gradeC" ?>">
				<!-- 1 -->	    <td><?php echo $sl; ?></td>
				<!-- 2 -->      <td><?php echo $que->first_name.' '.$que->		last_name ;?> </td>
                <!-- 3 -->      <td><?php echo $que->dob; ?></td>
                <!-- 4 -->      <td><?php echo $gender; ?></td>
                <!-- 5 -->      <td><?php echo $que->maiden_name; ?></td>
                <!-- 6 -->      <td><?php echo $que->position; ?></td>
                <!-- 7 -->      <td><!-- Designation code/ grade as in Government Order --></td>
                <!-- 8 -->      <td><?php echo $que->hire_date; ?></td>
                <!-- 9 -->      <td><?php echo $que->phone; ?></td>
                <!-- 10-->      <td><?php echo $que->email; ?></td>
                <!-- 11-->      <td><?php echo $que->bank_name; ?></td>
                <!-- 12-->      <td><?php echo $que->ifsc; ?></td>
                <!-- 13-->      <td><?php echo $que->account_no; ?></td>
                <!-- 14-->      <td><?php echo $que->present_days; ?></td>
                <!-- 15-->      <td><?php echo $que->d_leave; ?></td>
                <!-- 16-->      <td><?php echo $que->weekly_off_granted; ?></td>
                <!-- 17-->      <td><?php echo $que->adj_leave; ?></td>
                <!-- 18-->      <td><?php echo $que->basic; ?></td>
                <!-- 19-->      <td><?php //echo $que->basic; ?></td>
                <!-- 20-->      <td><?php echo $que->hra; ?></td>
                <!-- 21-->      <td><?php echo $que->ca; ?></td>  
                <!-- 22-->      <td><?php echo $que->basic; ?></td>
                <!-- 23-->      <td><!--Overtime wages--></td>
                <!-- 24-->      <td><?php echo $leave_wages;  ?></td>
                <!-- 25-->      <td></td>
                <!-- 26-->      <td><?php //echo $que->pf ; ?></td>
                <!-- 27-->      <td><?php //echo $que->esi ; ?></td>
                <!-- 28-->      <td><?php //echo $que->advance ; ?></td>
                <!-- 29-->      <td><?php echo $que->advance ; ?></td>
                <!-- 30-->      <td><?php echo $que->earned_salary ; ?></td>
                <!-- 31-->      <td><?php echo $que->pf ; ?></td>
                <!-- 32-->      <td><?php echo $que->esi ; ?></td>
                <!-- 33-->      <td><?php //echo $que->employer_pf ; ?></td>
                <!-- 34-->      <td><?php //echo $que->employer_esi ; ?></td>
                <!-- 35-->      <td><?php //echo $que->ta ; ?></td>
                <!-- 36-->      <td><?php //echo $que->net_salary ; ?></td>
                <!-- 37-->      <td><?php //echo $que->net_salary ; ?></td>
                <!-- 38-->      <td><?php //echo $que->net_salary ; ?></td>
                <!-- 39-->      <td><?php echo $que->total_deductions ; ?></td>
                <!-- 40-->      <td><?php echo $que->net_salary ; ?></td>
                <!-- 40-->      <td><?php //echo $que->net_salary ; ?></td>
                <!-- 40-->      <td><?php //echo $que->net_salary ; ?></td>
                                                                
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
 
 