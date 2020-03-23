<html>
	<head>
		<link rel="icon" type="image/x-ico" href="FaFa/world.png" />
		<title>Grocify</title>
		
		<link rel="stylesheet" type="text/css" href="engine1/style.css" />
		<script type="text/javascript" src="engine1/jquery.js"></script>
		
	</head>
	<body>
		<?php include_once('HeaderNavigation.php'); ?>
	
		<div class="container-fluid">
		<?php include_once('Slider.php'); ?><hr />
        	<?php include_once('Header.php'); ?>
		</div>
		<div class="container"><hr />
			
			<div class="row">
				<div class="col-md-12 text-center" style="background-color: white; padding: 10px; margin-top: 15px; font-family: Arial; font-size: 2em;">
					WHY CHOOSE GROCIFY ?
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center">
					<img src="FaFa/Capture.png" style="height: 100px; width: 80%;" class="img-rounded" />
				</div>
			</div><hr />
			<?php include_once('TopCategory.php'); ?>
			<hr />
			<?php include_once('TopProducts.php'); ?>
			<hr />
			<div class="row">
				<h3 class="text-center">Top Brands</h3>
				<?php
				for ($i=1; $i<=4; $i++) {
				    $image = "Brands/" . $i . ".jpg";
				    echo "<div class='col-md-3 text-center' style='padding: 20px;'>";
				    echo "<img style='' src='".$image."'/><br/>";
				    echo "</div>";
				}
				?>
			</div><hr />
		
		</div>
		<?php include_once('Footer.php'); ?>
	</body>
</html>