<!DOCTYPE html>
<html>
<head>
	<title>To do list</title>
</head>
<body>
	<div id="content">
		
	</div>

	<section id="ajouter">
		<h1>Ajouter une tâche</h1>
		<p>La tâche à effectuer</p>
		<p id="test"></p>
		<input type="text" id="taskAdd">
		<button id="add" onclick="add()">Ajouter</button>
	</section>
	<script type="text/javascript">

		var ajax = new XMLHttpRequest();
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4 && ajax.status == 200) {
				document.getElementById("content").innerHTML = ajax.responseText;
			}
		};
		ajax.open("GET", "contenu.php", true);
		ajax.send();

		function add () {
			var addition = document.getElementById("taskAdd").value;
			
			var ajax = new XMLHttpRequest();
			ajax.onreadystatechange = function() {
				if (ajax.readyState == 4 && ajax.status == 200) {

				}
			}
			document.getElementById("taskAdd").value = "";
			ajax.open("GET", "ajax.php?task="+addition, true);
			ajax.send();

			var ajax = new XMLHttpRequest();
			ajax.onreadystatechange = function() {
				if (ajax.readyState == 4 && ajax.status == 200) {
					document.getElementById("content").innerHTML = ajax.responseText;
				}
			};
			ajax.open("GET", "contenu.php", true);
			ajax.send();
		};

		function moveToArchive () {
			var check = document.forms[0];
			var move = "";
			var i;
			for (i=0; i < check.length; i++) {
				if (check[i].checked) {
					move = check[i].value;
				}
			}

			var ajax = new XMLHttpRequest();
			ajax.onreadystatechange = function() {
				if (ajax.readyState == 4 && ajax.status == 200) {
					document.getElementById("test").innerHTML = ajax.responseText;
				}
			};
			ajax.open("GET", "move.php?move="+move, true);
			ajax.send();
		}
	</script>
</body>
</html>