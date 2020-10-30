<?php 
require_once __DIR__ .'/config.php';
//require_once __DIR__ .'/Medoo.php';
require_once __DIR__ .'/Medoo_moodle.php';

$page_id = $_GET['pageid'];

function is_logged_in()
{
    if ($_COOKIE["log_check"] == sha1($salt.date('j').$_COOKIE["check_id"]))
    {
        return TRUE;
    }
    else{
        return FALSE;
    }
}

function return_file_list($extension)
{
    $ret_value = array();
    foreach (glob("../../img/*.".$extension) as $filename) {
        $ret_value[] = substr($filename, 10);
        
    }
    return $ret_value;
}

function file_type($filetype)
{

    switch ($filetype) {
        case '1':
            return "Text";
            break;
        case '2':
            return "Image";
            break;
        case '3':
            return "Video";
            break;
        case '4':
            return "Excel";
            break;
        case '5':
            return "Pdf";
            break;    
        default:
            return "undefined";
            break;
    }
}

function replaca($arraylist, $valuetorep,$idname,$replaarrayval)
{
	$out = "";
	foreach($arraylist as $newarray)
	{
		if($valuetorep == $newarray[$idname])
		{
			$out = $newarray[$replaarrayval];
		}
	}
	return $out;
}
?>