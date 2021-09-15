<?php
    class Home extends Controllers{
        public function __construct(){
            parent::__construct();
        }

        public function home() {
            $data["page_title"] = "Dasboard";
            $data["page_path"] = "Home";
            $_SESSION["session_user"]["projects"] = $this->model->getProjectsByUser($_SESSION["session_user"]["profile"]["data"]["user_id"]);
            $this->views->getView($this, "home", $data);
        }
    }
    