<?php
echo 'nabeel';

// $host = 'localhost';
// $dbname = 'fs8_proone';
// $user = 'root';
// $password = '';
// $dsn =  "mysql:host=$host;dbname=$dbname";
// //connection
// $con =new PDO($dsn,$user,$password);
//query , prepare

// $q = $con->query("SELECT  * FROM `user`");
// $res = $q->fetchAll(PDO::FETCH_ASSOC);
// echo '<pre>';
// var_dump($res);

//prepare
// $q = $con->prepare("INSERT INTO  `user`(`name`,`email`,`password`) VALUES (? , ? , ?) ");
// $res= $q->execute(['nabeel abdourab','www.nabeel.com','123456789']);

// $q = $con->prepare("INSERT INTO  `user`(`name`,`email`,`password`) VALUES (:name , :email , :password) ");
// $res= $q->execute(['name'=>'nabeel abdourab alyafay','email'=>'www.nabeelo.com','password'=>'123456789']);