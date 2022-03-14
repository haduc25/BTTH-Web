<?php 

class BaseModel
{
    public $conn;
    public function __construct()
    {
        $this-> conn = new PDO("mysql:host=localhost; dbname=project_sp; charset=utf8",'root', '');
    }


    //select all
    public static function all()
    {
        $model = new static();
        $sql = "select * from $model->tableName";
        $stmt = $model->conn->prepare($sql);
        $stmt->execute();
        $rs = $stmt->fetchAll(PDO::FETCH_CLASS, get_class($model));
        return $rs;
    }


    //insert
    public function insert(){
        $this->queryBuilder = "insert into $this->tableName (";
        foreach ($this->columns as $col) {
            if($this->{$col} == null){
                continue;
            }
            $this->queryBuilder .= "$col, ";
        }
        $this->queryBuilder = rtrim($this->queryBuilder, ", ");
        $this->queryBuilder .= ") values ( ";
        foreach ($this->columns as $col) {
            if($this->{$col} == null){
                continue;
            }
            $this->queryBuilder .= "'" . $this->{$col} ."', ";
        }
        $this->queryBuilder = rtrim($this->queryBuilder, ", ");
        $this->queryBuilder .= ")";

        $stmt = $this->conn->prepare($this->queryBuilder);
        try{

            $stmt->execute();
            $this->id = $this->conn->lastInsertId();
            return $this;
        }catch(Exception $ex){
            var_dump($ex->getMessage());die;
        }
    }












}



?>