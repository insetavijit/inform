<?php
/*
    Plugin Name: inform
    Plugin URI: https://github.com/insetavijit/inform.git
    Description: A simple Clean minimalists modern wordpress plugin development workflow - seed 
    Version: 1.0.0
    Author: Avijit sarkar
    Author URI: https://github.com/insetavijit/
    License: GPLv2 or later
    Text Domain: inset
*/

defined( 'ABSPATH' ) or die( 'Get Out !' ) ;

if(file_exists( dirname( __FILE__ ) .'/vendor/autoload.php' )){
    require_once ( dirname( __FILE__ ) .'/vendor/autoload.php' );
}


define ( 'INFORM_PLUGIN_BASE_NAME' , plugin_basename( __FILE__ ));


use modules\Config\Activate ;
use modules\Config\Deactivate ;


function inform_activation (){
    Activate :: activate ();
}
function inform_deactivation (){
    Deactivate :: deactivate ();
}


register_activation_hook    ( __FILE__ , 'inform_activation' );
register_deactivation_hook  ( __FILE__ , 'inform_deactivation');


if( class_exists( 'modules\\Init') ){
    modules\Init::register_services() ;
}else{
    // print_r( Inc );
}