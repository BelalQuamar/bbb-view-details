<?php
$all_details = gettable($moodle_bigbluebuttonlogs.'1','id,courseid,bigbluebuttonbnid,userid,timecreated,log');
$courses = gettable($moodle_course,'id,fullname');
$userss = gettable($moodle_users,'id,firstname');
$roles = gettable($moodle_roles,'roleid,userid');
$page_name = "Virtual class report"; 
$roles_new = array();
$cnt = 0;
$roles = array_unique($roles, SORT_REGULAR);
foreach($roles as $roles_arr)
{
	foreach($roles as $roles_arr2)
	{
		if($roles_arr['userid'] == $roles_arr2['userid'])
		{
			if($roles_arr['roleid'] > $roles_arr2['roleid'])
			{
				unset($roles[$cnt]);
			}
		}
	}
	$cnt++;
}
$cnt = 0;
foreach ($all_details as $key => $ptable){
	$all_details[$key]['sno'] = ($cnt + 1);
	$all_details[$key]['course'] = replaca($courses,$all_details[$key]['courseid'],"id","fullname");
	$all_details[$key]['user'] = replaca($userss,$all_details[$key]['userid'],"id","firstname");
	$all_details[$key]['action'] = $all_details[$key]['log'];
	$all_details[$key]['role'] =((replaca($roles,$all_details[$key]['userid'],"userid","roleid")) == $teacherid ? "Teacher" : " Student");
	$all_details[$key]['date'] = date('Y-m-d',$all_details[$key]['timecreated']);
	$all_details[$key]['time'] = date('h:i:s',$all_details[$key]['timecreated']);
	unset($all_details[$key]['id']);
	unset($all_details[$key]['bigbluebuttonbnid']);
	unset($all_details[$key]['timecreated']);
	unset($all_details[$key]['courseid']);
	unset($all_details[$key]['userid']);
	unset($all_details[$key]['log']);
	$cnt++;
}
