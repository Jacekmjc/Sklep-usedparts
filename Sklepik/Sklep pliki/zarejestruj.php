<?php
	session_start();

	$db=mysqli_connect("localhost","root", "","siuda");
	if(isset($_POST['signup'])) {

		$fname = ($_POST['fname']);
		$lname = ($_POST['lname']);
		$password = ($_POST['password']);
		$email = ($_POST['email']);
		$phone = ($_POST['phone']);
		$sql;
		
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "Insert into users(fname,lname,phone,email,password) values ('$fname','$lname','$phone','$email','$password')";

if (mysqli_query($db, $sql)) {
   echo '<script type="text/javascript"> alert("Poprawnie założone konto");
		</script>';
    header("Location:index.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

	}
?>
