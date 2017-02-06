<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Павел - учвстник курса НЕТОЛОГИЯ</title>
	  <style>
            body {
                background: #efefef;
                font-family: sans-serif;  
            }
        </style>
</head>
<body>
<?php
$myname = 'Павел';
$age = '28';
$mymail = 'www.cayman777@mail.ru'; 
$mycity = 'Москва';
$aboutmy = 'Меня зовут Павел, я участник курса "PHP/SQL:back-end разработка и базы данных.';
?>
<div>
	<h1>Страница пользователя Павла</h1>
	<p>Имя: <strong><?= $myname ?></strong></p>
	<p>Возраст: <strong><?= $age ?></strong></p>
	<p>Адрес электронной почты:  так: <a href="mailto:cayman777@mail.ru"><?= $mymail ?></a></p>
	<p>Город: <strong><?= $mycity ?> </strong></p>
	<p>О себе: <strong><?= $aboutmy ?></strong></p>
</div>
<?php
$myname = 'Павел';
$age = '28';
$mycity = 'Москва';
?>
</body>
</html>
