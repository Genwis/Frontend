<!DOCTYPE html>
<html lang="en">
<head>
  <title>Genpart</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="./js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="./css/reset.css">
  <link rel="stylesheet" href="./css/damzmicin.css">
  <link rel="stylesheet" href="./css/homemicin.css">
<script>
$(document).on('click', 'a[href^="#"]', function (event) {
    event.preventDefault();

    $('html, body').animate({
        scrollTop: $($.attr(this, 'href')).offset().top
    }, 1000);
});
</script>
</head>
<body>
<div class="full">
<div class='bag' id='opener'>
<nav id='barnav'>
<div class='juds'>Genpart</div>	<div class='menus'><a href='#howitworks' class='m'>How it works</a> <a href='#features' class='m'>Features</a> <a href='#about' class='m'>About</a><a class='signin whitebut' href='./login.php'>Sign in</a></div> 
</nav>
<div class='ghost'>
<div class='daleman'>


<h1><span class='gpart'>Genwis Partner</span> for growth local travel agents</h1>
<p>
Genwis Partner is a platform for local travel agents that would help to growth tour business
<br/>
in the some city with three powerfull fiture is view all statistic, manage user and manage attraction.
</p>
<!--<a class='btn btn-primary'>Get Started</a>-->
<a href='./login.php' class='getstart'>Get Started</a>
</div>
</div>

</div>



<div class='micin' id='howitworks'>
<h2 class='howi'>How it works</h2>
<hr/>
<div id='conq'>
<div class='wite'>
</div>
<div class='norm'>
<div class='insd'>
<div class='logat' id='reg'></div>
<h3>Register Account</h3>
<p>
Register your account as<br/>
local travel agent to<br/>
manage your attractions.
</p>
</div>
</div>
<div class='norm'>
<div class='insd'>
<div class='logat' id='atr'></div>
<h3>Add Attraction</h3>
<p>
Add attraction that you can<br/>
handle for traveling user needs<br/>
on add attraction menu. 
</p>
</div>
</div>
<div class='norm'>
<div class='insd'>
<div class='logat' id='cal'></div>
<h3>Wait for Us to Call</h3>
<p>
We will call you via this web<br/>
if there is any attraction<br/>
you handle is needed
</p>
</div>
</div>
<div class='wite'>
</div>
<div style='clear:both;'></div>
</div>
</div>
<div class='micin' id='features'>
<div id='back'></div>
<div id='mai'>
<h2>Develop your business with <span style='color:#45d081'>3</span> powerful features</h2>
<p id='par1'>
Genwis Partner has three powerful features for local travel agents that could promote your business.
</p>
<div>
<div class='bults' id='vie'><div></div></div>
<h3>View All Statistic</h3>
<p>
You could see all of statistics of your 
revenue, active user, statics revenue per-month etc. on this website.
</p>
<div style='clear:both;'></div>
<div class='bults' id='mna'><div></div></div>
<h3>Manage Attraction</h3>
<p>
You could manage your attraction that you can service
our users in the city.
</p>
<div style='clear:both;'></div>
<div class='bults' id='mnu'><div></div></div>
<h3>Manage User</h3>
<p>
You could manage your users who booked with your
services, such as editing or deleting a user data.
</p>
<div style='clear:both;'></div>
</div>
</div>
</div>
<div class='micin' id='about'>
<h2 class='mailh'>Type your email here for more information from us</h2>
<div class='modalb' id='subox'>
<div id='mailrap'><div id='mail'></div><input type='text' class='inputs' placeholder='Type your email address here'> <a class='whitebut send' href='#'>Send</a></div>
</div>
</div>

<?php //include ('includes/footer.php'); ?>
<footer>
<div class='bag' id='allr'>
<div id='genlog'></div>
All rights reserved
</div>
<div class='bag'>
<h3>Links</h3>
<ul>
<li><a href='#'>How it works</a></li>
<li><a href='#'>Features</a></li>
<li><a href='#'>About</a></li>
</ul>
</div>
<div class='bag' id='contact'>
<h3>Contact</h3>
<ul>
<li>(+62)81992132785</li>
<li>genwisde@gmail.com</li>
<li>Jl. Telkom University Gd. Kultubai Utara 106</li>
<li>Bandung, West Java</li>
</ul>
</div>
<div class='bag' id='sosmed'>
<a href='#' class='sosmed' id='fb'></a>
<div class='sect'>
<a href='#' class='sosmed' id='tw'></a>
<a href='#' class='sosmed' id='ig'></a>
<div style='clear: both;'></div>
</div>
</div>
<div style='clear: both;'></div>
</footer>
</div>

</body>
</html>