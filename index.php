<!DOCTYPE html>
<html lang="en">
<head>
  <title>Genwis</title>
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
$(document).ready(function(){
    $("#burger").click(function(){
        $(".abso").toggleClass("active");
    });
});
</script>
</head>
<body>
<div class="full">
<div class='bag' id='opener'>
<nav id='barnav'>
<div class='juds'>Genwis</div>	<div class='menus'><button href="javascript:void(0);" id='burger' class="burger" >&#9776;</button><div class='abso'><a href='#howitworks' class='m'>Cara Kerja</a> <a href='#features' class='m'>Fitur</a> <a href='#about' class='m'>Tentang Kami</a><span class='signin whitebut' href='#'></span></div> </div>

</nav>
<div class='ghost'>
<div class='daleman'>


<h1><span class='gpart'>Genwis</span>, aplikasi untuk kebutuhan wisatamu!</h1>
<p>
Genwis adalah aplkasi mobile yang dapat mengatur rencana perjalanan wisata anda dengan mudah
<br/>
berdasarkan kota tujuan, jangka waktu dan budget sesuai dengan yang anda tentukan.
</p>
<a href='#' class='getstart'>Mulai Sekarang</a>
</div>
</div>

</div>



<div class='micin' id='howitworks'>
<h2 class='howi'>Cara Kerja</h2>
<hr/>
<div id='conq'>
<div class='wite'>
</div>
<div class='norm'>
<div class='insd'>
<div class='logat' id='reg'></div>
<h3>Log In Akun</h3>
<p>
Daftarkan akun dan login akun<br/>
anda sebelum mulai generate<br/>
itinerary wisata.
</p>
</div>
</div>
<div class='norm'>
<div class='insd'>
<div class='logat' id='atr'></div>
<h3>Generate Itinerary</h3>
<p>
Isi formulir kota tujuan,  budget,<br/>
dan jangka waktu sebagai<br/>
penentuan itinerary.
</p>
</div>
</div>
<div class='norm'>
<div class='insd'>
<div class='logat' id='cal'></div>
<h3>Pesan Itinerary</h3>
<p>
Kedepannya, Genwis akan bisa<br/>
memesan itinerary langsung<br/>
melalu aplikasi Genwis.
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
<h2>Nikmati Wisatamu dengan <span style='color:#45d081'>3</span> fitur yang menarik!</h2>

<p id='par1'>
Genwis mempunyai beberapa fitur yang dapat anda nikmati diantaranya generate, booking dan change.
</p>
<div>
<div class='bults' id='vie'></div>
<h3>Generate</h3>
<p>
Anda dapat melihat rencana perjalan wisata berdarakan budget, kota tujuan dan jangka waktu yang anda inginkan.
</p>
<div style='clear:both;'></div>
<div class='bults' id='mna'></div>
<h3>Change</h3>
<p>
Anda dapat mengganti setiap attraction jika anda merasa attraction tersebut kurang menarik.
</p>
<div style='clear:both;'></div>
<div class='bults' id='mnu'></div>
<h3>Book</h3>
<p>
Anda dapat memesan rencana perjalan wisata yang telah anda tentukan dengan mudah melalui aplikasi genwis.
</p>
<div style='clear:both;'></div>
</div>
</div>
</div>
<div class='micin' id='about'>
<h2 class='mailh'>Masukan <i>E-mail</i> anda di sini untuk mendapatkan informasi kami</h2>
<div class='modalb' id='subox'>
<div id='mailrap'><div id='mail'></div><input type='text' class='inputs' placeholder='Tik alamat e-mail anda di sini'> <a class='whitebut send' href='#'>Kirim</a></div>
</div>
</div>

<?php //include ('includes/footer.php'); ?>
<footer>
<div class='bag' id='allr'>
<div id='genlog'></div>
All rights reserved
</div>
<div class='bag'>
<h3>Pranala</h3>
<ul>
<li><a href='#howitworks'>Cara Kerja</a></li>
<li><a href='#features'>Fitur</a></li>
<li><a href='#about'>Tentang Kami</a></li>
</ul>
</div>
<div class='bag' id='contact'>
<h3>Kontak</h3>
<ul>
<li>(+62)87734201000</li>
<li>genwisdev@gmail.com</li>
<li>Jl. Sukabirus Near Telkom University</li>
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