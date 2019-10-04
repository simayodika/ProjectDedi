<?php
    require_once "database.php";
    
    class Query extends Database {

        protected $table = "";

        public function all(){
            $sql = " SELECT * FROM " . $this->table;
            $query = $this->conn->query($sql);
            // Fetch Data
            $rows = $query->fetchAll();
            return $rows;
        }
        

        public function where($col,$val){
            $sql = " SELECT * FROM " . $this->table . " WHERE $col = '$val' ";
            $query = $this->conn->query($sql);
            if($query->rowCount() ==1 ){
                $rows = $query->fetch();
            }
            else {
                $rows = [];
            }
            return $rows;
        }     

        public function delete($col,$val){
            $sql = " DELETE FROM " . $this->table . " WHERE $col = '$val' ";
            $query = $this->conn->query($sql);
            print_r($sql);
            if($query){
                return true;
            }
            else {
                return false;
            }
        }

        public function insert($data){
            $sql = " INSERT INTO " . $this->table . " ( ";
            $index = 1;
            foreach($data as $key=>$val){
                $sql .= "$key";
                if(count($data) > $index){
                    $sql .= " , ";
                    $index++;
                }
                else {
                    $sql .= " ) VALUES (";
                    $index = 1;
                }
            }
            foreach($data as $val){
                $sql .= "'$val'";
                if(count($data) > $index){
                    $sql .= " , ";
                    $index++;
                }
                else {
                    $sql .= " )";
                    $index = 1;
                }
            }
        $query = $this->conn->query($sql);
        if($query){
            return true;
        }
       else {
            return false;
            }
        }
   
        public function update($data,$column,$value){
            $sql = " UPDATE " . $this->table . " SET ";
            $index = 1;
            foreach($data as $key=>$val){
                $sql .= "$key = '$val' ";
                if(count($data) > $index){
                    $sql .= " , ";
                    $index++;
                }
                else {
                    $sql .= " WHERE $column = '$value' ";
                    $index = 1;
                }
            }
        $query = $this->conn->query($sql);
        if($query){
            return true;
        }
       else {
            return false;
            }
        }
    

      public function search($col,$val){
        $sql = " SELECT * FROM " . $this->table . " WHERE $col LIKE '%$val%' ";
        $query = $this->conn->query($sql);
        if($query->rowCount() > 0){
            $rows = $query->fetchAll();
        }
        else {
            $rows = [];
        }
        
        return $rows;
    }  

    public function whereAll($col,$val){
        $sql = " SELECT * FROM " . $this->table . " WHERE $col = '$val' ";
        $query = $this->conn->query($sql);
        if($query->rowCount() > 0 ){
            $rows = $query->fetchAll();
        }
        else {
            $rows = [];
        }
        return $rows;
    }   


    
    }
?>