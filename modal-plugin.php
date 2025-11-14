<?php
/*
* Plugin name: Dynamic Modal Pop-Up
* Description: a modal popup that changes theme and contents based on time zone. This can be added to any page via shortcode.
* Version: 1.0
* Author: Domjon24
* Author URI: https://www.dominiquekjones.com
*/

if( !defined('ABSPATH') )
{
      die('You cannot be here');
}

if( !class_exists('ModalPlugin') ) //checks if plugins already running
{
      
   
      class ModalPlugin{

            public function __construct()
                  {define('MY_PLUGIN_PATH', plugin_dir_path( __FILE__ ));

                  define('MY_PLUGIN_URL', plugin_dir_url( __FILE__ ));
            }


            public function initialize()
                  { include_once MY_PLUGIN_PATH . 'modal-plugin-function.php';
            }
      }

      $ModalPlugin = new ModalPlugin;
      $ModalPlugin->initialize();
}