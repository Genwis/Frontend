<?php 
session_start();
if(isset($_SESSION['logtok'])&&isset($_SESSION['username'])){
  $opts = array('http' =>
    array(
        'method'  => 'GET',
        'header'  => 'authentication: '.$_SESSION['logtok']
    )
);

$context  = stream_context_create($opts);

$result = file_get_contents("http://dev.generatorwisata.com/api/agent/".$_SESSION['username'], false, $context);
$json = json_decode($result, true);
//var_dump($json['username']);
//echo $_SESSION['logtok']."<br/>";

  if(($json['username']==$_SESSION['username'])){
  header("Location: dashboard.php");	  
  }
}
$sk=0;
include ('includes/headtag.php'); ?>
<div id='tablog'>
<div id='wraplog'>
<div id='padd'>
<h2>Genwis Partner</h2>
<h3>Welcome Back!</h3>
<p class='firstp'>
Sign your account and look at your statistic,
<br/>
manage attraction or manage of user.
<br/>
</p>
<div id='notice'></div>
<form method='POST' id="form" action="">
<label>Username</label>
<input class='texi' name="username" value='iampamungkas' type='text'>
<label>Password</label>
<input class='texi' name="password"  value='MTIzNDU2' type='password'>
<br/>
<input id="submit" type="submit" name="submit" value="Sign in">
</form>
<p>
Haven't registered yet? <a href='./register.php'>register</a>
</p>
</div>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>/*
    $(document).ready(function(){
        // click on button submit
        $("#submit").on('click', function(){
            // send ajax
            $.ajax({
                url: 'http://188.166.249.199/api/agents/login', // url where to submit the request
                type: 'POST', // type of action POST || GET
				contentType: 'application/json',
                dataType: 'json', // data type
                data: $("#form").serialize(), // post data || get data
                success : function(result) {
                    // you can see the result from the console
                    // tab of the developer tools
                    console.log(result);
                },
                error: function(xhr, resp, text) {
                    console.log(xhr, resp, text);
                }
            })
        });
    });*/
(function ($) {
    $.fn.serializeFormJSON = function () {

        var o = {};
        var a = this.serializeArray();
        $.each(a, function () {
            if (o[this.name]) {
                if (!o[this.name].push) {
                    o[this.name] = [o[this.name]];
                }
                o[this.name].push(this.value || '');
            } else {
                o[this.name] = this.value || '';
            }
        });
        return o;
    };
})(jQuery);

	$(document).ready(function(){
		
		
$("#form").on('submit', function(e) {
    e.preventDefault();
	$("#notice").css("display", "none");
    $.ajax({
        url: 'http://dev.generatorwisata.com/api/agents/login',
        type: "POST",
        dataType: 'json',
		contentType: 'text/plain',
        data: JSON.stringify($("#form").serializeFormJSON()),
		success : function(result) {
                    // you can see the result from the console
                    // tab of the developer tools
                    console.log(result);
					
					dat = $("#form").serializeFormJSON();
					//console.log(dat.username);
					if (result.hasOwnProperty("authentication")) {
location.href = './verify.php?token='+result.authentication+'&username='+dat.username;
}
					
                },
                error: function(xhr, resp, text) {
                    console.log(xhr, resp, text);
					console.log(JSON.stringify($("#form").serializeFormJSON()));
					$("#notice").html(JSON.parse(xhr.responseText).error);
					$("#notice").css("display", "table");
                }
    })
});
	});
</script>
</body>
</html>