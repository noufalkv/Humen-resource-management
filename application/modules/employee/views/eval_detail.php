<?php foreach ($eval as $row){
        
     
        }?>
        
        <style>
            .card-header {
  
    padding: 2px 15px;
   
}
        </style>
<div class="row">
    <div class="col-sm-12 col-md-4">
        <input type="hidden" name="employee_id" id="employee_id" value="<?php echo $row->employee_id ;?>">
        <div class="card-header">
           
            <div> <?php echo "<img src='" . base_url().$row->picture."' width=100px; height=100px; class=img-circle>";?></div>
        </div>
        <div class="card-content">
            <div class="card-content-member">
                <h4 class="m-t-0"><?php echo $row->first_name."  " .$row->last_name;?><span style="color:#F39C12"> <span class="<?php $perform = $row->total;if ($perform > 0 && $perform < 20) {
                        echo 'fa fa-star-half';
                    }else if($perform >=20) {
                        echo 'fa fa-star';
                    }else{ echo 'fa fa-star-o'; } ?>" ></span>
                    <span class="<?php if ($perform > 20 && $perform < 40) {
                        echo 'fa fa-star-half';
                    }else if($perform >=40) {
                        echo 'fa fa-star';
                    }else{ echo 'fa fa-star-o'; } ?>" ></span>
                    <span class="<?php if ($perform > 40 && $perform < 60) {
                        echo 'fa fa-star-half';
                    }else if($perform >=60) {
                        echo 'fa fa-star';
                    }else{ echo 'fa fa-star-o';} ?>"></span>
                    <span class="<?php if ($perform > 60 && $perform < 80) {
                        echo 'fa fa-star-half';
                    }else if($perform >=80) {
                        echo 'fa fa-star';
                    }else{ echo 'fa fa-star-o'; } ?>" ></span>
                    <span class="<?php if ($perform > 80 && $perform < 90) {
                        echo 'fa fa-star-half';
                    }else if ($perform ==98) {
                        echo 'fa fa-star';
                    }else{ echo 'fa fa-star-o'; } ?>"></span>

                </span></h4>
               <!-- <h5>Department: <?php// echo $row->department_name;?></h5>-->
                <p class="m-0"><i class="fa fa-mobile" aria-hidden="true"></i>
                   <?php echo $row->phone ;?></p>
               </div>
               <div class="card-content-languages">
        <div class="card-content-languages-group"></div>
                <div class="card-content-languages-group">
                   <table class="table table-hover" width="100%">
            <caption  style="text-align: center; font-size: 25px"><?php echo display('personal_information')?></caption>
                    <tr>
                        <th><?php echo display('name')?></th>
                        <td><?php echo $row->first_name." " .$row->last_name;?></td>
                    </tr>
                    <tr>
                        <th><?php echo display('phone')?></th>
                        <td><?php echo $row->phone ;?></td>
                    </tr>
                    <tr>
                        <th><?php echo display('email')?></th>
                        <td><?php echo $row->email  ;?></td>
                    </tr>
                    <tr>
                    <th><?php echo display('hire_date')?></th>
                    <td><?php echo $row->hire_date;?></td>
                     </tr>
 
            </table>

        </div>
        <div class="card-content-languages-group">
           <table class="table table-hover" width="100%">
            <caption  style="text-align: center; font-size: 25px"><?php echo "Evaluation Details";?></caption>
              <tr>
                <th><?php echo "Evaluator Name";?></th>
                <td><?php echo $row->evaluator_name;?></td>
            </tr>
            <tr>
                <th><?php echo "Date Of Evaluation";?></th>
                <td><?php echo $row->dateval;?></td>
            </tr>
            <tr>
                <th><?php echo  "Evaluation Purpose"; ?></th>
                <td><?php echo $row->eval_purpose;?></td>
            </tr>
            <tr>
                <th><?php echo  "Review Period"; ?></th>
                <td><?php echo $row->start_date;?> to <?php echo $row->end_date;?></td>
            </tr>
            
            <tr>
                <th><?php echo  "Total Marks Scored"; ?></th>
                <td style="font-size:20px;color:green"><b><?php echo $row->total;?></b></td>
            </tr>
        
</table>

</div>
</div>

</div>
</div>
<div class="col-sm-12 col-md-8">
    <div class="row">
        <div class="col-sm-12 col-md-12 rating-block" >
        <h2 style="text-align: center; font-size: 25px"><?php echo "Performance Graph";?></h2>
          <table class="table table-hover" width="100%">
            <caption  style="text-align: center; font-size: 25px"><?php echo "Performance Graph";?></caption>
                <!-- <div id="chartContainer" style="height: 300px; width: 100%;"></div>-->
                
                <div id="chart"></div>
                
         </table>      

