<?php
  $array = array();
  $con = mysqli_connect("localhost","root","root","Anime","8888");
  $sql = "SELECT * FROM Anime WHERE description = 'y'";
  $result = mysqli_query($con,$sql);
//  echo($row);
  while($row = mysqli_fetch_array($result)){
    array_push($array,$row);
  }
  echo(json_encode($array));
?>
