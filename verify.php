<?php
  session_start();
  $_SESSION['logtok'] = htmlspecialchars($_GET["token"]);
  $_SESSION['username'] = htmlspecialchars($_GET["username"]);
  $opts = array('http' =>
    array(
        'method'  => 'GET',
        'header'  => 'authentication: '.$_SESSION['logtok']
    )
);

$context  = stream_context_create($opts);

$result = file_get_contents("http://188.166.249.199/api/agent/".$_SESSION['username'], false, $context);
$json = json_decode($result, true);
//var_dump($json['username']);
//echo $_SESSION['logtok']."<br/>";

  if(isset($_SESSION['logtok'])&&isset($_SESSION['username'])&&($json['username']==$_SESSION['username'])){
  header("Location: dashboard.php");	  
  }
  
?>