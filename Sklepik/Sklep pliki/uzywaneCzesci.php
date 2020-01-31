<?php
session_start();
include_once("config.php");


$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Laptopy</title>
    <link rel="icon" href="res/logo.png" sizes="16x16">
    <link rel="stylesheet" type="text/css" href="css/lewy.css">
    <link rel="stylesheet" type="text/css" href="css/nawigacja.css">

    <link rel="stylesheet" type="text/css" href="css/produkty.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />

    <style type="text/css">
        body {
            margin: 0;
        }

        #logo {
            padding-top: 0;
            padding-left: 2%;
            width: 12%;
            height: 9.65%;
            float: left;
            position: fixed;
        }

    </style>

</head>

<body>

    <div id="logo">
        <a href="zalogowano.php">
            <img src="res/logo.png" width="100%">
        </a>
    </div>


    <div id="sidebar">
        <ul>
            <p>Cześć <?php echo $_SESSION['username'];?></p>

            <li><a href="#laptopy">
                    <table>
                        <tr>
                            <td><img src="res/icons/laptop.png" /></td>
                            <td>&nbsp;Laptopy</td>
                        </tr>
                    </table>
                </a></li>

            <li><a href="#procesor">
                    <table>
                        <tr>
                            <td><img src="res/icons/procesor.png" /></td>
                            <td>&nbsp;Procesory</td>
                        </tr>
                    </table>
                </a></li>

            <li><a href="#kartygraf">
                    <table>
                        <tr>
                            <td><img src="res/icons/karta.png" /></td>
                            <td>&nbsp;Karty graficzne</td>
                        </tr>
                    </table>
                </a></li>



            <li><a href="zobaczKoszyk.php">
                    <table>
                        <tr>
                            <td><img src="res/icons/kart1.png" /></td>
                            <td>&nbsp;Koszyk&nbsp;</td>
                        </tr>
                    </table>
                </a></li>

            <li>
                <a href="zamknij.php">
                    <table>
                        <tr>
                            <td><img src="res/icons/wyloguj.png" /></td>
                            <td>&nbsp;Wyloguj się</td>
                        </tr>
                    </table>
                </a>
            </li>


            </table>
            </a></li>
        </ul>
    </div>

    <div id="navbar">
        <ul>
            <li><a class="active" href="noweCzesci.php">Nowe części</a></li>
            <li><a href="uzywaneCzesci.php">Używane części</a></li>
            <li><a href="czesciDoNaprawy.php">Części do naprawy</a></li>
        </ul>
    </div>



    <a href="#" class="back-to-top">Powrót</a>



    <div class="content">
        <section class="container">


            <div id="cart">
                <?php
if(isset($_SESSION["produkt_koszyk"]) && count($_SESSION["produkt_koszyk"])>0)
{
	
	echo '<h3>Twój koszyk</h3>';
	echo '<form method="post" action="koszyk_update.php">';
	echo '<table width="100%"  cellpadding="6" cellspacing="0">';
	echo '<thead><tr><th>Ilość</th><th>Rodzaj</th><th>Nazwa</th><th>Usuń</th></tr></thead>';
	echo '<tbody>';


	$total =0;
	$b = 0;


	foreach ($_SESSION["produkt_koszyk"] as $cart_itm)
	{
		$rodzaj = $cart_itm["rodzaj"];
		$kategoria = $cart_itm["kategoria"];
		$nazwa_produktu = $cart_itm["nazwa_produktu"];
		$ilosc = $cart_itm["ilosc"];
		$product_cena = $cart_itm["product_cena"];
		$kod_produktu = $cart_itm["kod_produktu"];
		
		$bg_color = ($b++%2==1) ? 'odd' : 'even'; 



		echo '<tr class="'.$bg_color.'">';
		echo '<td><input type="text" size="2" maxlength="2" name="ilosc['.$kod_produktu.']" value="'.$ilosc.'" /></td>';
		echo '<td>'.$rodzaj.'</td>';
		echo '<td>'.$nazwa_produktu.'</td>';
		echo '<td><input type="checkbox" name="usun_kod[]" value="'.$kod_produktu.'" /> Usuń</td>';
		echo '</tr>';
		$subtotal = ($product_cena * $ilosc);
		$total = ($total + $subtotal);
	}

	echo '<tr><td>&nbsp;</td></tr>';
	echo '<tr>';
	
	echo '<td>&nbsp;</td>';
	echo '<td>';
	echo '<button type="submit" id="myButton">Aktualizuj</button></td>';


	echo '<td><a href="zobaczKoszyk.php" id="myButton" style="width: 23%; padding-left: 8px;">Zamów</a>';
	echo '</td>';
	echo '</tr>';
	echo '</tbody>';
	echo '</table>';
	
	$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
	echo '<input type="hidden" name="return_url" value="'.$current_url.'" />';
	echo '</form>';
	

}
?>
            </div>
           
            <h3>Laptopy</h3>
            <div class="row" id="laptopy">
                <?php
