<?php
session_start();
$opts = array('http' =>
    array(
        'method'  => 'DELETE',
        'header'  => 'authentication: '.$_SESSION['logtok']
    )
);

$context  = stream_context_create($opts);

$result = file_get_contents('http://dev.generatorwisata.com/api/agents/logout', false, $context);
unset($_SESSION["logtok"]);
header("Location: index.php");
?>