<?php
include "header.php"; ?>
				<p class="h1">Virtual class report</p>
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


$all_details = gettable($moodle_bigbluebuttonlogs.'1','id,courseid,bigbluebuttonbnid,userid,timecreated,meetingid,log,meta');
$courses = gettable($moodle_course,'id,fullname');
$userss = gettable($moodle_users,'id,firstname');
$roles = gettable($moodle_roles,'roleid,userid');


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
</tr>
					<?php $sno_counter++; endforeach; ?>
					</table>
					<?php 

include "footer.php";?>
				
