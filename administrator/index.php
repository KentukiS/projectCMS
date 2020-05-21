<?php
session_start();
	if(!isset($_SESSION["session_username"])){
		echo "<script>alert('Введите свои данные');
		 document.location.href = 'http://projectweb/administrator/login.php'
		</script>";
	}
?>
<div></div>