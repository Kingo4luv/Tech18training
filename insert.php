<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

$link = mysqli_connect("localhost","root" ,"","tech18");

if ($link === false) {
	die( "could not connect to database".mysqli_connect_error());
	# code...
} else{
	if (isset($_POST['submit'])) {
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$email = $_POST['email'];
		$username = $_POST['username'];
		$password = $_POST['password'];

		if (isset($first_name)&&isset($last_name)&&isset($email)&&isset($username)&&isset($password)) {

			$sql = "INSERT INTO login (first_name,last_name,email,username,password) VALUES ('$first_name','$last_name','$email','$username','$password')";
			if (mysqli_query($link,$sql)) {
				# code...
				echo "sucessfully Added";
			}else{
				echo "ERROR: could not add to $sql". mysqli_error($link);
			}


		}else{
			echo "please fill all the forms";
		}

		

	}
}
mysqli_close($link);
?>
