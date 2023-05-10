<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>
	<?php
	// echo '<pre>';
	// var_dump($_POST);
	// echo '</pre>';
	// if(isset($_POST['login'])){
	//     $username = $_POST['username'] ?? null;
	//     $password = $_POST['password'] ?? null;
	//     echo $username.$password;
	// }
	
	require('database.php');
	if (isset($_POST['loginForm'])) {
		$username = $_POST['username'] ?? null;
		$password = $_POST['password'] ?? null;

		//tranh cac TH hack thong tin
		$username = trim($username);
		$username = htmlspecialchars($username);
		$username = strip_tags($username);

		$password = sha1($password . '@NguyenVanTes!$');

		$sql = "select * from user where username = '" . $username . "' and password = '" . $password . "'";

		$result = mysqli_query($conn, $sql);

		$rows = mysqli_num_rows($result);

		if ($rows > 0) {
			$_SESSION['username'] = $username;
			echo 'user co trong he thong';
		} else {
			echo 'ten dang nhap or mat khau sai';
		}
	}
	if (isset($_POST['dangxuat'])) {
		session_unset(); //bo het tat ca cac bien trong session //session_destroy: xoa het all toan bo bien 
	}

	if (isset($_GET['lang'])) {
		// setcookie('lang', $_GET['lang'], time() - 86400);
		setcookie('lang', $_GET['lang'], time() + 86400);
		$_COOKIE['lang'] = $_GET['lang'];
	}
	?>

	<?php if (!isset($_SESSION['username'])) { ?>

		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
			<label>Username</label>
			<input type="text" placeholder="username" name="username">
			<br>
			<label>Password</label>
			<input type="password" placeholder="password" name="password">
			<br>
			<input type="submit" value="Login" class="btn float-right login_btn" name="loginForm">

		</form>
	<?php } else { ?>
		<a href="?lang=vi"><img
				src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/21/Flag_of_Vietnam.svg/1280px-Flag_of_Vietnam.svg.png"
				width="50" height="25"></a>
		<a href="?lang=en"><img
				src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e2/Flag_of_the_United_States_%28Pantone%29.svg/1920px-Flag_of_the_United_States_%28Pantone%29.svg.png"
				width="50" height="25"></a>
		<?php
		$string = 'Xin Chao';
		// if (isset($_COOKIE['lang'])) {
			//if($_COOKIE['lang]) == 'en'
		// 	switch ($_COOKIE['lang']) {
		// 		case 'en':
		// 			$string = 'Welcome';
		// 			break;
		// 		case 'vi':
		// 			$string = 'Xin Chao';
		// 			break;
		// 	}

			//if($_COOKIE['lang']) === 'en'
		if (isset($_COOKIE['lang'])) {
			match ($_COOKIE['lang']) {
				'en'=> $string = 'Welcome',
				'vi'=> $string = 'Xinh chao',
				default => $string = 'Xinh chao',
			};
		}
		echo $string;

		?>

		<?php echo $_SESSION['username']; ?>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
			<input type="submit" name="dangxuat" value="dangxuat" />
		</form>
	<?php } ?>


</body>

</html>