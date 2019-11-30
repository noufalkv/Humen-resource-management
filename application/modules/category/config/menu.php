<?php

// module name
$HmvcMenu["category"] = array(
    //set icon
    "icon"           => "<i class='fa fa-file' aria-hidden='true'></i>
", 

    
 //group level name
    "cat" => array(
        //menu name
       
            "controller" => "Category_controller",
            "method"     => "create_cat",
            "permission" => "create"
        
    ), 
    //group level name
   "filetrack" => array(
    "add_filetrack" => array(
        //menu name
       
            "controller" => "Filetrack_controller",
            "method"     => "filetrack_form",
            "permission" => "create"
        
    ), 
    "filetrack_list" => array(
        //menu name
       
            "controller" => "Filetrack_controller",
            "method"     => "index",
            "permission" => "read"
        
    ), 
    
   ),
 "employee_track" => array(
    "employee_file" => array(
        //menu name
       
            "controller" => "Filetrack_controller",
            "method"     => "employee_file_form",
            "permission" => "create"
        
    ),
    "employee_file_list" => array(
        //menu name
       
            "controller" => "Filetrack_controller",
            "method"     => "employee_file_list",
            "permission" => "read"
        
    ),
    ),
    
    
);
   

 