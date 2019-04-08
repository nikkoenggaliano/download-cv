
<!DOCTYPE html>
<html>
<head>
	<title>Ping use shell_exec</title>
</head>
<style type="text/css">
	body{
    width:960px;
    margin:45px auto;
    background-color:#6665ee;
    
}
form{
    width:330px;
    border-top:1px dotted #D9D9D9;
    margin:10px auto
}
input[type="button"]{
    width: 35px;
}
button{
    width:246px;
    height:40px;
    color:#4C4C4C;
    margin-bottom:20px;
    margin-left:20px
}
input{
    width:250px;
    padding:5px;
    margin:10px 0 10px;
    border-radius:5px;
    border:4px solid #acbfa5
}
input[type = submit]{
    width:100px;
    background-color:#6665ee;
    border-radius:5px;
    border:2px solid #4443ea;
    color:#fff
}
h4{
    color:#4C4C4C;
    text-align:center
}
.container{
    text-align:center;
    width:50%;
    border-left:1px solid #D0D0D0;
    background-color:#fff;
    padding-top:40px;
    padding-bottom:40px;
    border-radius:5px;
    margin: 0 auto;
}

</style>
<body>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">

<h4>Enter Host Here!</h4>
<form action="" method="POST">
    <input type="text" name="host" placeholder="8.8.8.8" />
    <br>
    <br>
    <input type="submit" value="Submit">
</form>

<h4>Ping Result</h4>
<span>
	<?php 

	if(isset($_POST['host'])){
		$host = escapeshellarg($_POST['host']);
		echo shell_exec(escapeshellcmd('ping '.$host));
	}

	?>

</span>
</div>
</body>
</html>