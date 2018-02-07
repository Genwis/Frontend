<?php include ('includes/checker.php');?>
<!DOCTYPE html>
<html lang="en" class='dhtml'>
<head>
  <title>Genwis Test</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="./js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="./css/damzmicin.css">
  <script>
/*
window.history.pushState("object or string", "Title", "./new-url");
*/
</script>
</head>
<body class='dbbod'>
<?php $dsb=false;$atr=true;$mng=false;$stg=false;
$titl="Attraction";
include ('includes/dheader.php');?>
<div class='widg' id='culinair'>
<div class='lefter'>
<h4>Culinary</h4>
<div class='jumat'>8 Attractions available</div>
</div>
<div class='righter'>
<input class='serc' type='text' placeholder='Search here'/>

<select class='selc' name="cars">
  <option value="volvo">Culinary</option>
  <option value="saab">Saab</option>
  <option value="fiat">Fiat</option>
  <option value="audi">Audi</option>
</select>

<input class='tamb' type='button' id='hideshow' value='Add Attraction'>
</div>
<div style='clear: both;'></div>
<div class='kotaq'>
<div class="row">
<div class="culco col-xl-4 col-lg-4 col-md-5 col-sm-7">
<div class='dalm'>
<img src='/'/>
<h2>Bad gridding</h2>
<div class='par'>Breather Cafe is one of restaurants located on Mumbai, India... Read More</div>
</div>
</div>

<div class="culco col-xl-4 col-lg-4 col-md-5 col-sm-7">
<div class='dalm'>
<img src='/'/>
<h2>Why am I alive</h2>
<div class='par'>Breather Cafe is one of restaurants located on Mumbai, India... Read More</div>
</div>
</div>

<div class="culco col-xl-4 col-lg-4 col-md-5 col-sm-7">
<div class='dalm'>
<img src='/'/>
<h2>Bootstrap jancoeg</h2>
<div class='par'>Breather Cafe is one of restaurants located on Mumbai, India... Read More</div>
</div>
</div>

<div class="culco col-xl-4 col-lg-4 col-md-5 col-sm-7">
<div class='dalm'>
<img src='/'/>
<h2>Bootstrap = worst framework</h2>
<div class='par'>Breather Cafe is one of restaurants located on Mumbai, India... Read More</div>
</div>
</div>

<div class="culco col-xl-4 col-lg-4 col-md-5 col-sm-7">
<div class='dalm'>
<img src='/'/>
<h2>Fuck bootstrap</h2>
<div class='par'>Breather Cafe is one of restaurants located on Mumbai, India... Read More</div>
</div>
</div>
<div class="culco col-xl-4 col-lg-4 col-md-5 col-sm-7">
<div class='dalm'>
<img src='/'/>
<h2>I hate bootstrap</h2>
<div class='par'>Breather Cafe is one of restaurants located on Mumbai, India... Read More</div>
</div>
</div>


</div>
</div>
</div>
<div id='content'>
<div class="kotaq">
<div>
    <span class="close">cancel</span>
    <h4>Add Attraction</h4>
	
	</div>
	<div>
	<h5>Attraction Name</h5>
	<input class='adt' placeholder='Name' type='text'/>
	</div>
	<div>
	<h5>Attraction Type</h5>
	
	</div>
	<div>
	<h5>Attraction Description</h5>
	<textarea></textarea>
	</div>
	<div>
	<h5>Image</h5>
	<input type="file" name="file"
	</div>
  </div></div>
<script type='text/javascript'>
var con = document.getElementById('content');
var cul = document.getElementById('culinair');
var btn = document.getElementById("hideshow");
var span = document.getElementsByClassName("close")[0];

btn.onclick = function() {
    con.style.display = "block";
	cul.style.display = "none";
}
span.onclick = function() {
    con.style.display = "none";
	cul.style.display = "block";
}
/*
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == con) {
        con.style.display = "none";
    }
}*/
	</script>
<?php include ('includes/dfooter.php'); ?>