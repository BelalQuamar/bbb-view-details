<?php
//header('Content-Type: text/xml');
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
$ip_address = "202.137.229.173";
$ssh_username = "root";
$ssh_password = "MGRM@#!4321";
$filename = $_GET['filename'];
$command_to_run = "cat /var/log/bigbluebutton/".$filename;//bbb-web.2020-09-10.log";
require __DIR__ . '/vendor/autoload.php';

use phpseclib\Net\SSH2;

$ssh = new SSH2($ip_address);
if (!$ssh->login($ssh_username, $ssh_password)) {
    exit('Login Failed');
}
//echo "<b>output of ".$command_to_run."</b>";
echo "<pre>".$ssh->exec($command_to_run)."</pre>";
?>