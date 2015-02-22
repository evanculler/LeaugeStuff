<!DOCTYPE html>
<html lang="en">
<title> Erabe </title>
<body>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-4" id="searcharea">
        <label for="search">Champion Search</label><br />
        <input type="search" name="search" id="search" placeholder="name or info" />
      </div>
      <div class="col-md-4" id="submitSearch">
        <label for="searchtwo">Searched Submitted Anime</label><br />
        <input type="search" name"searchtwo" id="searchtwo" placedholder="anime in question" />
      </div>
      <div class="col-md-4" id="erabeDiv">
        <select id="erabe">
          <option val="y">Yes</option>
          <option val="n">No</option>
          <option val="i">It is complicated</option>
        </select>
      </div>
    </div>
  <div class="row">
    <div class="col-md-4" id="searchedarea">
      <textarea name="moreInfo"> Enter additional informaiton if you answered it is complicated above</textarea>
      <select id="test">
      </select>
      <button id="sender" type="button">Get Anime Summary</button>
      <button id="submitIt" type ="button">The Real Submit</button>
      <div class="col-md-4" id="showInfo">
      </div>
      <div class="col-md-4" id="jsonData">
      </div>
    </div>
  </div>
</div>
<script type='text/javascript' src='http://code.jquery.com/jquery-1.11.0.js'></script>
<script src='./fillForms.js'></script>
<link rel="stylesheet" type="text/css" href="../bootstrap-3.3.2-dist/css/bootstrap.css">
</body>
</html>
