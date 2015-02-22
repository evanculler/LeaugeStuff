<?php
  $array = array();
  $con = mysqli_connect("localhost","root","root","Anime","8888");
  $q = $_GET['q'];
  $sql = "SELECT * FROM Anime WHERE title = '" . $q . "'";
  $result = mysqli_query($con,$sql);
//  echo($row);
  while($row = mysqli_fetch_assoc($result)){
    array_push($array,$row);
  }
  echo(json_encode($array));
?>
