<?php include "header.php"; 
$page_link = $_GET['p'];
if (empty($page_link)) {
  $page_link = "vcr";
}

include "controls/".$page_link.".php";
?>
	<p class="h1"><?=$page_name?></p>
	<table id="sorted" class="table table-striped table-bordered">
<thead><tr>
	<?php 
	foreach ($all_details[0] as $key => $value){
		echo "<th>".$key."</th>";
	}
	?>
		</tr>	</thead>
				<?php
				foreach ($all_details as $all_detailss){
					?>
					<tr>
<?php foreach ($all_detailss as $key => $value ){
	echo "<td>".$value."</td>";
} ?>					
</tr>
					<?php } ?>
					</table>
					<?php 
include "footer.php";?>
				
