<!DOCTYPE html>
<html>
<head>
	<title>testing php</title>
</head>
<body>
	<h1>Testing php on apache web server</h1>
	<?php 
	
	if (isset($_POST['submitbutton'])){
		$con = mysqli_connect("localhost","root","","student");

// Check connection
		if (mysqli_connect_errno())
		{
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}


		$name=$_POST['uname'];
		$roll=$_POST['roll'];
		$age=$_POST['age'];
		$status=$_POST['status'];
		$sql = "INSERT INTO result (name,rollnumber,age,status) VALUES ('$name',$roll,$age,'$status')";

		if ($con->query($sql) === TRUE) {
			echo "Data added on webserver database";
			?>

			<form action="index.php" method="post">
				Name<input type="text" name="uname"><br>
				Roll Number<input type="text" name="roll"><br>
				Age<input type="text" name="age"><br>
				Pass/fail<input type="text" name="status" ><br>
				<input type="submit" name="submitbutton"/>


				<?php 
			} else {
				echo "Error: " . $sql . "<br>" . $con->error;
			}

			$con->close();

		}
		else{

			
			?>


			<form action="index.php" method="post">
				Name<input type="text" name="uname"><br>
				Roll Number<input type="text" name="roll"><br>
				Age<input type="text" name="age"><br>
				Pass/fail<input type="text" name="status" ><br>
				<input type="submit" name="submitbutton"/>
				

				<?php } ?>


				
			</form>
			<br>
				<h2>If you wish to subscribe to our agency, please share your email id.</h2>
				<form action="mail.php" method="POST">
					Email id<input type="text" name="email">
					<input type="submit" name="sub">
					
				</form>
				




		</body>
		</html>