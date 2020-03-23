<?php
	
	include_once('Includes/Connection.php');
	if(isset($_SESSION['user'])) {
	$qry = "SELECT Name FROM users WHERE User_Id = '".$_SESSION['user']."';";
	$result = mysqli_query($con, $qry);
	$row = mysqli_fetch_array($result);
	}
?>

<div class="row">
	
	<div class="col-12 text-center">
		<h4 style="color: #222;font-size:20px;font-family:serif">Welcome <?php if(isset($_SESSION['user'])) { echo $row[0]; } ?>, Enjoy Shopping with us. Find a product from our range.</h4>
	</div>

	<!--div class="col-md-1"></div>
	<div class="col-md-2">
		<!--?php
			if(isset($_SESSION['user']))
				echo $row[0];
		?-->
	</div>
