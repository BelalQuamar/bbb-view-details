<?php
//header('Content-Type: text/xml');
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
$ip_address = "202.137.229.173";
$ssh_username = "root";
$ssh_password = "MGRM@#!4321";
$command_to_run = "cd /var/log/bigbluebutton/ && ls -p | grep -v / ";
require __DIR__ . '/vendor/autoload.php';

use phpseclib\Net\SSH2;

$ssh = new SSH2($ip_address);
if (!$ssh->login($ssh_username, $ssh_password)) {
    exit('Login Failed');
}
//echo "<b>output of ".$command_to_run."</b>";
$response = $ssh->exec($command_to_run);
$response = explode("\n",$response);
//echo "<pre>".print_r($response)."</pre>";
?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>dki hitachi bbb panel!</title>
  </head>
  <body>
  <div class="row">
    <div class="col-md-8 offset-md-2">
    <p class="h1">D.K InfoSolutions Hitachi BigBlueButton panel!</h1>
	<p class="h3">List of log files</p>
	
	<?php
foreach($response as $key)
{
	echo "<p>";
	echo '<a class="btn btn-primary" href=logshowfile.php?filename='.$key.'>'.$key.'</a>';
	//echo " => ".$key;
	echo "</p>";
}
?>
</div></div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>