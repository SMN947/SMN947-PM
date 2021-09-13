<?php
    class Session extends Controllers{
        public function __construct(){
            parent::__construct();
        }

        public function logout() {
            $data["page_title"] = "Logout Page";
            $data["page_path"] = "Home/Logout";
            $this->views->getView($this, "logout", $data);
        }

        public function login_show() {
            
            $data["page_title"] = "Logout Page";
            $data["page_path"] = "Home/Logout";
            $this->views->getView($this, "login");
        }

        public function login() {
            $data["page_title"] = "Logout Page";
            $data["page_path"] = "Home/Logout";
            $_SESSION["session_status"] = "fake";
            header('Location: '.BASE_URL);
        }
    }