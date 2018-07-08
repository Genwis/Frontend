<?php
  //if(isset($_SESSION['logtok'])&&isset($_SESSION['username'])&&($json['username']==$_SESSION['username'])){
 // header("Location: dashboard.php");	  
  //}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$name="";$website="";$phone="";$rec="";$price="";$route="";$locid="";$desc="";$lati="";$longti="";$culture=false;$outdoors=false;$history=false;$shopping=false;$wildlife=false;$beaches=false;$mountain=false;$museum=false;$amusement=false;$hidden_paradise=false;
$open1=false;$opent1="";$closet1="";
$open2=false;$opent2="";$closet2="";
$open3=false;$opent3="";$closet3="";
$open4=false;$opent4="";$closet4="";
$open5=false;$opent5="";$closet5="";
$open6=false;$opent6="";$closet6="";
$open7=false;$opent7="";$closet7="";
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

if(isset($_POST['open1']))$open1=true;
if(isset($_POST['open2']))$open2=true;
if(isset($_POST['open3']))$open3=true;
if(isset($_POST['open4']))$open4=true;
if(isset($_POST['open5']))$open5=true;
if(isset($_POST['open6']))$open6=true;
if(isset($_POST['open7']))$open7=true;

if($open1==true){$opent1=$_POST['opent1'];$closet1=$_POST['closet1'];}
if($open2==true){$opent2=$_POST['opent2'];$closet2=$_POST['closet2'];}
if($open3==true){$opent3=$_POST['opent3'];$closet3=$_POST['closet3'];}
if($open4==true){$opent4=$_POST['opent4'];$closet4=$_POST['closet4'];}
if($open5==true){$opent5=$_POST['opent5'];$closet5=$_POST['closet5'];}
if($open6==true){$opent6=$_POST['opent6'];$closet6=$_POST['closet6'];}
if($open7==true){$opent7=$_POST['opent7'];$closet7=$_POST['closet7'];}

/*
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
echo "hidden_paradise: ".$hidden_paradise;echo "<br>";*/
//var_dump($_POST['file']);
//file_get_contents( $_FILES['YOUR_FILE_FIELD_NAME']['tmp_name'] );
//echo $_FILES["photo"]['tmp_name'];

if(isset($_POST['name'])){
	
	$data = array(
  'name' => $name,
  'website' => $website,
  'phone_number' => $phone,
  'recommended_duration' => (int)$rec,
  'price' => (int)$price,
  'route' => $route,
  'location_id' => $locid,
  'description' => $desc,
  'coordinate' => array(
	'latitude' => $lati,
	'longitude' => $longti
  ),
  'tags' => array(
	'culture' => $culture,
	'outdoors' => $outdoors,
	'history' => $history,
	'shopping' => $shopping,
	'wildlife' => $wildlife,
	'beaches' => $beaches,
	'mountain' => $mountain,
	'Museum' => $museum,
	'Amusement' => $amusement,
	'hidden_paradise' => $hidden_paradise
  ),
  'opening_hours' => array(
  array(
  'open' => $open1,
  'time' => array(
	'open' => ((int)$opent1)*60,
	'close' => ((int)$closet1)*60
	)
  ),
  array(
  'open' => $open2,
  'time' => array(
	'open' => ((int)$opent2)*60,
	'close' => ((int)$closet2)*60
	)
  ),
  array(
  'open' => $open3,
  'time' => array(
	'open' => ((int)$opent3)*60,
	'close' => ((int)$closet3)*60
	)
  ),
  array(
  'open' => $open4,
  'time' => array(
	'open' => ((int)$opent4)*60,
	'close' => ((int)$closet4)*60
	)
  ),
  array(
  'open' => $open5,
  'time' => array(
	'open' => ((int)$opent5)*60,
	'close' => ((int)$closet5)*60
	)
  ),
  array(
  'open' => $open6,
  'time' => array(
	'open' => ((int)$opent6)*60,
	'close' => ((int)$closet6)*60
	)
  ),
  array(
  'open' => $open7,
  'time' => array(
	'open' => ((int)$opent7)*60,
	'close' => ((int)$closet7)*60
	)
  )
)  
);
//echo '<pre>' . var_export(json_encode( $data ), true) . '</pre>';
	//var_dump(json_encode( $data ));
	$optionsz = array(
  'http' => array(
    'method'  => 'POST',
    'content' => json_encode( $data ),
    'header'=>  
				"Authentication: WshVVPQWJjdjOZckJvsdOiVGwp3KkMNQvPNCjXehlMVEt4s7EYN3lvybTs8TWwPPZvwLvensenLo6cOHVR01inbulpZgXcaQCwpenKU6CgVW53YiZt34mdBY\r\n".
				"Content-Type: application/json\r\n"
    )
);

$contextz  = stream_context_create( $optionsz );
$resultz = file_get_contents( 'http://api.generatorwisata.com/api/attraction', false, $contextz );
$responsez = json_decode( $resultz,true );

//var_dump($responsez);
echo "<div class='notif'> ID Generated: ".$responsez['id']."</div>";
}

