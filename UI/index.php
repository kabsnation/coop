<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
	<form action="" method="POST">
		<input type="text" name="username" id="username">
		<input type="text" name="password" id="password">
		<input type="submit" text="Log In" onclick="submitLogin(username.value,password.value)">
		<input type="text" name="text">
		<h3 id="label" name="label"></h3>
	</form>
</body>
</html>

<script type="text/javascript">
	function submitLogin(username,password){
		$.ajax({
			type:"POST",
			url: "loginFunction.php",
			data:'password='+password+",username="+username,
			success:function(data){
				alert(data);
			}
		});
	}
</script>
