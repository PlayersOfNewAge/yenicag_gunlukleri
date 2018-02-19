<?php

$host = "localhost";
$dbname = "yenicag_gunlukleri";
$username = "root";
$password = "";

try {

  $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);

} catch (PDOException $hata) {

  echo "Bir hata oluştu. Lütfen settings/connection.php kontrol ediniz. Oluşan Hata:" . "<br> <br>";
  echo $hata -> getMessage();

}


 ?>
