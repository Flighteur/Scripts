<?php include "var.php"; ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf8">
		<link rel="stylesheet" href=<?php echo $stylesheet; ?>>
	</head>
	<body>
		<?php include "header.php"; ?>
		<section id="presentation">
			<p>Dummy description (will be variable)</p>
		</section>
		<section id="principale">
			<?php include "content.php"; ?>
		</section>
		<?php include "footer.php";?>
	</body>
</html>