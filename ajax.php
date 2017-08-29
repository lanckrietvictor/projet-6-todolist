<?php 

$task = $_GET["task"];

if ($task !== "") {

$file = file_get_contents("tasks.json");
$json = json_decode($file, true);
array_push($json["toDo"], $task);
file_put_contents("tasks.json", json_encode($json));
}

?>