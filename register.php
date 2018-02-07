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
$sk=1;
include ('includes/headtag.php'); ?>
<div id='tablog'>
<div id='wraplog'>
<div id='padd'>
<h2>Genwis Partner</h2>
<h3>Welcome!</h3>
<p class='firstp'>
Register your account and be ready
<br/>
to user powerful fiture !
<br/>
</p>
<div id='notice'></div>
<form method='POST' id="form" action="" onsubmit="">
<label>E-mail</label>
<input class='texi' id='pass3' name="email" placeholder='youremail@example.com' type='email'>
<label>Username</label>
<input class='texi' id='pass4' name="username" placeholder='username' type='text'>
<label>Password</label>
<input class='texi' id='pass1' name="password" placeholder='must have at least 6 characters' type='password'>
<label>Re-type Password</label>
<input class='texi' id='pass2' type='password'>
<br/>
<input id="submit" type="submit" name="submit" value="Sign in">
</form>
<p>
Already registered? <a href='./login.php'>login</a>
</p>
</div>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
/*function myFunction() {

    return ok;
}*/
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
	document.getElementById("pass3").style.borderColor = "#e0e0e0";
	document.getElementById("pass4").style.borderColor = "#e0e0e0";
	document.getElementById("pass2").style.borderColor = "#e0e0e0";
	document.getElementById("pass1").style.borderColor = "#e0e0e0";
		var pass3 = document.getElementById("pass3").value;
    var pass1 = document.getElementById("pass1").value;
    var pass2 = document.getElementById("pass2").value;
var pass4 = document.getElementById("pass4").value;
if(pass3==null||pass3==""||pass2==null||pass2==""||pass1==null||pass1==""||pass4==null||pass4==""){
	if(pass3==null||pass3==""){
		document.getElementById("pass3").style.borderColor = "#E34234";
	}
	if(pass4==null||pass4==""){
		document.getElementById("pass4").style.borderColor = "#E34234";
	}
	if(pass2==null||pass2==""){
		document.getElementById("pass1").style.borderColor = "#E34234";
	}
	if(pass1==null||pass1==""){
		document.getElementById("pass2").style.borderColor = "#E34234";
	}
	$("#notice").html("Please fill all the fields!");
	$("#notice").css("display", "table");
	}else if (pass1 != pass2) {
        document.getElementById("pass1").style.borderColor = "#E34234";
        document.getElementById("pass2").style.borderColor = "#E34234";
        $("#notice").html("Password doesn't match");
		$("#notice").css("display", "table");
    }
    else {
		    $.ajax({
        url: 'http://dev.generatorwisata.com/api/agent',
        type: "POST",
        dataType: 'json',
		contentType: 'text/plain',
        data: JSON.stringify($("#form").serializeFormJSON()),
		success : function(result) {
                    // you can see the result from the console
                    // tab of the developer tools
                    console.log("ini resultnya "+JSON.stringify(result, null, 4));
					
					dat = $("#form").serializeFormJSON();
					//console.log(dat.username);
					if (result.hasOwnProperty("id")) {
//location.href = './verify.php?token='+result.authentication+'&username='+dat.username;
//location.href = './dashboard.php';
    $.ajax({
        url: 'http://dev.generatorwisata.com/api/agents/login',
        type: "POST",
        dataType: 'json',
		contentType: 'text/plain',
        data: '{"username":"'+dat.username+'","password":"'+dat.password+'"}',
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
					alert('passworde salah coe');
                }
    })
}
					
                },
                error: function(xhr, resp, text) {
                    console.log(xhr, resp, text);
					console.log(JSON.parse(xhr.responseText).error);
					console.log(JSON.stringify($("#form").serializeFormJSON()));
					if(JSON.parse(xhr.responseText).error=="this agent already exist"){
						document.getElementById("pass4").style.borderColor = "#E34234";
					}else if(JSON.parse(xhr.responseText).error=="Email Already Used"){
						document.getElementById("pass3").style.borderColor = "#E34234";
					}
					$("#notice").html(JSON.parse(xhr.responseText).error);
					$("#notice").css("display", "table");
                }
    })
    }

});
	});
/*
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
	
	

</script>
</body>
</html>