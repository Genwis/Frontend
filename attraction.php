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

<button class='tamb' type="button" onclick="alert('Hello World!')">Add Attraction</button>
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
<h2>Kappa cafet</h2>
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
<?php include ('includes/dfooter.php'); ?>