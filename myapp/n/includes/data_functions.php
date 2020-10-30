<?php 

//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);
date_default_timezone_set("Asia/Kolkata");
$moodle_prelude = "mdl_";
$moodle_bigbluebuttonlogs = $moodle_prelude."bigbluebuttonbn_logs";
$moodle_bigbluebutton = $moodle_prelude."bigbluebuttonbn";
$moodle_users = $moodle_prelude."user";
$moodle_course = $moodle_prelude."course";
$moodle_roles = $moodle_prelude."role_assignments";
$moodle_db_type = 'mysql';
$moodle_db_name = 'moodle';
$moodle_db_server = 'localhost';
$moodle_db_username = 'root';
$moodle_db_password = '1/2done1/2LEFT';
$admin_application_folder = '/bbb/myapp/n/includes';
require_once __DIR__ .'/dki.php';

function replaca($arraylist, $valuetorep,$idname,$replaarrayval)
{
	$out = "";
	foreach($arraylist as $newarray)
	{
		if($valuetorep == $newarray[$idname])
		{
			$out = $newarray[$replaarrayval];
		}
	}
	return $out;
}
?>