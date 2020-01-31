<?php
session_start();
include_once("config.php");


		$kod = ($_POST['kod_produktu']);
		$nazwa = ($_POST['nazwa_produktu']);
		$kat = ($_POST['kategoria']);
		$rodzaj = ($_POST['rodzaj']);
		$cena = ($_POST['cena']);
        $ilosc = ($_POST['ilosc']);
        


$sql = "INSERT INTO products(kod_produktu,rodzaj,kategoria,zdj,nazwa_produktu,cena,ilosc) VALUES ('$kod','$rodzaj','$kat','','$nazwa','$cena','$ilosc')";

if (mysqli_query($mysqli,$sql)){
	echo '<script type="text/javascript">alert("Dodano nowy produkt");</script>';
	header("Location:http://localhost/dodaj_produkt.php");
} 
else 
{
	echo '<script type="text/javascript">alert("Błąd");</script>';
	header("Location:http://localhost/dodaj_produkt.php");

}



?>
