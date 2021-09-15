<?php
    class homeModel extends MySQL{
        public function __construct() {
            parent::__construct();
        }
        public function getProjectsByUser(int $id) {
            $query = "select * from projects where project_user_creator = $id";
            $req = $this->select_all($query);
            return $req;
        }
        public function getProjectsByUserFull(int $id) {
            $projects = $this->getProjectsByUser($id);

            foreach ($projects["data"] as $key => $value) {
                $query = "select * from columns where column_project_id = ".$value["project_id"]." order by column_position asc";
                $projects["data"][$key]["columns"] = $this->select_all($query)["data"];
            }
            return $projects;
        }
        
    }