<?php
header('Content-Type: text/xml');
include("common.php");
$api_name = 'getMeetings';
$api_param = '';
$checksum = sha1($api_name.$api_param.$sharedsecret);
$req_link = $link.$api_name."?".$api_param."&checksum=".$checksum;
$response = file_get_contents($req_link);
echo $response;
