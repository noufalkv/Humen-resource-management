<?php
// module directory name
$HmvcConfig['branch']["_title"]     = "Branch Details ";
$HmvcConfig['branch']["_description"] = "Simple Branch";


// register your module tables
// only register tables are imported while installing the module
$HmvcConfig['branch']['_database'] = true;
$HmvcConfig['branch']["_tables"] = array( 
	'branch',
 
);
