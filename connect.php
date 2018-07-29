<?php

try{
	$connect = new PDO("mysql:host=localhost;dbname=articles",'root','');

}
catch( PDOExeption $e){
	echo "You have an error: ".$e->getMessage();
}

$query = $connect->query("SELECT * FROM `users`");

$result = $query->FETCHALL(PDO::FETCH_ASSOC);
foreach ($result as $arry){
	echo $arry['login'].'<hr>';
}