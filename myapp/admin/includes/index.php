<?php		ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

	include "header.php"; ?>
				<p class="h1">Enquiries </p>
	<table id="sorted" class="table table-striped table-bordered">
				<thead>
				<tr>
			<th>S.No</th>
			<th>Course</th>
			<th>User</th>
			<th>Action</th>
			<th>User-type</th>
			<th>Date</th>
			<th>Time</th>
				</tr>
				</thead>
				<?php

$all_details = $db_moodle->select($moodle_bigbluebuttonlogs, array('id', 'courseid', 'bigbluebuttonbnid','userid','timecreated','meetingid','log','meta'), array("ORDER" => ["courseid"=>"ASC", "id"=>"ASC" ]));
$courses = $db_moodle->select($moodle_course, array('id','fullname'));
$userss = $db_moodle->select($moodle_users, array('id','firstname'));
$roles = $db_moodle->select($moodle_roles, array('roleid','userid'));
//$roles = $db_moodle->query('SELECT roleid,userid FROM '.$moodle_roles.'WHERE roleid = (SELECT )')->fetchAll(PDO::FETCH_ASSOC);
$roles_new = array();
//echo "<pre>";print_r($roles);echo "</pre>";
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

//echo "<pre>";print_r($roles);echo "</pre>";
                $sno_counter = 1;
				if($all_details) foreach ($all_details as $all_detailss):
					?>
					<tr>
		<td><?php echo $sno_counter;?></td>
		<td><?php echo replaca($courses,$all_detailss['courseid'],"id","fullname")?></td>
		<td><?php echo replaca($userss,$all_detailss['userid'],"id","firstname")?></td>
		<td><?php echo $all_detailss['log']?></td>
		<td><?php echo ((replaca($roles,$all_detailss['userid'],"userid","roleid")) == 3 ? "Teacher" : " Student")?></td>
		<td><?php echo date('Y-m-d',$all_detailss['timecreated'])?></td>
		<td><?php echo date('h:i:s',$all_detailss['timecreated'])?></td>


						<!-- <td><a href="edit.php?id=<?php echo $all_detailss['id']?>"><i class="glyphicon glyphicon-edit"></i></a></td>
						</tr> -->
					<?php $sno_counter++; endforeach; ?>
					</table>
					<?php 

include "footer.php";?>
				