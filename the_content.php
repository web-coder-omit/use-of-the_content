<?php
/**
*Plugin Name: practice 
*Plugin URI: https://wordpress.org
*Description:This is my first plugin.
*Version: 1.0
*Author: Md. Omit Hasan
*Author URI: https://google.com
*License: GPLv2 or Later
*Text Domain: pp
*Domain Path:/langurages/
*/
function wordcount_load_textdomain(){
    load_plugin_textdomain( 'word-count',false,dirname(__FILE__)."/languages");
};
add_action("plugins_loaded",'wordcount_load_textdomain');


function pp_functioon($content){
   
    $constomr_message = $content;
    $pp_uppercase = strtoupper($constomr_message);
    $uppercase_title = "There are shown the uppercse text";
    $content .= sprintf('<h1>%s: %s</h1>',$uppercase_title,$pp_uppercase);
    return $content;

}
add_filter('the_content','pp_functioon');


?>
