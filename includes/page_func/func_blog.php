<?php

//for blog data 
$data_output_blog = $db->select($blog_db, array('id','addedby','active_stamp', 'title', 'value', 'photo1', 'photo2'),array('AND' => ['active' => 1]));
$size_data_output_blog = sizeof($data_output_blog);
$paginator_size_data_output_blog = $size_data_output_blog/$no_of_news_per_page_in_blog;
$ceil_paginator_size_data_output_blog = ceil($paginator_size_data_output_blog);
$blog_pageid = $_GET["pid"];
if(empty($blog_pageid))
{
   $blog_pageid = 1 ;
}

//to get user Name

for ($blog_name_footer = 0;$blog_name_footer < sizeof($data_output_blog);$blog_name_footer++)
{
   $username = $db->select($user_list_db, array('name'),array('AND' => ['id' => $data_output_blog[$blog_name_footer]['addedby']]));
    $data_output_blog[$blog_name_footer]['addedby'] = $username[0]['name'];
}



