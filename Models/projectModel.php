<?php
    class projectModel extends MySQL{
        public function __construct() {
            parent::__construct();
        }
        public function addProject(string $name, string $desc, int $creator) {
            $query = "insert into projects (project_name, project_description, project_user_creator) values (?, ?, ?)";
            $arr = array($name, $desc, $creator);
            $req = $this->insert($query, $arr);
            return $req;
        }
        
        public function getProjects() {
            $query = "select * from projects";
            $req = $this->select_all($query);
            return $req;
        }
        
        public function getProjectsByUser(int $id) {
            $query = "select * from projects where project_user_creator = $id";
            $req = $this->select($query);
            return $req;
        }

        public function addColumn(string $name, string $desc, int $pos, int $project) {
            $query = "INSERT INTO columns(column_name, column_description, column_position, column_project_id) VALUES (?, ?, ?, ?)";
            $arr = array($name, $desc, $pos, $project);
            $req = $this->insert($query, $arr);
            return $req;
        }
    }