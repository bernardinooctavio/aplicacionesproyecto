<?php header("Content_type: text/html;charset=utf8");?>
<?php
	define('DS',DIRECTORY_SEPARATOR);
	define('ROOT',realpath(dirname(__FILE__)).DS);
	define('URL',"http://localhost/aplicacionesproyecto/");
	require_once ("AppData/Config/Autoload.php");
	\AppData\Config\Autoload::run();
	if(!isset ($_SERVER [" HTTP_X_REQUESTED_WITH "])&&(isset($_GET['url'])?!((stristr($_GET ['url'],'impresión'))&&(stristr($_GET['url'],'pdf'))):true ))
      Views \ Template :: header ();
			views\Template::nav();

    AppData \ Config \ Enrutador :: run ( new  AppData \ Config \ Request ());

    views\Template::footer();
?>
