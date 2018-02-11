<?php include ('includes/checker.php');$dsb=false;$atr=true;$mng=false;$stg=false;
$titl="Attraction";
include ('includes/dheader.php');

/*
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
</head>
*/

?>

<body class='dbbod'>
<div class='widg' id='culinair'>
<div class='widh isi'>
<div class='lefte'>
<h4 id='gud'>Culinary</h4>
<div id='des' class='jumat'>8 Attractions available</div>
</div>
<div class='righte'>
<input class='serc' type='text' placeholder='Search here'/>

<select class='selc' name="cars">
  <option value="volvo">Culinary</option>
  <option value="saab">Saab</option>
  <option value="fiat">Fiat</option>
  <option value="audi">Audi</option>
</select>

<button class='tamb' id='hideshow'>Add Attraction</button>
</div>
<div style='clear: both;'></div>
</div>
<div class='kotaqu'>
<div class="row" id='cul'>
<div class='boks'>
<div class='bkm'></div>
<div class='maga'></div>
<h2>Blake Parkinson</h2>
<div class='infb'>
<span class='stars'><span></span><span></span><span></span><span></span><span></span></span> 0.0 <div class='rigt'>IDR <span class='harga'>200K</span></div>
<div style='clear:both;'></div>
</div>
<p>
Jalan Wiratama No. 30 Tuparev Cirebon
Kabupaten Cirebon 45212
</p>
</div>
<div class='boks'>
<div class='bkm'></div>
<div class='maga'></div>
<h2>Breather Maganta Cafe de la lune</h2>
<div class='infb'>
<span class='stars'><span></span><span></span><span></span><span></span><span></span></span> 0.0 <div class='rigt'>IDR <span class='harga'>200K</span></div>
<div style='clear:both;'></div>
</div>
<p>
Jalan Wiratama No. 30 Tuparev Cirebon
Kabupaten Cirebon 45212
</p>
</div>
<div class='boks'>
<div class='bkm'></div>
<div class='maga'></div>
<h2>Beto Galetto</h2>
<div class='infb'>
<span class='stars'><span></span><span></span><span></span><span></span><span></span></span> 0.0 <div class='rigt'>IDR <span class='harga'>200K</span></div>
<div style='clear:both;'></div>
</div>
<p>
Jalan Wiratama No. 30 Tuparev Cirebon
Kabupaten Cirebon 45212
</p>
</div>
<div class='boks'>
<div class='bkm'></div>
<div class='maga'></div>
<h2>Khara Woods</h2>
<div class='infb'>
<span class='stars'><span></span><span></span><span></span><span></span><span></span></span> 0.0 <div class='rigt'>IDR <span class='harga'>200K</span></div>
<div style='clear:both;'></div>
</div>
<p>
Jalan Wiratama No. 30 Tuparev Cirebon
Kabupaten Cirebon 45212
</p>
</div>
<div class='boks'>
<div class='bkm'></div>
<div class='maga'></div>
<h2>Muma Cafe</h2>
<div class='infb'>
<span class='stars'><span></span><span></span><span></span><span></span><span></span></span> 0.0 <div class='rigt'>IDR <span class='harga'>200K</span></div>
<div style='clear:both;'></div>
</div>
<p>
Jalan Wiratama No. 30 Tuparev Cirebon
Kabupaten Cirebon 45212
</p>
</div>
<div class='boks'>
<div class='bkm'></div>
<div class='maga'></div>
<h2>The Anchor</h2>
<div class='infb'>
<span class='stars'><span></span><span></span><span></span><span></span><span></span></span> 0.0 <div class='rigt'>IDR <span class='harga'>200K</span></div>
<div style='clear:both;'></div>
</div>
<p>
Jalan Wiratama No. 30 Tuparev Cirebon
Kabupaten Cirebon 45212
</p>
</div>
<div style='clear:both;'></div>
<!--
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
</div>-->


</div>


