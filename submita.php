<?php
  //if(isset($_SESSION['logtok'])&&isset($_SESSION['username'])&&($json['username']==$_SESSION['username'])){
 // header("Location: dashboard.php");	  
  //}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$name="";$website="";$phone="";$rec="";$price="";$route="";$locid="";$desc="";$lati="";$longti="";$culture=false;$outdoors=false;$history=false;$shopping=false;$wildlife=false;$beaches=false;$mountain=false;$museum=false;$amusement=false;$hidden_paradise=false;
$open=false;
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
if(isset($_POST['culture']))$culture=true;
if(isset($_POST['outdoors']))$outdoors=true;
if(isset($_POST['history']))$history=true;
if(isset($_POST['shopping']))$shopping=true;
if(isset($_POST['wildlife']))$wildlife=true;
if(isset($_POST['beaches']))$beaches=true;
if(isset($_POST['mountain']))$mountain=true;
if(isset($_POST['museum']))$museum=true;
if(isset($_POST['amusement']))$amusement=true;
if(isset($_POST['hidden_paradise']))$hidden_paradise=true;

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
//var_dump($_POST['file']);
//file_get_contents( $_FILES['YOUR_FILE_FIELD_NAME']['tmp_name'] );
//echo $_FILES["photo"]['tmp_name'];
if(isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0){
	$atrid="";
	if(isset($_POST['atrid']))$atrid=$_POST['atrid'];
	define('MULTIPART_BOUNDARY', '--------------------------'.microtime(true));
	$header = 'Authentication: eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJleHAiOiIyMDE4LTA0LTE0VDE2OjMwOjI5LjcxMTg2NDg1NyswNzowMCIsInNpZCI6ImJiNDZkYmI2LTdjMDAtNDM1NC04MmU5LWQyYzA5MmJlMTMyMSIsInR5cCI6ImxvY2FscGFydG5lciJ9.XPIO60Qzgi0leJna0HVJz0pataKhMpMAQAqmR-sZL34;\r\n
Content-Type: multipart/form-data;\r\n
content-Type: multipart/form-data; boundary=----WebKitFormBoundary7MA4YWxkTrZu0gW';//.MULTIPART_BOUNDARY;
	define('FORM_FIELD', 'photo'); 
	$filename = $_FILES["photo"]["tmp_name"];//"/path/to/uploaded/file.zip";
$file_contents = file_get_contents($_FILES["photo"]['tmp_name']);    

$content =  "--".MULTIPART_BOUNDARY."\r\n".
            "Content-Disposition: form-data; name=\"".FORM_FIELD."\"; filename=\"".basename($filename)."\"\r\n".
            "Content-Type: application/zip\r\n\r\n".
            $file_contents."\r\n";

// add some POST fields to the request too: $_POST['foo'] = 'bar'
$content .= "--".MULTIPART_BOUNDARY."\r\n".
            "Content-Disposition: form-data; name=\"foo\"\r\n\r\n".
            "bar\r\n";

// signal end of request (note the trailing "--")
$content .= "--".MULTIPART_BOUNDARY."--\r\n";
$context = stream_context_create(array(
    'http' => array(
          'method' => 'POST',
          'header' => $header,
          'content' => $content
    )
));
	$res=file_get_contents('http://api.generatorwisata.com/api/attraction/upload/'.$atrid, false, $context);
	echo $res;
	
	
	
	echo "uploaded";
	//var_dump(file_get_contents($_FILES["photo"]['tmp_name']));
}
echo "<br><br><br><br>";
  }
?>
<form action="" method='POST'>
<h1>ADD</h1>
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
<form action="" method='POST' enctype="multipart/form-data">
<h1>UPDATE</h1>
<label>Attraction id: </label><input type='text' name='atrid'><br>
<label>photo: </label><input type="file" name="photo">
<input type='submit' value='submit'>
</form>