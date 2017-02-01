<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>redirecting</title>
    <link rel="stylesheet" type="text/css" href="../../dist/sweetalert.css">
    <script type="text/javascript" src="../../dist/sweetalert.min.js"></script>
</head>
<body>

<?php

	session_start();

   	$pdo = new PDO('mysql:host=localhost;dbname=yesido;charset=UTF8', 'root', '' );
   	if (isset($_POST['loginSubmit'])) {
   		$username = $_POST['username'];
   		$password = $_POST['password'];
   	}
   	$do = $pdo->prepare("SELECT * FROM users WHERE username=:username AND password=:password");
	$do->bindparam(':username', $username);
	$do->bindparam(':password', $password);
	$do->execute();
	$count = $do->rowCount();
	$row = $do->fetch(PDO::FETCH_ASSOC);

	if ($count > 0 && $password == $row['password']) {
	 	// echo "login successful";
	 	$_SESSION['user_session'] = $row['id'];

	 	header('location:../../dashboard.php');
	 }
	else {
		echo "<script type='text/javascript'>
			sweetAlert(\"Oops...\", \"Either your username or password is wrong\", \"error\");
   
			function Redirect() {
			   window.location=\"http://localhost/UndI/login.php\";
			}
			setTimeout('Redirect()', 2000);
			

		</script>";
	}

	$pdo = NULL;
?>

</body>
</html>