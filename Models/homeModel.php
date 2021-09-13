<?php
    class homeModel extends MySQL{
        public function __construct() {
            parent::__construct();
        }
        public function setUser(string $a, int $b) {
            $query = "insert into test(matricula, cash) values (?, ?)";
            $arr = array($a, $b);
            $req = $this->insert($query, $arr);
            return $req;
        }
        public function getUser(int $b) {
            $query = "select * from test where id = $b";
            $req = $this->select($query);
            return $req;
        }
    }