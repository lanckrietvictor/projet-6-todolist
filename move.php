<?php 


$move = $_GET["move"];

$file = file_get_contents("tasks.json");
$json = json_decode($file, true);

$index = array_search($move, $json["toDo"]);
unset($json["toDo"][$index]);
array_push($json["archive"], $move);
file_put_contents("tasks.json", json_encode($json));


?>