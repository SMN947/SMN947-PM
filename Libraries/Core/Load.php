<?php
    $controllerFile = "Controllers/".$controller.".php";
    $mid = new Middleware();
    if($mid->valSession() || $method == "Login") {
        if(file_exists($controllerFile)) {
            require_once($controllerFile);
            $controller = new $controller();
            if(method_exists($controller, $method)) {
                $controller->{$method}($params);
            }else{
                require_once("Controllers/Error.php");
            }
        }else{
            require_once("Controllers/Error.php");
        }
    }else{
        $controller = "Session";
        require_once("Controllers/Session.php");
        $controller = new $controller();
        $method = "login_show";
        if(method_exists($controller, $method)) {
            $controller->{$method}($params);
        }else{
            require_once("Controllers/Error.php");
        } 
    }