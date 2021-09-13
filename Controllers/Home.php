<?php
    class Home extends Controllers{
        public function __construct(){
            parent::__construct();
        }

        public function home() {
            $data["page_title"] = "Dasboard";
            $data["page_path"] = "Home";
            $this->views->getView($this, "home", $data);
        } 

        public function add() {
            $data = $this->model->setUser("Simon", 5);
            print_r($data);
        }

        public function get($id) {
            $data = $this->model->getUser($id);
            print_r($data);
        }
    }
    