</div>  

<div class="col-sm-12 col-md-12 rating-block" >
<caption  style="text-align: center; font-size: 25px"><?php echo "Evaluation Score";?></caption>
  <table class="table table-hover" width="100%">

<h3 style="text-align: center; font-size: 18px"><?php echo "FUNCTIONAL SKILLS";?></h3>
    
    <?php  foreach($eval as $que){?>
        <tr>
            <th style="width: 100%;"><?php echo "Quality Of Work : Score";?></th>
            <td><?php echo $que->qow_total; ?></td>
        </tr>
        <tr>
            <th style="width: 100%;"><?php echo "Work Habit : Score";?></th>
            <td><?php echo $que->wh_total; ?></td>
        </tr>

        <tr>
            <th style="width: 100%;"><?php echo "Job Knowledge : Score";?></th>
            <td><?php echo $que->jk_total; ?></td>
        </tr>
    <?php } ?>
    
</table> 
  <table class="table table-hover" width="100%">

<h3 style="text-align: center; font-size: 18px"><?php echo "INTERPERSONAL SKILLS";?></h3>
    
    <?php  foreach($eval as $que){?>
        <tr>
            <th style="width: 100%;"><?php echo "Interpersonal relations/ behaviour : Score";?></th>
            <td><?php echo $que->irb_total; ?></td>
        </tr>
        <tr>
            <th style="width: 100%;"><?php echo "Whether warning letter or showcause notice issued ? ";?></th>
            <td><?php if( $que->irb_q6 == 0) echo "No";else {echo "Yes";} ?></td>
        </tr>

<?php } ?>
    
</table>

<table class="table table-hover" width="100%">

<h3 style="text-align: center; font-size: 18px"><?php echo "LEADERSHIP SKILLS";?></h3>
    
    <?php  foreach($eval as $que){?>
        <tr>
            <th style="width: 100%;"><?php echo "Leadership : Score";?></th>
            <td><?php echo $que->leader_total; ?></td>
        </tr>
        <tr>
            <th style="width: 100%;"><?php echo "Whether warning letter or showcause notice issued ? ";?></th>
            <td><?php echo $que->wh_total; ?></td>
        </tr>

<?php } ?>
    
</table>

<table class="table table-hover" width="100%">

<h3 style="text-align: center; font-size: 18px"><?php echo "OVERALL PROGRESS";?></h3>
    
    <?php  foreach($eval as $que){?>
        <tr>
            <th style="width: 100%;"><?php echo "Employee performance and learning is unsatisfactory and is failing to improve at a satisfactory rate";?></th>
            <td><?php if( $que->op_q1 == 0) echo "No";else {echo "Yes";} ?></td>
        </tr>
        <tr>
            <th style="width: 100%;"><?php echo "Employee performance and learning is acceptable and is improving at a satisfactory rate ";?></th>
            <td><?php if( $que->op_q2 == 0) echo "No";else {echo "Yes";} ?></td>
        </tr>
         <tr>
            <th style="width: 100%;"><?php echo "Employee has successfully demonstrated outstanding overall performance ";?></th>
            <td><?php if( $que->op_q3 == 0) echo "No";else {echo "Yes";} ?></td>
        </tr>

<?php } ?>
    
</table>


<table class="table table-hover" width="100%">

<h3 style="text-align: center; font-size: 18px"><?php echo "COMMENTS";?></h3>
    
    <?php  foreach($eval as $que){?>
        <tr>
            <th style="width: 100%;"><?php echo "Final Comment ";?></th>
            <td><?php echo $que->final_comment; ?></td>
        </tr>
        <tr>
            <th style="width: 100%;"><?php echo "Recommendation";?></th>
            <td><?php echo $que->recommendation	; ?></td>
        </tr>
         

<?php } ?>
    
</table>

</div> 
</div> 
</div>
</div> 



<!--MORRIS GRAPH -->


<script>
/*Morris.Line({
 element : 'chart',
  data: [{ y: '2006', a: 100, b: 50 },
 		{ y: '2007', a: 75, b: 75 },
 		{ y: '2008', a: 50, b: 10 },
 		{ y: '2009', a: 75, b: 65 },
 		{ y: '2010', a: 50, b: 40 },
 		{ y: '2011', a: 75, b: 85 },
 		{ y: '2012', a: 100, b: 10 }],
 	xkey: 'y',
 	ykeys: ['a', 'b'],
 	labels: ['Sales', 'Cost'],
 	pointFillColors: ['#707f9b'],
 	pointStrokeColors: ['#ffaaab'],
 	lineColors: ['#f26c4f', '#00a651', '#00bff3'],
 	redraw: true
 
});*/

