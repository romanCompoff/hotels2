<?php
	session_start();

	if(isset($_SESSION['is_auth'])){
		unset($_SESSION['is_auth']);
	}
	
	if(count($_POST) > 0){
		if($_POST['login'] == 'admin' && $_POST['password'] == 'marina8811'){
			$_SESSION['is_auth'] = true;
			
			if($_POST['remember']){
				setcookie('login', hash('sha256', 'admin'), time() + 3600 * 24 * 7, '/');
				setcookie('password', hash('sha256', 'marina8811'), time() + 3600 * 24 * 7, '/');
			}
			
			header('Location: admin.php');
			exit();
		}
	}
?>
<form method="post">
	Логин<br>
	<input type="text" name="login"><br>
	Пароль<br>
	<input type="password" name="password"><br>
	<input type="checkbox" name="remember">Запомнить<br>
	<input type="submit" value="Добавить">
</form>