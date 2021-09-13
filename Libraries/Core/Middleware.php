<?php
    class Middleware {
        public function __construct() {
            $this->valSession();
        }

        public function valSession() {
            if(isset($_SESSION["session_status"])) {
                return true;
            }else{
                return false;
            }
        }
    }