<div id='content'>
<div class='bokz'>
<div class='c c1'>
<div class='mager'>
</div>
</div>
<div class='c c2'>
<h2>Breather Cafe</h2>
Culinary
</div>
<div class='c c3'>
<div>
Start  <span class='harga'>Rp.200rb</span>
</div>
<span class='stars'><span></span><span></span><span></span><span></span><span></span></span> 0.0
</div>
<div class='c c4'>
Jalan Wiratama No. 30
Tuparev Cirebon
</div>
<div class='c c5'>
<a href='#'>+ADD</a>
</div>
<div style='clear: both;'></div>
</div>
<div class='bokz'>
<div class='c c1'>
<div class='mager'>
</div>
</div>
<div class='c c2'>
<h2>Nicola Froza Resto</h2>
Culinary
</div>
<div class='c c3'>
<div>
Start  <span class='harga'>Rp.200rb</span>
</div>
<span class='stars'><span></span><span></span><span></span><span></span><span></span></span> 0.0
</div>
<div class='c c4'>
Jalan Wiratama No. 30
Tuparev Cirebon
</div>
<div class='c c5'>
<a href='#'>+ADD</a>
</div>
<div style='clear: both;'></div>
</div>
<div class='bokz'>
<div class='c c1'>
<div class='mager'>
</div>
</div>
<div class='c c2'>
<h2>Blake Parkinson</h2>
Culinary
</div>
<div class='c c3'>
<div>
Start  <span class='harga'>Rp.200rb</span>
</div>
<span class='stars'><span></span><span></span><span></span><span></span><span></span></span> 0.0
</div>
<div class='c c4'>
Jalan Wiratama No. 30
Tuparev Cirebon
</div>
<div class='c c5'>
<a href='#'>+ADD</a>
</div>
<div style='clear: both;'></div>
</div>
<div class='bokz'>
<div class='c c1'>
<div class='mager'>
</div>
</div>
<div class='c c2'>
<h2>The Anchor Rank</h2>
Culinary
</div>
<div class='c c3'>
<div>
Start  <span class='harga'>Rp.200rb</span>
</div>
<span class='stars'><span></span><span></span><span></span><span></span><span></span></span> 0.0
</div>
<div class='c c4'>
Jalan Wiratama No. 30
Tuparev Cirebon
</div>
<div class='c c5'>
<a href='#'>+ADD</a>
</div>
<div style='clear: both;'></div>
</div>
<div class='bokz'>
<div class='c c1'>
<div class='mager'>
</div>
</div>
<div class='c c2'>
<h2>Beto Galletto</h2>
Culinary
</div>
<div class='c c3'>
<div>
Start  <span class='harga'>Rp.200rb</span>
</div>
<span class='stars'><span></span><span></span><span></span><span></span><span></span></span> 0.0
</div>
<div class='c c4'>
Jalan Wiratama No. 30
Tuparev Cirebon
</div>
<div class='c c5'>
<a href='#'>+ADD</a>
</div>
<div style='clear: both;'></div>
</div>
  
</div>
</div>

<script type='text/javascript'>
$(document).ready(function() {
	var b=0;
	$("#hideshow").click( function()
           {
			   if(b==0){
             $("#content").css("display","block");
			 $("#cul").css("display","none");
			 $("#gud").html("Add Attraction");
			 $("#des").html("700 Attractions available");
			 $(this).css("background-color","#e74c3c");
			 $(this).css("background-image","url('./icon/static/close.png')");
			 $(this).css("width","30px");
			 $(this).html("");
			 b=1;
			   }
		 else{
			 $("#content").css("display","none");
			 $("#cul").css("display","block");
			 $("#gud").html("Culinary");
			 $("#des").html("8 Attractions available");
			 $(this).css("background-color","#3498db");
			 $(this).css("background-image","none");
			 $(this).css("width","164px");
			 $(this).html("Add Attraction");
			 b=0;
		 }
           }
      );
	
});


/*
var con = document.getElementById('content');
var cul = document.getElementById('culinair');
var btn = document.getElementById("hideshow");
var span = document.getElementsByClassName("close")[0];

btn.onclick = function() {
    con.style.display = "block";
	cul.style.display = "none";
}*/
//span.onclick = function() {
//    con.style.display = "none";
//	cul.style.display = "block";
//}
/*
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == con) {
        con.style.display = "none";
    }
}*/
	</script>
<?php include ('includes/dfooter.php'); ?>