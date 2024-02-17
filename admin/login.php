<?php
include("header.php");
include("../classes/connect_db.php");

if($_POST['username'] != '' && $_POST['password'] != ''){
	$user = $_POST['username'];
	$pass = $_POST['password'];
//echo $user . ' ' . $pass;
	if ($user != '' && $pass !='') {
		$sql = "SELECT * FROM users WHERE username='" . $user . "' AND pass='" .$pass . "'";
		$result = $conn->query($sql);
		//echo "Returned rows are: " . $result->num_rows;
		if($result->num_rows > 0) {
		$_SESSION['username'] = $user;
		$_SESSION['password'] = $pass;
		print_r($_SESSION);
		header('Location: admin.php');
		}else {
			$_SESSION = Array();
		}
	}

mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html lang="lv">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<link href='login_style.css' rel='stylesheet' type='text/css' />
    <title>Login</title>
	<script src="javascript.js"></script>
  </head>
<body>	

<div class="logo" style="text-align: right;">
			<a href='../index.php'>
				<img src='../images/icons/log-out.png' alt='' style="padding: 10px; width:100px; height: 100px;">		
			</a>
</div>
<div class="wrapper">
	<form class="form-register" method="post" action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>
' name="regform"
onsubmit="return validate();" >   
		<legend class="legend">Administrator login</legend>  
		<div class="panel">
				<label>User:</label>
			<div>
				<input type="text" class="form-control" name="username" required="" value="" />
			</div>
				<label>Password:</label>
			<div>
				<input type="password" class="form-control" name="password" required="" value="" />
			</div>
		</div>
			<div class="btn-move">
				<input type="submit" class="btn-primary" value="Login" />
			</div>
	</form>		
</div>
</body>
</html>