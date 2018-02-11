<!DOCTYPE html>
<html lang="en" class='dhtml'>
<head>
  <title>Genpart</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--<link rel="stylesheet" href="./css/bootstrap.min.css">-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="./css/damzmicin.css">
  <link rel="stylesheet" href="./css/reset.css">
  <script>
/*
window.history.pushState("object or string", "Title", "./new-url");
*/
/*
$(function() {
      $("#ham").click( function()
           {

        $("#navleft").css('left','0' );

           }
      );
});*/

$(document).ready(function() {
  /*$('#ham').click(function() {
    //$("#navleft").toggleClass("down");
	$('#navleft').animate({'left':'0px'}, 500)
  });*/
  /*
  $( "#ham" ).click(function() {     
    if($('#navleft:visible').length)
        $('#navleft').hide("slide", { direction: "left" }, 1000);
    else
        $('#navleft').show("slide", { direction: "left" }, 1000);        
});*/
/*
$('#ham').click(function() {
 $('#navleft').toggle(function() {
   $(this).animate({ 
	 'left':'-100%'
   }, 500);
   },
   function() {
   $(this).animate({ 
     'left':'0'
   }, 500);
 });
});*/
/*
 $("#ham").click(function(){
     if($("#navleft").css('left') == '0%'){
       $("#navleft").stop().animate({left:'-100%'},1000);
     };
     if($("#navleft").css('left') == '-100%'){
        $("#navleft").stop().animate({left:'0%'},1000);
     };
 });
 */
//$("#navleft").css("left",'-'+$("#navleft").width()+'px');
$("#mainthing").css("margin-left",$("#navleft").width()+'px');
 var i = 1;
$("#ham").on('click', function(){
    if(i == 0) {
        $("#navleft").stop().animate({left:'0%'},500);
		$("#mainthing").stop().animate({marginLeft:$("#navleft").width()+'px'},500);
        i = 1;
    } else {
        $("#navleft").stop().animate({left:'-'+$("#navleft").width()+'px'},500);
		$("#mainthing").stop().animate({marginLeft:0},500);
        i = 0;
    }

});
var k = 1;
$("#menub").click( function()
           {
			   if(k==1){
             $("#menup").css("display","block");
			 k=0;
			   }
		 else{
			 $("#menup").css("display","none");
			 k=1;
		 }
           }
      );



});
</script>
</head>
<body class='dbbod'>
<div id='navco'>
<div class='titl'><button id='ham'></button><span class='logog nound'>
Genpart
</span></div> <div class='rightsd'><img class='notif' src='./icon/noactive/notifications-bell-button.png'/> <img src='./property/tempo/pogchamp.jpg' class='fotop'/> Hello, <?php echo $_SESSION['username'];?> <button id='menub'></button><div id='menup'><a id='logou' href='./logout.php'>Logout</a></div></div>
<div style='clear:both;'></div>
</div>
<div style=''>
<div id='navleft'>

<div class='widg' id='utam'>
<h4>MENU</h4>
<nav class="nav flex-column utama">
  <a class="nav-link <?php if($dsb==true){echo "actived";}?>" href="./dashboard.php"><img src="<?php if($dsb==true){echo "./icon/active/dashboard.png";}else{echo "./icon/noactive/dashboard.png";} ?>"/> Dashboard</a>
  <a class="nav-link <?php if($atr==true){echo "actived";}?>" href="./attraction.php"><img src="<?php if($atr==true){echo "./icon/active/international-delivery-1.png";}else{echo "./icon/noactive/international-delivery-1.png";} ?>"/> Attraction</a>
  <a class="nav-link <?php if($mng==true){echo "actived";}?>" href="./manage.php"><img src="<?php if($mng==true){echo "./icon/active/user-2.png";}else{echo "./icon/noactive/user-2.png";} ?>"/> Manage User</a>
  <a class="nav-link <?php if($stg==true){echo "actived";}?>" href="./settings.php"><img src="<?php if($stg==true){echo "./icon/active/settings-1.png";}else{echo "./icon/noactive/settings-1.png";} ?>"/> Settings</a>
</nav>
</div>
<div id='borderer'></div>
<div class='widg'>
<h4>OTHERS</h4>
<nav class="nav flex-column secondm">
  <a class="nav-link" href="#">Need Help?</a>
  <a class="nav-link" href="#">How it Works</a>
  <a class="nav-link" href="#">Learn More</a>
</nav>
</div>
</div>
<div id='mainthing'>

<div id='realmain'>