//8e6c2134-0ad7-41ce-8365-a4d686a8ef0f
if(isset($_FILES["file"]) && $_FILES["file"]["error"] == 0){
	$atrid="";
	if(isset($_POST['atrid']))$atrid=$_POST['atrid'];
		define('FORM_FIELD', 'file'); 
	$filename = $_FILES["file"]["tmp_name"];//"/path/to/uploaded/file.zip";
$file_contents = file_get_contents($_FILES["file"]['tmp_name']);    
	define('MULTIPART_BOUNDARY', '--------------------------'.microtime(true));
	//define('MULTIPART_BOUNDARY', '----WebKitFormBoundary7MA4YWxkTrZu0gW');//.microtime(true));
	$header = 
"Authentication: WshVVPQWJjdjOZckJvsdOiVGwp3KkMNQvPNCjXehlMVEt4s7EYN3lvybTs8TWwPPZvwLvensenLo6cOHVR01inbulpZgXcaQCwpenKU6CgVW53YiZt34mdBY
Content-Type: multipart/form-data; boundary=----WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Length: ". filesize($filename)."\r\n\r\n"; //boundary=----WebKitFormBoundary7MA4YWxkTrZu0gW";

//'\r\nContent-Type: multipart/form-data; boundary=----WebKitFormBoundary7MA4YWxkTrZu0gW';//.MULTIPART_BOUNDARY;//Content-Type: multipart/form-data\r\n



/*
$content =  "--".MULTIPART_BOUNDARY."\r\n".
            "Content-Disposition: form-data; name=\"".FORM_FIELD."\"; filename=\"".basename($filename)."\"\r\n".
            "Content-Type: image/jpeg\r\nContent-Length: ". filesize($filename)."\r\n\r\n".$file_contents."\r\n";

// add some POST fields to the request too: $_POST['foo'] = 'bar'
$content .= "--".MULTIPART_BOUNDARY."\r\n".
            "Content-Disposition: form-data; name=\"id\"\r\n\r\n".
            $_POST['atrid']."\r\n";

// signal end of request (note the trailing "--")
$content .= "--".MULTIPART_BOUNDARY."--\r\n";
*/
//$content ="aaaaa";//
$yy="kk.png";
$content =  "--".MULTIPART_BOUNDARY."\r\n".
            "Content-Disposition: form-data; name=\"".FORM_FIELD."\"; filename=\"".basename($filename)."\"\r\n".
            "Content-Type: image/png\r\n
\r\n".$file_contents."\r\n";
$content .= "--".MULTIPART_BOUNDARY."--";
echo '<pre>' . var_export($header, true) . '</pre>';
echo '<pre>' . var_export($content, true) . '</pre>';
//echo "enddd";
//echo $content;
$context = stream_context_create(array(
    'http' => array(
          'method' => 'POST',
          'header' => $header,
          'content' => $content
    )
));
//echo '<pre>' . var_export($context, true) . '</pre>';
	$res=file_get_contents('http://api.generatorwisata.com/api/attraction/upload/'.$atrid, false, $context);
	echo $res;
	var_dump($http_response_header);
	//echo basename($filename);
	//echo $_POST['atrid'];
	echo http_get_request_body();
	echo "uploaded";
	//var_dump(file_get_contents($_FILES["photo"]['tmp_name']));
}
echo "<br><br><br><br>";
  }
  
$getloc = json_decode(file_get_contents('http://api.generatorwisata.com/api/locations',false),true);
//echo $getloc;

?>
<form action="" method='POST'>
<h1>ADD</h1>
<label>Name: </label><input type='text' name='name'><br>
<label>Website: </label><input type='text' name='website'><br>
<label>Phone: </label><input type='text' name='phone'><br>
<label>Recommended duration: </label><input type='text' name='rec'><br>
<label>Price: </label><input type='text' name='price'><br>
<label>Route: </label><input type='text' name='route'><br>
<!--<label>Location_id: </label><input type='text' name='locid'><br>-->
<label>Location_id: </label>
<select name='locid'>
<?php
foreach($getloc as $item) { //foreach element in $arr
    //$uses = ; //etc
	echo '<option value="'.$item['id'].'">'.$item['city'].'</option>';
	

}
  ?>
 
