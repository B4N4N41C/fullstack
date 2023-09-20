<?php
$connection = new PDO("mysql:host=localhost;dbname=mytest;chatset=utf8", "root", "root");

$name = 'Dasssssha';
$age = 20;
$login = 'yazinovffffyva';
$password = 'bgt5vfr4cde3';

$param = [
  'n'=>$name, 
  'a'=>$age, 
  'l'=>$login, 
  'p'=>$password
];

$sql = "INSERT users (name, age, login, password) VALUE (:n, :a, :l, :p)"; 
$query = $connection->prepare($sql);
$query->execute($param);

//$query = "INSERT users (name, age, login, password) VALUE ('Коля', 20, 'Колька', 'bgt5')"; 
//$count = $connection->exec($query);
//echo $count;

?>