$results = $mysqli->query("SELECT kod_produktu, nazwa_produktu, zdj, cena FROM products WHERE kategoria='Laptopy' AND rodzaj='Nowe czesci' ORDER BY id ASC");
if($results){ 
$products_item = '<ul style="list-style-type: none;">';


while($obj = $results->fetch_object())
{
$products_item .= <<<EOT
	
	<div class="col-sm-4">
	<div class="box">
	<li class="product">
	<form method="post" action="koszyk_update.php">	
	<img src="res/zdj/{$obj->zdj}">
	<p align="center">{$obj->nazwa_produktu}</p>
	<p align="center" style="font-size: 1.2em;">{$obj->cena} PLN </p>
	
	
	<input type="hidden" name="kod_produktu" value="{$obj->kod_produktu}" />
	
	<input type="hidden" name="type" value="add" />
	<input type="hidden" name="return_url" value="{$current_url}" />

	<div align="center">
		<label>Ilość: </label>
		<input type="text" size="2" maxlength="2" name="ilosc" value="1"/>&nbsp;&nbsp;
		<button type="submit" class="add_to_cart" id="myButton">Dodaj</button>
	</div>
	
	</form>
	</li>
	</div>
	</div>
	
EOT;
}
$products_item .= '</ul>';
echo $products_item;
}
?>
            </div>
    



            <h3>Procesory</h3>
            <div class="row" id="procesor">
                <?php
$results = $mysqli->query("SELECT kod_produktu, nazwa_produktu, zdj, cena FROM products WHERE kategoria='Procesory' AND rodzaj='Nowe czesci' ORDER BY id ASC");
if($results){ 
$products_item = '<ul style="list-style-type: none;">';


while($obj = $results->fetch_object())
{
$products_item .= <<<EOT
	
	<div class="col-sm-4">
	<div class="box">
	<li class="product">
	<form method="post" action="koszyk_update.php">	
	<img src="res/zdj/{$obj->zdj}">
	<p align="center">{$obj->nazwa_produktu}</p>
	<p align="center" style="font-size: 1.2em;">{$obj->cena} PLN </p>
	
	
	<input type="hidden" name="kod_produktu" value="{$obj->kod_produktu}" />
	
	<input type="hidden" name="type" value="add" />
	<input type="hidden" name="return_url" value="{$current_url}" />

	<div align="center">
		<label>Ilość: </label>
		<input type="text" size="2" maxlength="2" name="ilosc" value="1"/>&nbsp;&nbsp;
		<button type="submit" class="add_to_cart" id="myButton">Dodaj</button>
	</div>
	
	</form>
	</li>
	</div>
	</div>
	
EOT;
}
$products_item .= '</ul>';
echo $products_item;
}
?>
            </div>
 




            <h3>Karty graficzne</h3>
            <div class="row" id="kartygraf">
                <?php
$results = $mysqli->query("SELECT kod_produktu, nazwa_produktu, zdj, cena FROM products WHERE kategoria='Karty graficzne' AND rodzaj='Nowe czesci' ORDER BY id ASC");
if($results){ 
$products_item = '<ul style="list-style-type: none;">';


while($obj = $results->fetch_object())
{
$products_item .= <<<EOT
	
	<div class="col-sm-4">
	<div class="box">
	<li class="product">
	<form method="post" action="koszyk_update.php">	
	<img src="res/zdj/{$obj->zdj}">
	<p align="center">{$obj->nazwa_produktu}</p>
	<p align="center" style="font-size: 1.2em;">{$obj->cena} PLN</p>
	
	
	<input type="hidden" name="kod_produktu" value="{$obj->kod_produktu}" />
	
	<input type="hidden" name="type" value="add" />
	<input type="hidden" name="return_url" value="{$current_url}" />
	
	<div align="center">
		<label>Ilość: </label>
		<input type="text" size="2" maxlength="2" name="ilosc" value="1"/>&nbsp;&nbsp;
		<button type="submit" class="add_to_cart" id="myButton">Dodaj</button>
	</div>
	
	</form>
	</li>
	</div>
	</div>
	
EOT;
}
$products_item .= '</ul>';
echo $products_item;
}
?>
            </div>



        </section>
    </div>





    <footer class="container">
        <div class="row">
            <p class="col-sm-6">
                Usedparts 2020 &copy; Wszystkie prawa zastrzeżone</p>
        </div>
    </footer>


</body>

</html>
