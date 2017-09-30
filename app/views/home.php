<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<?php if(isset($greeting)){ ?>

			<h1><?= $greeting; ?></h1>

		<?php } else { ?>

			<h1>Hola mundo!</h1>

		<?php } ?>
	</body>
</html>