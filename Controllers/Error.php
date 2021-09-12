<?php
    class Errors extends Controllers{
        public function __construct(){
            parent::__construct();
        }

        public function notFound() {
            $data["page_title"] = "Error Page";
            $data["page_path"] = "Home/Error";
            $this->views->getView($this, "error", $data);
        } 
    }

    $notFound = new Errors();
    $notFound->notFound();
    