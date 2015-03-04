<?php
  class query{

    private $host;
    private $user;
    private $pass;
    private $port;
    private $con;

    public function __construct($host,$user,$pass,$port){
      $this->host = $host;
      $this->user = $user;
      $this->pass = $pass;
      $this->port = $port;
      $this->con = mysqli_connect($this->host,$this->user,$this->pass,$this->port) or die ("Error: could not connect to the database" . mysqli_error($link));
    }

    public function getById($id){
      $resultArray = array();
      $sql = "SELECT * FROM Anime WHERE id = '" . $id . "'";
      $result = mysqli_query($this->con,$sql);
      while($row = mysqli_fetch_assoc($result)){

        array_push($resultArray,$row);
        /*
        foreach($row as $key => $value){
            $resultArray[$key] = $value;
        }
        */
      }
      return json_encode($resultArray);

    }

    public function nameSearch($name){
      $resultArray = array();
    }



  }
  $aQuery = new query("localhost","root","root","Anime","8888");
  echo($aQuery->getById(1))
?>
