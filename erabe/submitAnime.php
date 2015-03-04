<?php
  $con = mysqli_connect("localhost","root","root","Anime","8888");
  $q = $_POST['test'];
  echo($q);
//  $sql = "INSERT INTO Anime (title, id, erabe, description, placeholder) VALUES ('$q','1','y','y','y')";
//  mysqli_query($con,$sql);
?>
