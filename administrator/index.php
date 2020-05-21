<?php
require_once($_SERVER[DOCUMENT_ROOT]."/administrator/cfg/adminConfig.php");
session_start();
	if(!isset($_SESSION["session_username"])){
		echo "<script>alert('Введите свои данные');
		 document.location.href = 'http://projectweb/administrator/login.php'
		</script>";
	}
include "function.php";
?>
<!DOCTYPE html>
<html>
<?php require_once($_SERVER[DOCUMENT_ROOT]."/administrator/cfg/adminConfig.php"); ?>
<head>
	<title>Админка</title>
	<link rel="stylesheet" type="text/css" href="/administrator/css/style.css">
</head>
<body>
<div class="adminHead">
	<form method="POST" action="">
		<input type="hidden" name="hidden">
		<input name="exit" class ="exit" value="Выход" type="submit">
	</form>
</div>
<div class = "forms">
	<div class="addPage">
		<form method="POST" action="">
			<p class="text_center">Добавить страницу</p>
			<p><input placeholder="Введите алиас" type="text" name="page_alias"></p>
			<p><input placeholder="Введите заголовок" type="text" name="page_h1"></p>
			<p><input placeholder="Введите мета-заголовок" type="text" name="page_title"></p>
			<p><textarea placeholder="Введите содержимое" class="text" name="page_content"></textarea></p>
			<input name="add" class ="add" value="Добавить новую страницу" type="submit">
		</form>
	</div>
	<div class="addPage">
		<form method="POST" action="">
			<p class="text_center">Редактировать страницу</p>
			<p><input placeholder="Введите алиас" type="text" name="page_alias_edit"></p>
			<p><input placeholder="Введите заголовок" type="text" name="page_h1_edit"></p>
			<p><input placeholder="Введите мета-заголовок" type="text" name="page_title_edit"></p>
			<p><textarea placeholder="Введите содержимое" class="text" name="page_content_edit"></textarea></p>
			<input name="found" class ="add" value="Найти страницу" type="submit">
			<input name="refresh" class ="add" value="Обновить страницу" type="submit">
		</form>
	</div>
	<div class="addPage removePage">
		<form method="POST" action="">
			<p class="text_center">Удалить страницу</p>
			<p><input placeholder="Введите алиас" type="text" name="delete_alias"></p>
			<input name="removePage" class ="add" value="Удалить страницу" type="submit">
		</form>
	</div>
</div>
</body>
</html>
