<?php include ('includes/checker.php');$dsb=true;$atr=false;$mng=false;$stg=false;$janc="kappa";
$titl="Dashboard";
include ('includes/dheader.php');?>

<div class='widg nobutton'>
<h4>Quick Statistics</h4>
<div class="row" id='quicks'>
    <div class="kotaq col-md-auto actq">
	<div class='ikon ac-us'></div>
	<div class='statin'>
      <span class='inf'>Active user</span>
	  <span class='pcount'><span class='count'>2720</span></span>
	  </div>
	<div style='clear:both;'></div>
    </div>
    <div class="kotaq col-md-auto booq">
	<div class='ikon boo'></div>
	<div class='statin'>
      <span class='inf'>Booked</span>
	  <span class='pcount'><span class='count'>220</span> itinerary</span>
	  </div>
	  <div style='clear:both;'></div>
    </div>
    <div class="kotaq col revq">
	<div class='ikon rev'></div>
	<div class='statin'>
      <span class='inf'>Revenue</span>
	  <span class='pcount'><span class='count'>270.000.000</span> IDR</span>
	  </div>
	  <div style='clear:both;'></div>
    </div>
  </div>
</div>
<div id="stats">
<div id="stats1">
<div class='widg'>
<div class='rightpad'>
<div class='widh'>
<div class='lefte'>
<h4>Revenue Statistics</h4>
</div>
<div class='righte'>
<a href='#'>View all</a>
</div>
<div style='clear: both;'></div>
</div>
<div class='kotaqu'>
<canvas id="chartr"></canvas>
</div>
</div>
</div>
</div>
<div id="stats2">
<div class='widg'>
<div class='leftpad'>
<div class='widh'>
<div class='lefte'>
<h4>User Statistics</h4>
</div>
<div class='righte'>
<a href='#'>View all</a>
</div>
<div style='clear: both;'></div>
</div>
<div class='kotaqu'>
<canvas id="chartu"></canvas>
</div>
</div>
</div>
</div>
<div style='clear: both;'></div>
</div>
<div class='widg'>
<div class='widh'>
<div class='lefte'>
<h4>Latest Users</h4>
</div>
<div class='righte'>
<a href='#'>View all</a>
</div>
<div style='clear: both;'></div>
</div>
<div class='kotaqu'>
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