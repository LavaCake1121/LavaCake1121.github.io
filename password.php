<!DOCTYPE html>
<body>
<?php
if (empty($_POST)){
	exit;
}
else{
	$password = $_POST["password"];
	if ($password == "521227N_0747E") {
		echo '<a href="desktop.html"> Open it. </a>';
	}
	else {
		echo "Try again.";
	}
}
?>
</body>
</html>