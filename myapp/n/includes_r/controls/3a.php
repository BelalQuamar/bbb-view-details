<?php
$courses = gettable($moodle_course,'id,fullname');
$userss = gettable($moodle_users,'id,firstname');
$role_list = gettable($moodle_role_list,'id,shortname');
$roles = gettable($moodle_roles,'roleid,userid,timemodified');
$all_details = gettable($moodle_main_log,'target,action,courseid,userid,timecreated,origin');
//printer($role_list);
$page_name = "Course Activity"; 
$cnt = 0;
foreach ($all_details as $key => $ptable){
	$all_details[$key]['sno'] = ($cnt + 1);
	$all_details[$key]['course'] = replaca($courses,$all_details[$key]['courseid'],"id","fullname");
	$all_details[$key]['user'] = replaca($userss,$all_details[$key]['userid'],"id","firstname");
	$all_details[$key]['Action performed'] = $all_details[$key]['action'];
	$all_details[$key]['Target'] = $all_details[$key]['target'];
	$all_details[$key]['Data Origin'] = $all_details[$key]['origin'];
	
	
//	$all_details[$key]['roles'] = replaca($role_list,$all_details[$key]['roleid'],"id","shortname");
//	$all_details[$key]['action'] = $all_details[$key]['log'];
//	$all_details[$key]['role'] =((replaca($roles,$all_details[$key]['userid'],"userid","roleid")) == 3 ? "Teacher" : " Student");
	$all_details[$key]['date'] = date('Y-m-d',$all_details[$key]['timecreated']);
	$all_details[$key]['time'] = date('h:i:s',$all_details[$key]['timecreated']);
	unset($all_details[$key]['timecreated']);
//	unset($all_details[$key]['roleid']);
	unset($all_details[$key]['userid']);
	unset($all_details[$key]['courseid']);
	unset($all_details[$key]['action']);
	unset($all_details[$key]['origin']);
	unset($all_details[$key]['target']);

	$cnt++;
}
