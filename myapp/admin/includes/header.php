<?php			include "data_functions.php"; ?>			<!DOCTYPE html>
			<html lang="en">
			<head>
				<meta charset="utf-8">
				<meta http-equiv="X-UA-Compatible" content="IE=edge">
				<meta name="viewport" content="width=device-width, initial-scale=1">
				<meta name="author" content="@belalquamar">
				<meta name="description" content="Admin Panel">
				<title>Medequip Admin Panel</title>
	
				<link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/cosmo/bootstrap.min.css" rel="stylesheet" integrity="sha384-h21C2fcDk/eFsW9sC9h0dhokq5pDinLNklTKoxIZRUn3+hvmgQSffLLQ4G4l2eEr" crossorigin="anonymous">
				<link rel="stylesheet" type="text/css" href="<?php echo $admin_application_folder;?>/css/style.css">
				<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.css"/>
 
				
			</head>

			<body>

			<div class="wrapper">
				<!-- Sidebar Holder -->
				<nav id="sidebar" class="bg-primary">
					<div class="sidebar-header">
						<h3>
							Medequip Admin<br>
							<i id="sidebarCollapse" class="glyphicon glyphicon-circle-arrow-left"></i>
						</h3>
						<strong>
							M<br>
							<i id="sidebarExtend" class="glyphicon glyphicon-circle-arrow-right"></i>
						</strong>
						
					</div><!-- /sidebar-header -->

					<!-- start sidebar -->
					<ul class="list-unstyled components">
						<li>
							<a href="<?php echo $admin_application_folder;?>/home.php" aria-expanded="false">
								<i class="glyphicon glyphicon-home"></i>
								Home
							</a>
						</li>
<li><a href="<?php echo $admin_application_folder;?>/static_pages"> <i class="glyphicon glyphicon-align-justify"></i>Edit Pages </a></li>
<li><a href="<?php echo $admin_application_folder;?>/dynamic_pages"> <i class="glyphicon glyphicon-asterisk"></i>Products & Services </a></li>
<li><a href="<?php echo $admin_application_folder;?>/blog"> <i class="glyphicon glyphicon-backward"></i>Blog </a></li>
<li><a href="<?php echo $admin_application_folder;?>/subscribers"> <i class="glyphicon glyphicon-scale"></i>Email Subscribers </a></li>
<li><a href="<?php echo $admin_application_folder;?>/enquiries"> <i class="glyphicon glyphicon-floppy-saved"></i>Enquiries </a></li>
<li><a href="<?php echo $admin_application_folder;?>/add_new_page"> <i class="glyphicon glyphicon-baby-formula"></i>Add New Product/Service </a></li>
<li><a href="<?php echo $admin_application_folder;?>/uploads.php"><i class="glyphicon glyphicon-upload"></i> Upload</a></li>
<li><a href="<?php echo $admin_application_folder;?>/profile"><i class="glyphicon glyphicon-user"></i> Profile</a></li>
<li><a href="<?php echo $admin_application_folder;?>/logout.php"><i class="glyphicon glyphicon-log-out"></i> Logout</a></li>

				</ul>
				
				<div>
					<p class="text-center">
					Created by <a href="https://www.belalquamar.com">belalquamar</a> &hearts;
					</p>
				</div>
			</nav><!-- /end sidebar -->

			<!-- Page Content Holder -->
			<div id="content">