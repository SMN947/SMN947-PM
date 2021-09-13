<?php
    function dep($data) {
        $format = print_r("<pre>");
        $format .= print_r($data);
        $format .= print_r("</pre>");
        return $format;
    }

    function strClean($str) {
        return $str;
    }

    function passGenerator($len = 20) {
        $pass = "";
        $prefab = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvxyz0123456789";
        for($i=1;$i<$len;$i++) {
            $pos = rand(0, strlen($prefab)-1);
            $pass .= substr($prefab, $pos, 1);
        }
        return $pass;
    }

    function tokenGenerator() {
        $r1 = bin2hex(random_bytes(10));
        $r2 = bin2hex(random_bytes(10));
        $r3 = bin2hex(random_bytes(10));
        $r4 = bin2hex(random_bytes(10));
        $tkn = $r1.'-'.$r2.'-'.$r3.'-'.$r4;
        return $tkn;
    }

    function load_template($section = "", $data) {
        $view = "Views/Template/".$section.".php";
        require_once($view);
    }

    function JsPrint($text) {
        echo "<script>console.log('".$text."')</script>";
    }