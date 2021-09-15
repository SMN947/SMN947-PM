<?php
    class homeModel extends MySQL{
        public function __construct() {
            parent::__construct();
        }
        public function getProjectsByUser(int $id) {
            $query = "select * from projects where project_user_creator = $id";
            $req = $this->select($query);
            return $req;
        }
    }