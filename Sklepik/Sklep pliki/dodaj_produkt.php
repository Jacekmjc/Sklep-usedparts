<?php
session_start();
include_once("config.php");



$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Dodaj produkt</title>
    <link rel="icon" href="res/logo.png" sizes="16x16">
    <link rel="stylesheet" type="text/css" href="css/styl2.css">
    <link rel="stylesheet" type="text/css" href="css/nawigacja3.css">
    <link rel="stylesheet" type="text/css" href="css/lewy2.css">

    <link rel="stylesheet" type="text/css" href="css/content.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />

    <style type="text/css">
        body {
            margin: 0;
        }

        #logo {
            padding-top: 0.7%;
            width: 14%;
            height: 62px;
            float: left;
            position: fixed;
        }

        #addForm {
            padding-top: 10px;
            padding-left: 30px;
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
                          
                            <td>&nbsp;Wyloguj się</td>
                        </tr>
                    </table>
                </a>
            </li>

            <li>&nbsp;</li>

        </ul>
    </div>

    <div id="navbar">
        <ul>
            <li><a href="magazyn.php">Magazyn</a></li>
            <li><a href="usun_produkt.php">Usuń produkt</a></li>
        </ul>
    </div>



    <div class="content" style="color: white;">
        <section class="container">

            <div id="addForm">
                <form name="productForm" method="post" action="dodaj.php">
                    <table width="45%">
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                                <label>Kod produktu &nbsp;&nbsp;</label>
                            </td>
                            <td colspan="2">
                                <input class="cc" type="text" name="kod_produktu" required>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label>Rodzaj &nbsp;&nbsp;</label>
                            </td>
                            <td colspan="2">
                                <input class="cc" type="text" name="rodzaj" required>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label>Kategoria &nbsp;&nbsp;</label>
                            </td>
                            <td colspan="2">
                                <input class="cc" type="text" name="kategoria" required>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label>Nazwa produktu &nbsp;&nbsp;</label>
                            </td>
                            <td colspan="2">
                                <input class="cc" type="text" name="nazwa_produktu" required>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label>Cena &nbsp;&nbsp;</label>
                            </td>
                            <td colspan="2">
                                <input  class="cc"type="text" name="cena" required>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label>Ilość &nbsp;&nbsp;</label>
                            </td>
                            <td colspan="2">
                                <input class="cc" type="text" name="ilosc" required>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">&nbsp;</td>
                        </tr>


                        <tr>
                            <td>&nbsp;</td>
                            <td>
                                <input type="submit" name="addproduct" value="Dodaj produkt" class="click">
                            </td>
                            <td>&nbsp;</td>
                        </tr>

                    </table>
                </form>
            </div>


        </section>
    </div>

</body>

</html>
