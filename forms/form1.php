<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="GET">
		<input name="test1">
		<input name="test2">
		<input type="submit">
	</form>
</body>
</html>

<?php
	if (empty($_GET)) {

	} else {
		echo $_GET['test1'].' '.$_GET['test2'];
	}
?>