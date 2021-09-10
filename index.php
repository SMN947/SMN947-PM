<?php

    require_once("Config/config.php");
    $url = !empty($_GET['url'])?$_GET['url']:'home/home';
    $arrUrl = explode("/", $url);
    $controller = $arrUrl[0];
    $method = $arrUrl[0];
    $params = "";

    if(!empty($arrUrl[1]) && $arrUrl[1] != "") {
        $method = $arrUrl[1];
    }    
    if(!empty($arrUrl[2]) && $arrUrl[2] != "") {
        for ($i=2; $i < count($arrUrl); $i++) { 
            $params .= $arrUrl[$i] . ",";
        }
        $params = trim($params, ",");
    }

    require_once("Libraries/Core/Autoload.php");
    require_once("Libraries/Core/Load.php");