<div id='navleft'>
<a class='logog nound' href='#'>
Genpart
</a>
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
<div id='navco'>
<div class='titl'><?php echo $titl;?></div> <div class='rightsd'><img class='notif' src='./icon/noactive/notifications-bell-button.png'/> <img src='/' class='fotop'/> Hello, Nara</div>
<div style='clear:both;'></div>
</div>
<div id='realmain'>