<?php

namespace Rentit;

class App {

    static function run() {

        $rutas = self::getRoutes();
        $request = new Request();
        $controller = $request->getController();
        $action = $request->getAction();

        try {
            if (in_array($controller, $rutas)) {
                $nameController = '\\Rentit\Controllers\\' . ucfirst($controller). 'Controller';
                $objCont = new $nameController($request);
                if (is_callable([$objCont, $action])) {
                    call_user_func([$objCont, $action]);
                } else {
                    call_user_func([$objCont, 'error']);
                }
            }
            else {
                throw new \Exception("Problemas de rutas");
            }
        }
        catch (\Exception $e) {
            echo $e->getMessage();

        }

    }

    static function getRoutes():Array {
        $dir = __DIR__.'/Controllers';
        $handle = opendir($dir);
        while (false != ($entry = readdir($handle))) {
            if ($entry != "." && $entry != "..") {
                $routes[] = strtolower(substr($entry, 0, -14));
            }
        }
        return $routes;
    }

}