<?php
  $excludeValues = ['alternate_title','started_airing','finished_airing','age_rating','episode_count','episode_length'];
  if($_GET['q'] != null){
    $q = $_GET['q'];
    $theArray = array(array());
    $handle = file_get_contents('http://hummingbird.me/api/v1/search/anime?query=' . $q);
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
  if($_GET['id'] != null){
    $theArray = array();
    $handle = file_get_contents('http://hummingbird.me/api/v1/anime/' . $_GET['id']);
    $jsonHandle = json_decode($handle);
    foreach($jsonHandle as $key => $value){
      if(!in_array($key,$excludeValues)){
          $theArray[$key] = $value;
      }
    }
    echo(json_encode($theArray));
  }
?>
