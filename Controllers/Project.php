<?php
    class Project extends Controllers{
        public function __construct(){
            parent::__construct();
        }

        public function view() {
            $data["page_title"] = "Logout Page";
            $data["page_path"] = "Home/Logout";
            $this->views->getView($this, "view", $data);
        }

        public function create() {
            $data["page_title"] = "Logout Page";
            $data["page_path"] = "Home/Logout";
            $this->views->getView($this, "create", $data);
        }

        public function create_save($params) {
            $defaultCols = array(
                "To Do" => 1,
                "In Progress" => 2,
                "For Review" => 3,
                "Done" => 4
            );
            $res = $this->model->addProject($_GET['project-name'], $_GET['project-desc'], $_SESSION["session_user"]["profile"]["data"]["user_id"]);
            foreach ($defaultCols as $key => $value) {
                JsPrint($key);
                $this->model->addColumn($key, "", $value, $res);
            }
            header('Location: '.BASE_URL);  
        }
    }