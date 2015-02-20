<!DOCTYPE HTML>
<html>
<body>

<title> Champion Search </title>

<div id="searcharea">
    <label for="search">Champion Search</label><br />
    <input type="search" name="search" id="search" placeholder="name or info" />
</div>
<div id='test'></div>
<br />
<br />Summoner Level: <span id="sLevel"></span>

<br />Summoner ID: <span id="sID"></span>

<form id="ajax" action="sendData.php" method="post">
Champion Name: <input type="text" name="name"><br>
data: <input type="text" name="data"><br>
<input type="submit">
</form>

<select id = "champSelect">
  <option val ="Champs">Champs</option>
  <option val ="Item">Items</option>
  <option val ="Runes">Runes</option>
</select>

<select id = "item">
</select>

<div id = "items2"></div>

<script type='text/javascript' src='http://code.jquery.com/jquery-1.11.0.js'></script>
<script src='../Javascript/championSearch.js'></script>
<script src='../Javascript/ajaxForms.js'></script>
<link rel="stylesheet" type="text/css" href="../CSS/main.css">
</body>
</html>
