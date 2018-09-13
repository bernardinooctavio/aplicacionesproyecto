<?php header("Content_type: text/html;charset=utf8");?>
<?php
	define('DS',DIRECTORY_SEPARATOR);
	define('ROOT',realpath(dirname(__FILE__)).DS);
	define('URL',"http://localhost/aplicaciones/");
	require_once ("AppData/Config/Autoload.php");
	\AppData\Config\Autoload::run();
	if( ! isset ( $ _SERVER [ " HTTP_X_REQUESTED_WITH " ]) && ( isset ( $ _GET [ ' url ' ])? ! (( stristr ( $ _GET 'url ' ], ' impresión ' )) && ( stristr ( $ _GET [ ' url ' ], ' pdf ' ))): true ))
      Views \ Template :: header ();

    AppData \ Config \ Enrutador :: run ( nuevo  AppData \ Config \ Request ());
    
     if( ! isset ( $ _SERVER [ " HTTP_X_REQUESTED_WITH " ]) && ( isset ( $ _GET [ ' url ' ])? ! (( stristr ( $ _GET [ ' url ' ], ' impresión ' )) && ( stristr ( $ _GET [ ' url ' ], ' pdf ' ))): true ))
      Vistas \ Plantilla :: pie de página ();
?>