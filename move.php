<?php 


$move = $_GET["move"];

$file = file_get_contents("tasks.json");
$json = json_decode($file, true);

var $index = $json["toDo"].indexOf($move);
$json["toDo"].splice()


?>