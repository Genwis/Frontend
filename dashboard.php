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
<?php $dsb=true;$atr=false;$mng=false;$stg=false;$janc="kappa";
$titl="Dashboard";
include ('includes/dheader.php');?>

<div class='widg nobutton'>
<h4>Quick Statistic</h4>
<div class="row" id='quicks'>
    <div class="kotaq col-md-auto">
	<div class='ikon ac-us'></div>
	<div class='statin'>
      <span class='inf'>Active user</span>
	  <span class='pcount'><span class='count'>2720</span></span>
	  </div>
	<div style='clear:both;'></div>
    </div>
    <div class="kotaq col-md-auto">
	<div class='ikon boo'></div>
	<div class='statin'>
      <span class='inf'>Booked</span>
	  <span class='pcount'><span class='count'>220</span> itinerary</span>
	  </div>
	  <div style='clear:both;'></div>
    </div>
    <div class="kotaq col">
	<div class='ikon rev'></div>
	<div class='statin'>
      <span class='inf'>Revenue</span>
	  <span class='pcount'><span class='count'>IDR 270.000.000</span></span>
	  </div>
	  <div style='clear:both;'></div>
    </div>
  </div>
</div>
<div class="row">
<div class="col">
<div class='widg'>
<h4>Revenue Statistic</h4>

</div>
</div><div class="col">
<div class='widg'>
<h4>User Statistic</h4>

</div>
</div>
</div>
<div class='widg'>
<h4>Latest Users</h4>

</div>
<?php include ('includes/dfooter.php'); ?>