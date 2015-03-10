<?php

//  include 'anime.php';


  class query{

    private $host;
    private $user;
    private $pass;
    private $port;
    private $con;
    private $genre;

    public function __construct($host,$user,$pass,$port,$genre){
      $this->host = $host;
      $this->user = $user;
      $this->pass = $pass;
      $this->port = $port;
      $this->genre = $genre;
      $this->con = mysqli_connect($this->host,$this->user,$this->pass,$this->port);
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

    public function submitAnime($id,$name,$syn,$rating,$picPath){
      $id = mysqli_real_escape_string($this->con,$id);
      $name = mysqli_real_escape_string($this->con,$name);
      $syn = mysqli_real_escape_string($this->con,$syn);
      $rating = mysqli_real_escape_string($this->con,$rating);
      $picPath = mysqli_real_escape_string($this->con,$picPath);
      $sql = "INSERT INTO Anime (id, title, erabe, description, placeholder) VALUES ('$id','$name','$syn','$rating','$picPath')";
      $result = mysqli_query($this->con,$sql);
      return $result;

    }

    public function getAnime($id){
      $anArray = array();
      $id = intval(mysqli_real_escape_string($this->con,$id));
      $sql = "SELECT * FROM Anime WHERE id = '" . $id . "'";
      $result = mysqli_query($this->con,$sql);
      while($row = mysqli_fetch_assoc($result)){
        array_push($anArray,$row);
      }
//      echo(json_encode($anArray));
      return $anArray;

    }

    public function searchName($name){
      $resultArray = array();
      $name = mysqli_real_escape_string($this->con,$name);
      $sql = "SELECT * FROM Anime WHERE title = '" . $name . "'";
      $result = mysqli_query($this->con,$sql);
      while($row = mysqli_fetch_assoc($result)){
        array_push($resultArray,$row);
      }
//      echo(json_encode($resultArray));
      return $resultArray;
    }

    public function searchErabe($genre){
      $resultArray = array();
      $genre = mysqli_real_escape_string($this->con,$genre);
      $sql = "SELECT * FROM Anime WHERE erabe = '". $genre . "'";
      $result = mysqli_query($this->con,$sql);
      while($row = mysqli_fetch_assoc($result)){
        array_push($resultArray,$row);
      }
//      echo(json_encode($resultArray));
      return $resultArray;
    }

    public function serializeGenre($genre){
      $genre = json_encode($genre);
      return $genre;
    }



  }

?>
