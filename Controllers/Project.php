<?php
    class Project extends Controllers{
        public function __construct(){
            parent::__construct();
        }

        public function view($projectId) {
            $data["page_title"] = "Logout Page";
            $data["page_path"] = "Home/Logout";
            $data["projectId"] = $projectId;
            $_SESSION["session_user"]["projects"] = $this->model->getProjectsByUserFull(1);
            $_SESSION["session_user"]["current_project"] = $projectId;
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

        public function add_task_save($params) {
            $res = $this->model->addTask($_GET['task-name'], $_GET['task-desc'], $_GET['task-start-sch'], $_GET['task-end-sch'], $_GET['task-project'], $_GET['task-column']);
            //tasks(task_name, task_desc, task_start_sch, task_end_sch, task_project_id, task_column_id)
            header('Location: '.BASE_URL."/project/view/".$_GET["task-project"]); 
            //http://192.168.0.102/SMN947-PM/project/view/24
        }

        //
        public function add_task($params) {
            $data["page_title"] = "Logout Page";
            $data["page_path"] = "Home/Logout";
            $data["column_id"] = $params;
            $this->views->getView($this, "add_task", $data);
        }
    }