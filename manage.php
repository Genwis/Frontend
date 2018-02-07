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
<?php $dsb=false;$atr=false;$mng=true;$stg=false;
$titl="Manage User";
include ('includes/dheader.php');?>
<div class='widg' id='managu'>
<h4>Latest Users</h4>
<div class='kotaq'>

<table class="table latestu">
  <thead>
    <tr>
      <th scope="col">E-mail</th>
      <th scope="col">Budget</th>
      <th scope="col">City Destination</th>
      <th scope="col">Start</th>
	  <th scope="col">End</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Tsubasaozora13@gmail.com</td>
      <td>IDR 10000000</td>
      <td>Bandung, West Java</td>
      <td>27 May 2017</td>
	  <td>03 June 2017</td>
    </tr>
    <tr>
      <td>Tsubasaozora13@gmail.com</td>
      <td>IDR 10000000</td>
      <td>Bandung, West Java</td>
      <td>27 May 2017</td>
	  <td>03 June 2017</td>
    </tr>
    <tr>
      <td>Tsubasaozora13@gmail.com</td>
      <td>IDR 10000000</td>
      <td>Bandung, West Java</td>
      <td>27 May 2017</td>
	  <td>03 June 2017</td>
    </tr>
  </tbody>
</table>
</div>
</div>
<?php include ('includes/dfooter.php'); ?>