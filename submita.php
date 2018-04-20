<?php
  //if(isset($_SESSION['logtok'])&&isset($_SESSION['username'])&&($json['username']==$_SESSION['username'])){
 // header("Location: dashboard.php");	  
  //}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$name="";$website="";$phone="";$rec="";$price="";$route="";$locid="";$desc="";$lati="";$longti="";$culture="false";$outdoors="false";$history="false";$shopping="false";$wildlife="false";$beaches="false";$mountain="false";$museum="false";$amusement="false";$hidden_paradise="false";
if(isset($_POST['name']))$name=$_POST['name'];
if(isset($_POST['website']))$website=$_POST['website'];
if(isset($_POST['phone']))$phone=$_POST['phone'];
if(isset($_POST['rec']))$rec=$_POST['rec'];
if(isset($_POST['price']))$price=$_POST['price'];
if(isset($_POST['route']))$route=$_POST['route'];
if(isset($_POST['locid']))$locid=$_POST['locid'];
if(isset($_POST['desc']))$desc=$_POST['desc'];
if(isset($_POST['lati']))$lati=$_POST['lati'];
if(isset($_POST['longti']))$longti=$_POST['longti'];
if(isset($_POST['culture']))$culture=$_POST['culture'];
if(isset($_POST['outdoors']))$outdoors=$_POST['outdoors'];
if(isset($_POST['history']))$history=$_POST['history'];
if(isset($_POST['shopping']))$shopping=$_POST['shopping'];
if(isset($_POST['wildlife']))$wildlife=$_POST['wildlife'];
if(isset($_POST['beaches']))$beaches=$_POST['beaches'];
if(isset($_POST['mountain']))$mountain=$_POST['mountain'];
if(isset($_POST['museum']))$museum=$_POST['museum'];
if(isset($_POST['amusement']))$amusement=$_POST['amusement'];
if(isset($_POST['hidden_paradise']))$hidden_paradise=$_POST['hidden_paradise'];
echo "name: ".$name;echo "<br>";
echo "website: ".$website;echo "<br>";
echo "phone: ".$phone;echo "<br>";
echo "recommended duration: ".$rec;echo "<br>";
echo "Price: ".$price;echo "<br>";
echo "Route: ".$route;echo "<br>";
echo "location id: ".$locid;echo "<br>";
echo "description: ".$desc;echo "<br>";
echo "latitude: ".$lati;echo "<br>";
echo "longtitude: ".$longti;echo "<br>";
echo "culture: ".$culture;echo "<br>";
echo "outdoors: ".$outdoors;echo "<br>";
echo "history: ".$history;echo "<br>";
echo "shopping: ".$shopping;echo "<br>";
echo "wildlife: ".$wildlife;echo "<br>";
echo "beaches: ".$beaches;echo "<br>";
echo "mountain: ".$mountain;echo "<br>";
echo "museum: ".$museum;echo "<br>";
echo "amusement: ".$amusement;echo "<br>";
echo "hidden_paradise: ".$hidden_paradise;echo "<br>";

echo "<br><br><br><br>";
  }
?>
<form action="" method='POST'>
<label>Name: </label><input type='text' name='name'><br>
<label>Website: </label><input type='text' name='website'><br>
<label>Phone: </label><input type='text' name='phone'><br>
<label>Recommended duration: </label><input type='text' name='rec'><br>
<label>Price: </label><input type='text' name='price'><br>
<label>Route: </label><input type='text' name='route'><br>
<label>Location_id: </label><input type='text' name='locid'><br>
<label>Description: </label><input type='text' name='desc'><br>
<label>Coordinate latitude: </label><input type='text' name='lati'><br>
<label>Coordinate longtitude: </label><input type='text' name='longti'><br>
<label>Tags: </label><br>
<input type="checkbox" name="culture" value="true"> culture<br>
<input type="checkbox" name="outdoors" value="true"> outdoors<br>
<input type="checkbox" name="history" value="true"> history<br>
<input type="checkbox" name="shopping" value="true"> shopping<br>
<input type="checkbox" name="wildlife" value="true"> wildlife<br>
<input type="checkbox" name="beaches" value="true"> beaches<br>
<input type="checkbox" name="mountain" value="true"> mountain<br>
<input type="checkbox" name="museum" value="true"> museum<br>
<input type="checkbox" name="amusement" value="true"> amusement<br>
<input type="checkbox" name="hidden_paradise" value="true"> hidden paradise<br>
<br>
<label>Opening hours: </label><br>
<input type="checkbox" name="open" value="true"> open<br>
<label>time: </label><br>
<label>open: </label><input type='number' name='opent'><br>
<label>close: </label><input type='number' name='closet'><br>
<input type='submit' value='submit'>
</form>