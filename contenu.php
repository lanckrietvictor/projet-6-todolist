<?php 

$file = file_get_contents("tasks.json");
$json = json_decode($file, true);

?>

<h2>A faire</h2>
<form action="index.php">
	<div id="toDoList">
		<?php 
		foreach ($json["toDo"] as $key => $value) {
			echo "<input type='checkbox' onclick='moveToArchive()' name='check' value='".$value."'>".$value."<br>";
		} ?>
	</div>
</form>
<br>
</section>
<hr>
<section id="archive">
	<h2>Archive</h2>
	<form action="index.php">
		<div id="archiveList">
			<?php 
			foreach ($json["archive"] as $key => $value) {
				echo "<input type='checkbox' value='".$value."'>".$value."<br>";
			} ?>
		</div>
	</form>
</section>
<br>
<hr>