var months = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
Morris.Line({
 element : 'chart',
 data: [<?php $graph = substr($graph, 0, -2); echo $graph ; ?>],
 	xkey: 'm',
 	ykeys: ['a', 'b','c'],
 	labels: ['Functional Skill', 'Interpersonal Skill','Leadership Skill'],
 	pointFillColors: ['#707f9b'],
 	pointStrokeColors: ['#ffaaab'],
 	lineColors: ['#f26c4f', '#00a651', '#00bff3'],
 	redraw: true, 
 	xLabelFormat: function(x) { // <--- x.getMonth() returns valid index
    var month = months[x.getMonth()];
    return month;
  }
 
});
</script>



<!-- CANVAS CHART-->
<script>/*
window.onload = function () {
 var emp_id =  $("#employee_id").val();


var options = {
	animationEnabled: true,
	theme: "",
	title:{
		text: "Performance Evaluation Graph, 2019-20"
	},
	axisY :{
		includeZero: false,
		lineThickness: 2
	},
	toolTip: {
		shared: true
	},
	legend: {
		fontSize: 13
	},
	data: [{
		type: "spline",
		showInLegend: true,
		name: "Overall Progress",
		yValueFormatString: "#,##",
		xValueFormatString: "MMM YYYY",
		dataPoints: [
			{ x: new Date(2016, 2), y: 28000 },
			{ x: new Date(2016, 3), y: 31500 },
			{ x: new Date(2016, 4), y: 28500 },
			{ x: new Date(2016, 5), y: 30400 },
			{ x: new Date(2016, 6), y: 26900 },
			{ x: new Date(2016, 7), y: 31400 },
			{ x: new Date(2016, 8), y: 31400 },
			{ x: new Date(2016, 9), y: 31000 },
			{ x: new Date(2016, 10), y: 33000 },
			{ x: new Date(2016, 11), y: 35000 },
			{ x: new Date(2017, 0),  y: 37900 },
			{ x: new Date(2017, 1),  y: 38000 }
		]
 	},
	{
		type: "spline", 
		showInLegend: true,
		name: "Functional skills",
		yValueFormatString: "#,##",
		dataPoints: [
			{ x: new Date(2016, 2), y: 18100 },
			{ x: new Date(2016, 3), y: 15000 },
			{ x: new Date(2016, 4), y: 14000 },
			{ x: new Date(2016, 5), y: 18500 },
			{ x: new Date(2016, 6), y: 18500 },
			{ x: new Date(2016, 7), y: 21800 },
			{ x: new Date(2016, 8), y: 20000 },
			{ x: new Date(2016, 9), y: 23000 },
			{ x: new Date(2016, 10), y: 22000 },
			{ x: new Date(2016, 11), y: 24000 },
			{ x: new Date(2017, 0), y: 23000 },
			{ x: new Date(2017, 1), y: 20500 }
		]
 	},
	{
		type: "spline", 
		showInLegend: true,
		name: "Interpersonal skills",
		yValueFormatString: "#,##",     
		dataPoints: [
			{ x: new Date(2016, 2), y: 13100 },
			{ x: new Date(2016, 3), y: 8000 },
			{ x: new Date(2016, 4), y: 5400 },
			{ x: new Date(2016, 5), y: 4000 },
			{ x: new Date(2016, 6), y: 7000 },
			{ x: new Date(2016, 7), y: 7500 },
			{ x: new Date(2016, 8), y: 6200 },
			{ x: new Date(2016, 9), y: 8500 },
			{ x: new Date(2016, 10), y: 11300 },
			{ x: new Date(2016, 11), y: 12500 },
			{ x: new Date(2017, 0), y: 10500 },
			{ x: new Date(2017, 1), y: 9500 }
		]
 	},
	{
		type: "spline", 
		showInLegend: true,
		yValueFormatString: "#,##",      
		name: "Leadership skills",
		dataPoints: [
			{ x: new Date(2016, 2), y: 1900 },
			{ x: new Date(2016, 3), y: 2300 },
			{ x: new Date(2016, 4), y: 1650 },
			{ x: new Date(2016, 5), y: 1860 },
			{ x: new Date(2016, 6), y: 1200 },
			{ x: new Date(2016, 7), y: 1000 },
			{ x: new Date(2016, 8), y: 1200 },
			{ x: new Date(2016, 9), y: 4500 },
			{ x: new Date(2016, 10), y: 1300 },
			{ x: new Date(2016, 11), y: 3700 },
			{ x: new Date(2017, 0), y: 2700 },
			{ x: new Date(2017, 1), y: 2300 }
		]
	}]
};
$("#chartContainer").CanvasJSChart(options);

/*}*/
}*/
</script>

<!--<script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
<script src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>-->






