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
            $data = $this->model->login(1);
            if($data["len"] != 0) {
                $_SESSION["session_status"] = "fake";
                $_SESSION["session_user"]["profile"] = $data;
                $_SESSION["session_user"]["projects"] = $this->model->getProjectsByUser(1);
            }
            header('Location: '.BASE_URL);
        }
    }