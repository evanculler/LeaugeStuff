<?php
  if($_GET['q'] != null){
    $q = $_GET['q'];
    //$q = filter_var($_GET['q'],FILTER_SANITIZE_STRING);
    echo(file_get_contents('http://hummingbird.me/api/v1/search/anime?query=' . $q));
  }
  if($_GET['id'] != null){
    echo(file_get_contents('http://hummingbird.me/api/v1/anime/' . $_GET['id']));
  }
?>
