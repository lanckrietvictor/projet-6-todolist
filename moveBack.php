<?php 


$move = $_GET["move"];

$file = file_get_contents("tasks.json");
$json = json_decode($file, true);

$index = array_search($move, $json["archive"]);
unset($json["archive"][$index]);
array_push($json["toDo"], $move);
file_put_contents("tasks.json", json_encode($json));


?>