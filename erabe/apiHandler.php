<?php

  class apiCall{

    private $excludeValues = array();
    private $submitValues = array();

    public function __construct($exclude, $submit){

      $this->excludeValues = $exclude;
      $this->submitValues = $submit;

    }

    public function getEVal(){

      return $this->excludeValues;

    }

    public function getSVal(){

      return $this->submitValues;

    }

    public function searchAnime($name){
      $theArray = array(array());
      $handle = file_get_contents('http://hummingbird.me/api/v1/search/anime?query=' . $name);
      $jsonHandle = json_decode($handle,true);
      //Iterate through the json file removing key value pairs we don't want to send to the client
      foreach($jsonHandle as $key => $value){
        foreach($jsonHandle[$key] as $key2 => $value2){
          if(!in_array($key2,$excludeValues)){
            $theArray[$key][$key2] = $value2;
          }
        }
      }
      echo(json_encode($theArray));

    }

    public function getInfoById($id){
      $theArray = array();
      $handle = file_get_contents('http://hummingbird.me/api/v1/anime/' . $id);
      $jsonHandle = json_decode($handle);
      foreach($jsonHandle as $key => $value){
        if(!in_array($key,$this->excludeValues)){
            $theArray[$key] = $value;
        }
      }
      return(json_encode($theArray));

    }

  }

  $anApiCall = new apiCall(["age_rating",""],[]);
  if($_GET['q']){
    echo($anApiCall->searchAnime($_GET['q']));
  }
?>
