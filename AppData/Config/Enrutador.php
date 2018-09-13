<?php
namespace AppData\Config;
class Enrutador
{
    public static function run(Request $request)
    {
        $controlador = $request->getControlador() . "Controller";
        $ruta = ROOT . "AppData" . DS . "Controller" . DS . $controlador . ".php";
        $metodo = $request->getMetodo();
        $argumento = $request->getArgumento();
        if (is_readable($ruta)) {
            require_once($ruta);
            $mostrar = "AppData\\Controller\\" . $controlador;
            $controlador = new $mostrar;
            if (!isset($argumento)) {
                $datos = call_user_func(array($controlador, $metodo));
            } else {
                $datos = call_user_func(array($controlador, $metodo), $argumento);
            }
        }
        if ($request->getMetodo() != "modificar") {
            $ruta = ROOT . "Views" . DS . $request->getControlador() . DS . $request->getMetodo() . ".php";
            if (is_readable($ruta))
                require_once($ruta);
            else
                if ($request->getMetodo() == "eliminar" || $request->getMetodo() == "actualizar" || $request->getMetodo() == "crear") {
                    $ruta = ROOT . "Views" . DS . $request->getControlador() . DS . "tabla" . ".php";
                    if (is_readable($ruta))
                        require_once($ruta);
                    else
                        echo "Esta página no existe";
                }
        } else {
            echo(json_encode(mysqli_fetch_assoc($datos)));
        }
    }
}
