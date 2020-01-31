<?php
session_start();

if($_SERVER['REQUEST_METHOD']=='POST')
{
	$username=filter($_POST['username']);
	$password=filter($_POST['password']);
	

	$dbc=mysqli_connect('localhost','root','','siuda') or die("Nie można się połączyć z bazą");
	$query="SELECT * FROM users WHERE email='".$username."' AND password='".$password."' ";
	$result=mysqli_query($dbc,$query);
	if(mysqli_num_rows($result)==1)                         
	{
		$row=mysqli_fetch_array($result);
		$_SESSION['username']=$username;	
	}
	else
	{
		echo '<script type="text/javascript"> alert("Niepoprawne hasło");
		</script>';
	}
}

if(isset($_SESSION['username'])){

	$uname=$_SESSION['username'];
	if($uname=='admin@usedparts.com'){
	header("Location: admin.php");
	}
	else
	header("Location: zalogowano.php");
}
function filter($str)
{
	trim($str);
	htmlspecialchars($str);
	
	return($str);
}
?>
