<?php
$hisname = $_POST['urname'];
if( $hisname != null){
	setcookie("hisname", $hisname, time()+3600);
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Asking for your name</title>
</head>
<body>
<p>It works :) The problem is only with the index initialisation</p>
<form method="POST" action="landing-page_post.php ">
	<input placeholder="Your name" name="urname" required>
	<button type="submit">Submit !</button>
	</form>
</body>
</html>