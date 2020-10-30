<?php
//$courses = gettable($moodle_course,'id,fullname');
$userss = gettable($moodle_users,'id,firstname');
$role_list = gettable($moodle_role_list,'id,shortname');
$all_details = gettable($moodle_roles,'roleid,userid,timemodified');
//printer($role_list);
$page_name = "Teachers/Students"; 
$cnt = 0;
foreach ($all_details as $key => $ptable){
	$all_details[$key]['sno'] = ($cnt + 1);
//	$all_details[$key]['course'] = replaca($courses,$all_details[$key]['courseid'],"id","fullname");
	$all_details[$key]['user'] = replaca($userss,$all_details[$key]['userid'],"id","firstname");
	$all_details[$key]['roles'] = replaca($role_list,$all_details[$key]['roleid'],"id","shortname");
//	$all_details[$key]['action'] = $all_details[$key]['log'];
//	$all_details[$key]['role'] =((replaca($roles,$all_details[$key]['userid'],"userid","roleid")) == 3 ? "Teacher" : " Student");
	$all_details[$key]['date'] = date('Y-m-d',$all_details[$key]['timemodified']);
	$all_details[$key]['time'] = date('h:i:s',$all_details[$key]['timemodified']);
	unset($all_details[$key]['timemodified']);
	unset($all_details[$key]['roleid']);
	unset($all_details[$key]['userid']);

	$cnt++;
}