</select>
<br>
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
<h3>Senin</h3>
<input type="checkbox" name="open1" value="true"> open<br>
<label>time: </label><br>
<label>open: </label><input type='number' name='opent1'><br>
<label>close: </label><input type='number' name='closet1'><br>
<h3>Selasa</h3>
<input type="checkbox" name="open2" value="true"> open<br>
<label>time: </label><br>
<label>open: </label><input type='number' name='opent2'><br>
<label>close: </label><input type='number' name='closet2'><br>
<h3>Rabu</h3>
<input type="checkbox" name="open3" value="true"> open<br>
<label>time: </label><br>
<label>open: </label><input type='number' name='opent3'><br>
<label>close: </label><input type='number' name='closet3'><br>
<h3>Kamis</h3>
<input type="checkbox" name="open4" value="true"> open<br>
<label>time: </label><br>
<label>open: </label><input type='number' name='opent4'><br>
<label>close: </label><input type='number' name='closet4'><br>
<h3>Jumat</h3>
<input type="checkbox" name="open5" value="true"> open<br>
<label>time: </label><br>
<label>open: </label><input type='number' name='opent5'><br>
<label>close: </label><input type='number' name='closet5'><br>
<h3>Sabtu</h3>
<input type="checkbox" name="open6" value="true"> open<br>
<label>time: </label><br>
<label>open: </label><input type='number' name='opent6'><br>
<label>close: </label><input type='number' name='closet6'><br>
<h3>Minggu</h3>
<input type="checkbox" name="open7" value="true"> open<br>
<label>time: </label><br>
<label>open: </label><input type='number' name='opent7'><br>
<label>close: </label><input type='number' name='closet7'><br>
<input type='submit' value='submit'>
</form>
<!--
<form action="" method='POST' enctype="multipart/form-data">
<h1>ADD PHOTO</h1>
<label>Attraction id: </label><input type='text' name='atrid' value='8e6c2134-0ad7-41ce-8365-a4d686a8ef0f'><br>
<label>photo: </label><input type="file" name="file">
<input type='submit' value='submit'>
</form>-->
<h1>ADD PHOTO</h1>

<form id="ajax-upload" action="http://api.generatorwisata.com/api/attraction/upload/64402cc8-fc01-4c7e-a0c8-887e145b21e1" method="post" enctype="multipart/form-data">
<label>Attraction id: </label><input id='aidi' type='text' name='atrid'><br><br>

File: <input type="file" name="submitted"><br><br>
<!--<input type="hidden" name="type" value="image/jpeg"/>
<input type="hidden" name="name" value="foto.jpg"/>-->
  <button type="submit">Upload</button>
</form>
<div id="result"></div>
<script>
/*
document.addEventListener("DOMContentLoaded", function(){
      document.getElementById('ajax-upload').addEventListener("submit", function(e){
        e.preventDefault()
        var form = e.target
        var data = new FormData(form)
        
        var request = new XMLHttpRequest()
        //data.append('file', {uri: isrc, type: 'image/jpeg', name: 'photoProfile.jpeg'})
        request.onreadystatechange = function(){
          document.getElementById("result").innerText = request.responseText
        }
        
        request.open(form.method, form.action)//ini ntar ganti
		request.setRequestHeader('Content-Type', 'multipart/form-data')
		request.setRequestHeader('Authentication', 'WshVVPQWJjdjOZckJvsdOiVGwp3KkMNQvPNCjXehlMVEt4s7EYN3lvybTs8TWwPPZvwLvensenLo6cOHVR01inbulpZgXcaQCwpenKU6CgVW53YiZt34mdBY')
        request.send(data)
      })
    })*/
	document.addEventListener("DOMContentLoaded", function(){
      document.getElementById('ajax-upload').addEventListener("submit", function(e){
        e.preventDefault()
		var input = document.querySelector('input[type="file"]')
		
		var atrid = document.getElementById("aidi").value;
		let data = new FormData()
      data.append('file', input.files[0])
	fetch("http://api.generatorwisata.com/api/attraction/upload/"+atrid, {
      method: 'POST',
      headers: {
        'Accept': 'application/json',
        //'Content-Type': 'multipart/form-data',
        'Authentication': 'WshVVPQWJjdjOZckJvsdOiVGwp3KkMNQvPNCjXehlMVEt4s7EYN3lvybTs8TWwPPZvwLvensenLo6cOHVR01inbulpZgXcaQCwpenKU6CgVW53YiZt34mdBY'
      },
      body: data
    }).then((response) => response.text())
      .then((responseText) => {
         console.log(responseText);
		 alert('upload sukses');
      }).catch((error) => {
      console.error(error);
    });
	
	

	/*
var data = new FormData()
data.append('file', input.files[0])
data.append('user', 'hubot')

fetch('/avatars', {
  method: 'POST',
   headers: {
        'Accept': 'application/json',
        'Content-Type': 'multipart/form-data',
        'Authentication': 'WshVVPQWJjdjOZckJvsdOiVGwp3KkMNQvPNCjXehlMVEt4s7EYN3lvybTs8TWwPPZvwLvensenLo6cOHVR01inbulpZgXcaQCwpenKU6CgVW53YiZt34mdBY'
      },
  body: data
})*/
	
	
	
	})
    })
</script>
<style>
.notif{
	    display: table;
    background: #5fcc80;
    padding: 10px 20px;
    border: 1px solid #66ad6c;
    border-radius: 5px;
    color: #fff;
}