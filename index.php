<?php
declare(strict_types=1);

include_once('logic.php');
?>

<html>
	<head>
		 <meta charset="UTF-8">
	</head>
	<body>
		<div style="max-width: 600px;margin:0 auto;">
			<?php echo $player->play(); ?>
		</div>
		<div style="max-width: 600px;margin:0 auto;">
			<h1><?php echo $player->winner(); ?></h1>
		</div>
	</body>
</html>













