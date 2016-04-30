<!DOCTYPE html>
<html>
<head>
	<title>Homework TP PHP 101</title>
</head>
<body>
<form method="POST" action="index.php">
<label>Height</label>
	<input type="text" id="a" name="hgt" value="0">
	<label>Width</label>
	<input type="text" id="b" name="wdt" value="0">
	<button type="submit"> Submit now!</button>
</form>
<hr>
<?php 
echo "The Area is: ".($_POST["hgt"]*$_POST["wdt"]);
?>
</body>
</html>