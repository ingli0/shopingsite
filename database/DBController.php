<?php

class DBController
{
//database connect
protected $host='localhost';
protected $user='root';
protected $password='';
protected $database="magazi";

//conection property
public $con=null;

//call constructor
public function __construct()
{
    $this->con=mysqli_connect($this->host,$this->user,$this->password,$this->database);
    if($this->con->connect_error){
        echo "pextike malakia".$this->connect_error;
    }

}

public function  __destruct(){
    $this->closeConection();
}

//for closing connection
protected function closeConection(){
    if($this->con!=null){
        $this->con->close();
        $this->con=null;
    }
}
}

