<?php 
include "data_functions.php"; 
$all_details = $db_moodle->select($moodle_bigbluebuttonlogs, array('id', 'courseid', 'bigbluebuttonbnid','userid','timecreated','meetingid','log','meta'), array("ORDER" => ["courseid"=>"ASC", "id"=>"ASC" ]));
$courses = $db_moodle->select($moodle_course, array('id','fullname'));
$userss = $db_moodle->select($moodle_users, array('id','firstname'));
$roles = $db_moodle->select($moodle_roles, array('roleid','userid'));
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
$returnarr = array();
                $sno_counter = 1;
				if($all_details)
				{
					foreach ($all_details as $all_detailss)
					{					
		array_push($returnarr[$sno_counter - 1],$sno_counter);
		array_push($returnarr[$sno_counter - 1] ,replaca($courses,$all_detailss['courseid'],"id","fullname"));
		array_push($returnarr[$sno_counter - 1] ,replaca($userss,$all_detailss['userid'],"id","firstname"));
		array_push($returnarr[$sno_counter - 1] ,$all_detailss['log']);
		array_push($returnarr[$sno_counter - 1] ,((replaca($roles,$all_detailss['userid'],"userid","roleid")) == 3 ? "Teacher" : " Student"));
		array_push($returnarr[$sno_counter - 1] ,date('Y-m-d',$all_detailss['timecreated']));
		array_push($returnarr[$sno_counter - 1] ,date('h:i:s',$all_detailss['timecreated']));
		
				$sno_counter++; }}
				
echo "<pre>";print_r($returnarr);