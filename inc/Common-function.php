<?php 



/**
 * Function to effectively Dump Data
 */

function dd($arr){
	echo '<pre style="background-color:black;color:#fff;">';
	print_r($arr);
	echo '</pre>';
}

function scetionTitleFormatter($title){
    $title_arr = explode('<br>',$title);
    $title_string = '<span>'. $title_arr[0] . '</span><span class="gold">' . $title_arr[1] . '</span>';
    return $title_string;
}