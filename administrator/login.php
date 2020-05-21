<?php
session_start();
require_once($_SERVER[DOCUMENT_ROOT]."/administrator/cfg/adminConfig.php");
$db = new MyDB();
$db->connect();
$query = "SELECT * FROM usertbl";
$db->run($query);
$db->row();

$dimas = $db->data[username];
$password = $db->data[password];

var_dump($dimas);
echo "<br>";
var_dump($password);
echo "<br>";


$passwordPost = md5($_POST['password']);

$userPost = $_POST['username'];
?>

<form action="" id="loginform" method="post"name="loginform">
	<p><label for="user_login">Username<br>
	<input class="input" id="username" name="username" size="20" type="text" value=""></label></p>
	<p><label for="user_pass">Password<br>
 	<input class="input" id="password" name="password" size="20" type="password" value=""></label></p>
 	<p class="submit"><input class="button" name="login" type= "submit" value="Log In"></p>
</form>

<?php
if($_POST['login']){

	if(!empty($_POST['username']) && !empty($_POST['password'])) {
		// $numrows=mysql_num_rows($query);
			if($userPost == $dimas && $passwordPost == $password){ //сравниваем логин\пароль
				$username=htmlspecialchars($_POST['username']);
				$_SESSION['session_username'] = $username;	 
				 // если залогинен - идём сюда 

				echo "<script>alert('Вы успешно авторизированы');
				 document.location.href = 'http://projectweb/administrator/index.php'
				</script>";

			}else{
				echo  "Invalid username or password!";
			}
			//Если не залогинен - ошибки
	} else {
		echo  "Заполните все поля!";
	}
}
?>


