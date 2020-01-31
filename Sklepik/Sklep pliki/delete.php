<?php
	session_start();
    include_once("config.php");

			$code = ($_POST['kod_produktu']);
	
	
$sql = "DELETE FROM products WHERE kod_produktu='".$code."'"; 

if (mysqli_query($mysqli, $sql)) 
{
	echo '<script type="text/javascript">alert("Produkt skasowany");</script>';
	header("Location:http://localhost/usun_produkt.php");
} 
else 
{
	echo '<script type="text/javascript">alert("Nie ma takiego produktu");</script>';
	header("Location:http://localhost/usun_produkt.php");

}

?>
