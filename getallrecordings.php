<?php
header('Content-Type: text/xml');
include("common.php");
$api_name = 'getRecordings';
$api_param = '';
$checksum = sha1($api_name.$api_param.$sharedsecret);
$req_link = $link.$api_name."?".$api_param."&checksum=".$checksum;
$response = file_get_contents($req_link);
//$response = simplexml_load_string($response);
//$response = json_encode($response);
//$response = json_decode($response, true);
//echo "<pre>";
//print_r($response['returncode']);
//echo "<br>----------------------------------------------------------------------------------</br>";
echo $response;
//echo "</pre>";
