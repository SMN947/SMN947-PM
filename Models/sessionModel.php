<?php
    class sessionModel extends MySQL{
        public function __construct() {
            parent::__construct();
        }
        public function login(int $b = 1) {
            $query = "select * from users where user_id = $b";
            $req = $this->select($query);
            return $req;
        }
        public function getProjectsByUser(int $id) {
            $query = "select * from projects where project_user_creator = $id";
            $req = $this->select($query);
            return $req;
        }
    }