<?php
//error level
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//for image folder
$img_link = "img/";

//db prelude
$db_prelude = "";

//moodle prelude
$moodle_prelude = "mdl_";

//db names weberp
$dynamic_pages_db = $db_prelude.'dynamic_page_details';
$static_pages_db = $db_prelude.'all_details';
$blog_db = $db_prelude.'blog_details';
$dynamic_page_list_db = $db_prelude.'page_list';
$user_list_db = $db_prelude.'users';
$email_sub = $db_prelude.'email_subscriber';
$contact_db = $db_prelude.'enquiries';
$static_page_list = $db_prelude.'static_page_list';

//db names  moodle
$moodle_bigbluebuttonlogs = $moodle_prelude."bigbluebuttonbn_logs";
$moodle_bigbluebutton = $moodle_prelude."bigbluebuttonbn";
$moodle_users = $moodle_prelude."user";
$moodle_course = $moodle_prelude."course";
$moodle_roles = $moodle_prelude."role_assignments";

//db details-weberp
$weberp_db_type = 'mysql';
$weberp_db_name = 'weberp';
$weberp_db_server = 'localhost';
$weberp_db_username = 'root';
$weberp_db_password = '1/2done1/2LEFT';

//db details-moodle 1
$moodle_db_type = 'mysql';
$moodle_db_name = 'moodle';
$moodle_db_server = 'localhost';
$moodle_db_username = 'root';
$moodle_db_password = '1/2done1/2LEFT';


//db details-moodle 1
// $moodle_db_type = 'mysql';
// $moodle_db_name = 'mdemo';
// $moodle_db_server = '202.137.228.103';
// $moodle_db_username = 'root';
// $moodle_db_password = 'mgrm@4321$#$';



//security
//$cryp_salt = '6C7Vukzjje8qkq54eSGOpuWZcp3ZIzy';
//$cryp_method = "aes-256-cbc";
//$cryp_length = openssl_cipher_iv_length($method);
//$cryp_iv = openssl_random_pseudo_bytes($length);

//blog
$no_of_news_per_page_in_blog = 6;

//timezone
date_default_timezone_set("Asia/Kolkata");


//locations

$admin_application_folder = '/bbb/myapp/admin/includes';