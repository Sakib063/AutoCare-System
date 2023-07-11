
<!DOCTYPE html>
<html>
	
	<?php include('template/header.php'); ?>

	<section class="container grey-text">
	<h4 class="center" > Create a new account </h4>

		<form class="white" action="add index.php" method="POST">

		<label> Your name: </label>


		<input type="text" name="name">

		<label> Adress </label>

		<input type="text" name="address">

		<label> email </label>

		<input type="text" name="email">

		<label> phone: </label>

		<input type="text" name="phonenumber">
		<label> password </label>

		<input type="password" name="password">
		<label> BRAND </label>


		<div class="center">

				<input type="submit" name="submit" value="Submit" class="btn brand z-depth-0">
			</div>
	</form> 
	<?php include('template/footer.php'); ?>

</html>