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

        public function addTask(string $name, string $desc, string $start, string $end, string $project, string $column) {
            $query = "INSERT INTO tasks(task_name, task_desc, task_start_sch, task_end_sch, task_project_id, task_column_id) VALUES (?, ?, ?, ? ,?, ?)";
            $arr = array($name, $desc, $start, $end, $project, $column);
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
            $req = $this->select_all($query);
            return $req;
        }

        public function getProjectsByUserFull(int $id) {
            $projects = $this->getProjectsByUser($id);



            foreach ($projects["data"] as $key => $value) {
                $query = "select * from columns where column_project_id = ".$value["project_id"]." order by column_position asc";
                $projects["data"][$key]["columns"] = $this->select_all($query)["data"];
                foreach ($projects["data"][$key]["columns"] as $keyCol => $valueCol) {
                    $query = "SELECT * FROM tasks WHERE task_project_id = ".$value["project_id"]." and task_column_id = ".$valueCol["column_id"];
                    $projects["data"][$key]["columns"][$keyCol]["tasks"] = $this->select_all($query)["data"];
                }
            }
            return $projects;
        }

        public function addColumn(string $name, string $desc, int $pos, int $project) {
            $query = "INSERT INTO columns(column_name, column_description, column_position, column_project_id) VALUES (?, ?, ?, ?)";
            $arr = array($name, $desc, $pos, $project);
            $req = $this->insert($query, $arr);
            return $req;
        }

        public function updateTask(string $name, string $desc, string $start, string $end, string $project, string $column, string $id) {
            $query = "UPDATE tasks SET task_name=?,task_desc=?,task_start_sch=?,task_end_sch=?,task_project_id=?,task_column_id=? WHERE task_id = ?";
            $arr = array($name, $desc, $start, $end, $project, $column, $id);
            $req = $this->update($query, $arr);
            return $req;
        }
    }