<?php


// Simple Array 
$users = array("ammar / ","hossam / ","rayan / ",32,33,35);

// echo $users[5];

echo count($users);

// Associative arrays 

$user1 = array("username" => " ammar", "nickName" => "devAspirant", "age" => 32);

echo $user1["username"];

// print All the array value 

$length = count($users);

for($i=0;$i<$length;$i++){
	echo $users[$i];
}

?>
