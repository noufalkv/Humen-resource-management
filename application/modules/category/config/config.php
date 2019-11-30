<?php
// module directory name
$HmvcConfig['category']["_title"]     = "Category Details ";
$HmvcConfig['category']["_description"] = "Category info";


// register your module tables
// only register tables are imported while installing the module
$HmvcConfig['category']['_database'] = true;
$HmvcConfig['category']["_tables"] = array( 
	'category',
	
	  
);
