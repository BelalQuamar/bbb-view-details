<?php
//for image folder
$img_link = "img/";

//db prelude
$db_prelude = "";

//db names
$dynamic_pages_db = $db_prelude.'dynamic_page_details';
$static_pages_db = $db_prelude.'all_details';
$blog_db = $db_prelude.'blog_details';
$dynamic_page_list_db = $db_prelude.'page_list';
$user_list_db = $db_prelude.'users';
$email_sub = $db_prelude.'email_subscriber';
$contact_db = $db_prelude.'enquiries';
$static_page_list = $db_prelude.'static_page_list';

//db details
$weberp_db_type = 'mysql';
$weberp_db_name = 'u860697031_weberp';
$weberp_db_server = 'localhost';
$weberp_db_username = 'u860697031_weberp';
$weberp_db_password = '1/2done1/2LEFT';

//security
$cryp_salt = '6C7Vukzjje8qkq54eSGOpuWZcp3ZIzy';
$cryp_method = "aes-256-cbc";
$cryp_length = openssl_cipher_iv_length($method);
$cryp_iv = openssl_random_pseudo_bytes($length);

//blog
$no_of_news_per_page_in_blog = 6;

//timezone
date_default_timezone_set("Asia/Kolkata");


//locations

$admin_application_folder = '/mqs/admin';