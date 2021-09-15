<?php
    class MySQL extends Conection {
        private $conection;
        private $strQuery;
        private $arrValues;

        function __construct() {
            $this->conection = new Conection();
            $this->conection = $this->conection->conect();
        }

        public function insert(string $query, array $arrValues) {
            $this->strQuery = $query;
            $this->arrValues = $arrValues;
            $insert = $this->conection->prepare($this->strQuery);
            $resInsert = $insert->execute($this->arrValues);

            if($resInsert) {
                $lastInsert = $this->conection->lastInsertId();
            }else{
                $lastInsert = 0;
            }
            return $lastInsert;
        }

        public function select(string $query) {
            $this->strQuery = $query;
            $result = $this->conection->prepare($this->strQuery);
            $result->execute();
                $data["len"] = $result->rowCount();
                $data["data"] = $result->fetch(PDO::FETCH_ASSOC);
            return $data;
        }

        public function select_all(string $query) {
            $this->strQuery = $query;
            $result = $this->conection->prepare($this->strQuery);
            $result->execute();
            $data["len"] = $result->rowCount();
            $data["data"] = $result->fetchall(PDO::FETCH_ASSOC);
            return $data;
        }

        public function update(string $query, array $arrValues) {
            $this->strQuery = $query;
            $this->arrValues = $arrValues;
            $update = $this->conection->prepare($this->strQuery);
            $resUpdate = $update->execute($this->arrValues);
            return $resUpdate;
        }

        public function delete(string $query) {
            $this->strQuery = $query;
            $result = $this->conection->prepare($this->strQuery);
            $result->execute();
            return $result;
        }
    }