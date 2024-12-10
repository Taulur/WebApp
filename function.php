<?php
$surname = trim(strip_tags($_POST["surname"]));
$username = trim(strip_tags($_POST["name"]));
$date_birthday = trim(strip_tags($_POST["date_birthday"]));
$mail = trim(strip_tags($_POST["mail"]));
$login = trim(strip_tags($_POST["login"]));
$password = trim(strip_tags($_POST["password"]));
$subject="Регистрация на сайте url_вашего_сайта";
$msg = "Ваши данные формы регистрации:\n"."Фамилия : $surname\n"."Имя: $name\n";
$headers = "Content-type:text/plain; charset=UTF-8"."\r\n";
if (!empty($surname))&&(!empty($name))&& (!empty($date_birthday)) && (!empty($mail))&&(!empty($login))&& (!empty($password)) &&
filter_var($email, FILTER_VALIDATE_EMAIL){
	mail($email,$subject,$msg,$headers);
	echo "Данные внесены в систему.";

	}