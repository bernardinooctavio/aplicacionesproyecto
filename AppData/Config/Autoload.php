<?php
namespace AppData\Config;
class Autoload
{

         public static function run()
            {
                spl_autoload_register(function($class)
                {
                    $ruta=str_replace("\\",'/',$class).'.php';
                    require_once ($ruta);
                });
            }
        

}
