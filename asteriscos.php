<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php

if (isset($_GET["numero"]))	 {
	$numero=$_GET["numero"];
	for ($i=0; $i < $numero ; $i++) { 
		if ($i%190==0) {
			echo "<br>";
		}
		echo "*";
	}
}

?>
</body>
</html>

