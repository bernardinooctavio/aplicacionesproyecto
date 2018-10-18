<?php
namespace AppData\Config;
class Enrutador
{
    public static function run(Request $request)
    {
        $controlador = $request->getControlador() . "Controller";
        $ruta = ROOT . "AppData" . DS . "Controller" . DS . $controlador . ".php";
        //echo $ruta;
        $metodo = $request->getMetodo();
        $argumento = $request->getArgumento();
        if (is_readable($ruta)) {
            require_once($ruta);
            $mostrar = "AppData\\Controller\\" . $controlador;
            $controlador = new $mostrar;
            if (!isset($argumento)) {
                $datos = call_user_func(array($controlador, $metodo));
            } else {
              if(is_callable(array($controlador,$metodo)))
                $datos = call_user_func(array($controlador, $metodo), $argumento);
            }
        }
        $ruta=ROOT."Views".DS.$request->getControlador().DS.$request->getMetodo().".php";
        if(is_readable($ruta)){
          if(empty($_POST)){
            require_once $ruta;
          }
        }
        else {
          echo "Ruta no encontrada";
        }
    }
}
