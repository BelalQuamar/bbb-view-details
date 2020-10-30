<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

date_default_timezone_set("Asia/Kolkata");

$moodle_prelude = "mdl_";

$moodle_bigbluebuttonlogs = $moodle_prelude."bigbluebuttonbn_logs";
$moodle_bigbluebutton = $moodle_prelude."bigbluebuttonbn";
$moodle_users = $moodle_prelude."user";
$moodle_course = $moodle_prelude."course";
$moodle_roles = $moodle_prelude."role_assignments";
$moodle_role_list = $moodle_prelude."role";
$moodle_main_log = $moodle_prelude."logstore_standard_log";

$admin_application_folder = '/bbb/myapp/n/includes_r';

$page_list = array("Virtual class report"=>"vcr",
					"Teachers/Students"=>"1a", 
					"Course Activity" => "3a");

$teacherid = 3;
function gettable($tablename,$valsneeded,$api_l = 'http://202.137.228.103/ahlstg-mstarlsp-com/rss/core/index.php?table='){
	$link = $api_l.$tablename.'&columns='.$valsneeded;
	$all_details = file_get_contents($link);
	$all_details = json_decode($all_details);
	$all_details = json_decode(json_encode($all_details), true);
		return $all_details;
}

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

function printer($array)
{
	echo "<pre>";
	if(is_array($array))
	{
	print_r($array);		
	}
	else
	{
		print($array);
	}
	echo "</pre>";
}
?>