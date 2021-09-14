<?php
    class Project extends Controllers{
        public function __construct(){
            parent::__construct();
        }

        public function create() {
            $data["page_title"] = "Logout Page";
            $data["page_path"] = "Home/Logout";
            $this->views->getView($this, "create", $data);
        }
    }