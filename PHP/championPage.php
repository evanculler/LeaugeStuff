<?php

  if(isset($_GET["champ"])){
    $champion = strval($_GET["champ"]);
    echo($champion);
  }
  else{
    echo("not found");
  }
  $con=mysqli_connect("localhost","root","root","Champions","8888");

  if(isset($_GET["favor"])){
    $favor = intval($_GET["favor"]);
    if($favor == 1){
      $sql = "SELECT * FROM Champions WHERE name = '" . $champion . "'";
      $toIncrement = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($toIncrement);
      $newNum = 1 + $row['likes'];
      $sql = "UPDATE Champions SET likes =" . intval($newNum) ." WHERE name = '" . $champion . "'";
      mysqli_query($con,$sql);
    }
    elseif(!$favor == 0){
      $toIncrement = mysqli_query($con,"SELECT dislikes FROM Champions WHERE name = " . $champion);
      $toIncrement += 1;
      mysqli_query($con,"UPDATE Champions SET dislikes = " . $toIncrement . " WHERE name = " . $champ);
    }
  }
  $sql = "SELECT * FROM Champions WHERE name = '" . $champion . "'";
  $toIncrement = mysqli_query($con,$sql);
  $row = mysqli_fetch_array($toIncrement);
  echo('hey');
  echo($row['name']);
  echo($row['likes']);
  echo($row['dislikes']);
?>
