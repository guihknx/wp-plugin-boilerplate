<?php
/*
   Plugin Name: guihkx WP Plugin Boilerplate
   Version: 0.1
   Author: guihkx
   Author URI: http://guih.us/
   Description: This is a amazing base for your wordpress plugin!
   License: GPLv3
*/
namespace AmazingPlugin;

class My_Awesome_Plugin
{
    const PHP_EXT = '.php';
    
    public function __construct()
    {
        spl_autoload_register( array( &$this, 'bootstrap' ) );
    }


    public static function bootstrap($class)
    {
		
		$className = str_replace( '_', '.', str_replace( '\\','/', $class ) );
		$ext       = explode( '.', $className );

        switch ( strtolower( $ext[ key( array_slice( $ext, -1, 1, TRUE ) ) ] ) ) :

        	case 'controller':
        		$abs_path = 'app/controllers';
        		break;
        	case 'model' :
        		$abs_path = 'app/models';
        		break;
        	case 'view':
        		$abs_path = 'app/views';
        		break;
        	default:
        		break;

        endswitch;

        $file = plugin_dir_path(__FILE__) . $abs_path . DIRECTORY_SEPARATOR . $className . self::PHP_EXT;

       	if ( ! is_file( $file ) )
        	return;        
        
        require $file;
    }
}

$plugin_instance = new My_Awesome_Plugin();

?>