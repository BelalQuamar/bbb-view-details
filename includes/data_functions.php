<?php
error_reporting(E_ALL);
include 'config.php';
include 'Medoo.php';

//for all page data
if(empty($pageid))
{
    $execdb = $dynamic_pages_db;
    $pageid = $_GET["pageid"];
}
else{
    $execdb = $static_pages_db;
}
$init_data_output = $db->select($execdb, array('value', 'data_id'),array('AND' => ['active' => 1,'page' => $pageid]));
$data_output = array();
for ($iter = 0;$iter < sizeof($init_data_output);$iter++)
{
    $data_output[($init_data_output[$iter]['data_id'])] = $init_data_output[$iter]['value'];
}

//for footer data 
$init_data_output_footer = $db->select($static_pages_db, array('value', 'data_id'),array('AND' => ['active' => 1,'page' => 8]));
$data_output_footer = array();
for ($iter_footer = 0;$iter_footer < sizeof($init_data_output_footer);$iter_footer++)
{
    $data_output_footer[($init_data_output_footer[$iter_footer]['data_id'])] = $init_data_output_footer[$iter_footer]['value'];
}

function sanitize_POST($htname)
{
  return mysqli_real_escape_string($_POST[$htname]);
}

//include a file as named for custom page functions
include "page_func/func_".basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']);


//page name function
$page_name_for_dynamic_init = $db->select($dynamic_page_list_db, array('name','type','parent_id'),array('AND' => ['active' => 1,'id' => $_GET["pageid"]]));
$page_type_for_dynamic = $page_name_for_dynamic_init[0]['type'];
$page_name_for_dynamic = $page_name_for_dynamic_init[0]['name'];

$parent_name_for_dynamic_child_project = $page_name_for_dynamic_init[0]['parent_id'];
if($page_type_for_dynamic == 2)
{
    $parent_name_for_dynamic_child_init = $db->select($dynamic_page_list_db, array('name'),array('AND' => ['active' => 1,'id' => $parent_name_for_dynamic_child_project]));
    $parent_project_name = $parent_name_for_dynamic_child_init[0]['name'];
}

if($page_type_for_dynamic == 3)
{
    $parent_name_for_dynamic_child_init = $db->select($dynamic_page_list_db, array('name','parent_id'),array('AND' => ['active' => 1,'id' => $parent_name_for_dynamic_child_project]));
    $parent_project_name = $parent_name_for_dynamic_child_init[0]['name'];

    $grandfather_name = $db->select($dynamic_page_list_db, array('name'),array('AND' => ['active' => 1,'id' => $parent_name_for_dynamic_child_init[0]['parent_id']]));
    $grandfather_name = $grandfather_name[0]['name'];
}

//$arr = get_defined_vars();
//print_r($arr);
//echo $parent_name_for_dynamic_child_project;

//switch case for page name
switch ($page_type_for_dynamic) {
    case 0:
        $page_name_for_dynamic = "Services -> ".$page_name_for_dynamic;
        break;
    case 1:
        $page_name_for_dynamic = "Product -> ".$page_name_for_dynamic;
        break;
    case 2:
        $page_name_for_dynamic = "Product -> ".$parent_project_name." -> ".$page_name_for_dynamic;
        break;
    case 3:
        $page_name_for_dynamic = "Product -> ".$grandfather_name." -> ".$parent_project_name." -> ".$page_name_for_dynamic;
        break;
    default:
        $page_name_for_dynamic = "NA";
}
