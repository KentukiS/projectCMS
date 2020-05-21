<?php
$db = new MyDB();
$db->connect();
$alias = $_POST['page_alias'];
$hOne = $_POST['page_h1'];
$pageTitle = $_POST['page_title'];
$pageContent = $_POST['page_content'];




if($_POST['exit']){
	echo "<script>document.location.href = 'http://projectweb/'</script>";
	session_destroy();
}

if($_POST['add']){
	if(!empty($_POST['page_alias']) && !empty($_POST['page_h1']) && !empty($_POST['page_title']) && !empty($_POST['page_content'])) {
		$query = "INSERT INTO `pages`(`page_alias`, `page_title`,`page_h1`,`page_content`) VALUES ('".$alias."','".$hOne."','".$pageTitle."','".$pageContent."')";
		$db->run($query);
		echo "Страница успешно добавлена!";

		// $name = "SELECT page_alias FROM pages";
		// $izi = $db->run($name);
		// var_dump($izi);
		// if($_POST['page_alias'] == $db->data[page_alias] ){
			
		// 	echo "hi";
		// }else{
		// 	echo "Такая страница уже существует!";
		// }
	}else{
		echo "<p class='error'><span>Заполните все поля для создания админки</span><p>";
	}
}

// if($_POST['found']){
// 	if(!empty($_POST['page_alias_edit'])) {
// 		$query = "SELECT `page_alias` FROM `pages` WHERE `page_alias` = '".$_POST['page_alias_edit']."' ";
// 		$db->run($query);
// 		$queryT = "SELECT `page_h1` FROM `pages` WHERE `page_alias` = '".$_POST['page_alias_edit']."' ";
// 		$db->run($queryT);
// 		$queryTh = "SELECT `page_title` FROM `pages` WHERE `page_alias` = '".$_POST['page_alias_edit']."' ";
// 		$db->run($queryTh);
// 		$queryFr = "SELECT `page_content` FROM `pages` WHERE `page_alias` = '".$_POST['page_alias_edit']."' ";
// 		$db->run($queryFr);

// 	}
// }

if($_POST['refresh']){
	if(!empty($_POST['page_alias']) && !empty($_POST['page_h1']) && !empty($_POST['page_title']) && !empty($_POST['page_content'])) {
	}
}

if($_POST['removePage']){
	if(!empty($_POST['delete_alias'])){
		$query = "DELETE FROM `pages` WHERE `page_alias` = '".$_POST['delete_alias']."' ";
		$db->run($query);
		echo "Страница успешно удалена";
	}
}
?>