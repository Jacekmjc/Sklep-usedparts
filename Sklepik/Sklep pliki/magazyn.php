<?php
session_start();
include_once("config.php");


$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Magazyn</title>
    <link rel="icon" href="res/logo.png" sizes="16x16">
    <link rel="stylesheet" type="text/css" href="css/styl.css">
    <link rel="stylesheet" type="text/css" href="css/lewy2.css">
    <link rel="stylesheet" type="text/css" href="css/nawigacja3.css">

    <link rel="stylesheet" type="text/css" href="css/produkty.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />

    <style type="text/css">
        #logo {
            padding-top: 0.7%;
            width: 12%;
            height: 62px;
            float: left;
            position: fixed;
        }

        td {
            padding: 5px;
        }

        th {
            padding: 5px;
            font-size: 20px;
            text-align: center;
        }

    </style>

</head>

<body>

    <div id="logo">
        <a href="admin.php">
            <img src="res/logo.png" width="100%">
        </a>
    </div>

    <div id="sidebar">
        <ul>
            <li>Cześć <?php echo $_SESSION['username'];?></li>

            <li>
                <a href="zamknij.php">
                    <table>
                        <tr>
                            <td>&nbsp;Wyloguj</td>
                        </tr>
                    </table>
                </a>
            </li>

            <li>&nbsp;</li>

        </ul>
    </div>

    <div id="navbar">
        <ul>
            <li><a href="dodaj_produkt.php">Dodaj produkt</a></li>
            <li><a href="usun_produkt.php">Usuń produkt</a></li>
        </ul>
    </div>


    <a href="#" class="back-to-top">Powrót</a>

    <div class="content">
        <section class="container">

            <?php
$results = $mysqli->query("SELECT id,kod_produktu, nazwa_produktu, kategoria, rodzaj, cena, ilosc FROM products  ORDER BY id ASC");
if($results){ 
$products_item = '<table border="1" bordercolor="white" style="color:white;"><th>ID</th><th>Kod produktu</th><th>Rodzaj</th><th>Kategoria</th><th>Nazwa produktu</th><th>cena</th><th>Ilość produktu</th>
';
while($obj = $results->fetch_object())
{
$products_item .= <<<EOT
	<tr>
	<td><p align="center">{$obj->id}</p></td>
    <td><p align="center">{$obj->kod_produktu}</p></td>
    <td><p align="center">{$obj->rodzaj}</p></td>
    <td><p align="center">{$obj->kategoria}</p></td>
	<td><p align="center">{$obj->nazwa_produktu}</p></td>
    <td><p align="center">{$obj->cena}</p></td>
    <td><p align="center">{$obj->ilosc}</p></td>
	</tr>
		
EOT;
}
$products_item .= '</table>';
echo $products_item;
}
?>
    </div>




    </section>
    </div>






</body>

</html>
