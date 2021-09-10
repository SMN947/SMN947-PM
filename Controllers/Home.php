<?php
    class Home extends Controllers{
        public function __construct(){
            parent::__construct();
        }

        public function home() {
            $data["page_title"] = "Home";
            $this->views->getView($this, "home", $data);
        } 
    }
    