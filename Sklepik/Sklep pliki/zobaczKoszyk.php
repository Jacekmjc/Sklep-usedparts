<?php
session_start();
include_once("config.php");
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="icon" href="/res/logo.png" sizes="16x16">
    <title>Koszyk</title>
    <link href="css/stylee.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
    <style type="text/css">
        #logo {
            padding-top: 0.7%;
            width: 14%;
            height: 9.65%;
            float: left;
            position: fixed;
            margin-left: 2px;
        }

    </style>

    <script type="text/javascript">
        function checkoutFunction() {


            alert("Twoje zamówienie zostało złożone!");
            window.location.assign("zalogowano.php");

        }

    </script>
</head>

<body>

    <div id="logo">
        <a href="zalogowano.php">
            <img src="res/logo.png" width="100%">
        </a>
    </div>

    <h1 align="center" style="color:#FF7B33;">Koszyk</h1>
    <div class="cart-view-table-back">

        <form method="post" action="cart_update.php">
            <table width="100%" cellpadding="6" cellspacing="0">
                <thead>
                    <tr>
                        <th>Ilość</th>
                        <th>Rodzaj</th>
                        <th>Kategoria</th>
                        <th>Nazwa</th>
                        <th>Cena</th>
                        <th>Suma całkowita</th>
                        <th>Usuń</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
	if(isset($_SESSION["produkt_koszyk"])) //check session var
    {
		$total = 0; //set initial total value
		$b = 0; //var for zebra stripe table 
		foreach ($_SESSION["produkt_koszyk"] as $cart_itm)
        {
			//set variables to use in content below
			$rodzaj = $cart_itm["rodzaj"];
			$kategoria = $cart_itm["kategoria"];
			$nazwa_produktu = $cart_itm["nazwa_produktu"];			
			$product_cena = $cart_itm["product_cena"];
			$kod_produktu = $cart_itm["kod_produktu"];		
			$ilosc = $cart_itm["ilosc"];	
			$subtotal = ($product_cena * $ilosc); //calculate cena x Qty
			
		   	$bg_color = ($b++%2==1) ? 'odd' : 'even'; //class for zebra stripe 
		    echo '<tr class="'.$bg_color.'">';
		    echo '<td><input type="text" size="2" maxlength="2" name="ilosc['.$kod_produktu.']" value="'.$ilosc.'" /></td>';
			echo '<td>'.$rodzaj.'</td>';
			echo '<td>'.$kategoria.'</td>';
			echo '<td>'.$nazwa_produktu.'</td>';			
			echo '<td>'.$product_cena.'PLN</td>';
			echo '<td>'.$subtotal.'PLN</td>';
			echo '<td><input type="checkbox" name="usun_kod[]" value="'.$kod_produktu.'" /></td>';
            echo '</tr>';
			$total = ($total + $subtotal); //add subtotal to total var
        }
		
		
	}
    ?>
                    <tr>
                        <td colspan="7">&nbsp;</td>
                    </tr>
                    <tr>
                        <td colspan="6"><span style="float:right;text-align: right;">Do zapłaty: PLN <?php echo sprintf("%01.2f", $total);?></span></td>
                    </tr>

                    <tr>
                        <td colspan="4"><a href="zalogowano.php" class="button">Dodaj</a></td>
                        <td><button type="submit">Aktualizuj</button></td>


                        <td><input type="button" onclick="checkoutFunction();" value="Zamów" id="checkoutButton" /></td>


                    </tr>


                </tbody>
            </table>
            <input type="hidden" name="return_url" value="<?php 
$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
echo $current_url; ?>" />
        </form>
    </div>

</body>

</html>
