<!DOCTYPE HTML>
<html>
<title> Guide Creator </title>
<script type='text/javascript' src='http://code.jquery.com/jquery-1.11.0.js'></script>
<script type='text/javascript' src='../Javascript/matchups.js'></script>
<link rel="stylesheet" type="text/css" href="../CSS/championCreation.css">
<body>
<div id = "infoForms">
  <div id ="pics">
  </div>
  <div id ="matchUp">
  </div>
  <form id = "early" action="<?php echo $_SERVER['PHP_SELF']; ?>" method= "POST">
    Early Game: <textarea name="earlyGame">Enter early game strategy here...</textarea><br />
    Mid Game: <textarea name="midGame">Enter mid game strategy here...</textarea><br />
    Late Game: <textarea name="midGame">Enter late game strategy here...</textarea><br />
    Useful Tips: <textarea name="midGame">Enter useful tips here...</textarea><br />
    Item builds: <textarea name="midGame">Enter item builds here...</textarea><br />
    <input type="submit"><br />
  </form>
</div>
</body>
</html>
