<?php

// module name

$HmvcMenu["reports"] = array(
    //set icon
    "icon"           => "<i class='fa fa-pie-chart' aria-hidden='true'></i>

", 
    
 //group level name
    "employee_reports" => array(
        //menu name
       "demographic_report" => array(
        //menu name
       
            "controller" => "employee_controller",
            "method"     => "demographic_list",
            "permission" => "read"
        
    ), 
    /*  "posting_report" => array(
        //menu name
       
            "controller" => "employee_controller",
            "method"     => "positional_list",
            "permission" => "read"
        
    ),*/  
    /*"asset" => array(
        //menu name
       
            "controller" => "employee_controller",
            "method"     => "employee_assets",
            "permission" => "read"
        
    ),*/
   /* "benifit_report" => array(
        //menu name
       
            "controller" => "employee_controller",
            "method"     => "benifit_list",
            "permission" => "read"
        
    ),  */
    /*"custom_report" => array(
        //menu name
       
            "controller" => "employee_controller",
            "method"     => "custom_report",
            "permission" => "read"
        
    ), */           
    ), 
   "wps" => array(
        //menu name
       
            "controller" => "Report_controller",
            "method"     => "wps",
            "permission" => "read"
        
    ),
    "bonus_report" => array(
        //menu name
       
            "controller" => "Report_controller",
            "method"     => "bonus",
            "permission" => "read"
        
    ),
     "salary_and_allowance" => array(
        //menu name
       
            "controller" => "Report_controller",
            "method"     => "salary",
            "permission" => "read"
        
    ),
    "esi_report" => array(
        //menu name
       
            "controller" => "Report_controller",
            "method"     => "esi",
            "permission" => "read"
        
    )
  /*  "adhoc_report" => array(
        //menu name
       
            "controller" => "Adhoc_controller",
            "method"     => "index",
            "permission" => "read"
        
    ),    */
);



 