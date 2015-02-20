<?php
  $con = mysqli_connect("localhost","root","root","Anime","8888");
  $sql = "SELECT * FROM Anime WHERE title = 'test'";
  $result = mysqli_query($con,$sql);
//  echo($row);
  while($row = mysqli_fetch_array($result)){
    echo($row['title']);
  }
  echo('Hey');
?>
