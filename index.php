<?php header("content-Type:text/html;charset=utf-8");?>
<?php
  define('DS',DIRECTORY_SEPARATOR);
  define('ROOT',realpath(dirname(__FILE__)).DS);
  define('URL',"http://localhost/GitHub/repositorio19/");
  require_once("AppData/Config/Autoload.php");
  \AppData\config\Autoload::run();
  if (!isset($_SERVER["HTPP_X_REQUEST_WITH"])&&(isset($_GET['url'])?!((stristr($_GET['url'],'print'))&&(stristr($_GET['url'],'pdf'))):true))
     Views\Template::header();
  if (!isset($_SERVER["HTPP_X_REQUEST_WITH"])&&(isset($_GET['url'])?!((stristr($_GET['url'],'print'))&&(stristr($_GET['url'],'pdf'))):true))
      Views\Template::nav();
  AppData\Config\Enrutador::run(new AppData\Config\Request());
  if (!isset($_SERVER["HTPP_X_REQUEST_WITH"])&&(isset($_GET['url'])?!((stristr($_GET['url'],'print'))&&(stristr($_GET['url'],'pdf'))):true))
     Views\Template::footer();
         # code...

 ?>
