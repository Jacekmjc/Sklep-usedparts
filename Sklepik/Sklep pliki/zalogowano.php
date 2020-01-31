<?php
session_start();
if(!isset($_SESSION['username'])){
	header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="icon" href="res/logo.png" sizes="16x16">
    <link rel="stylesheet" type="text/css" href="css/rodzajj.css">
    <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
    <title>Usedparts</title>
    <style type="text/css">
        #logo {
            width: 20.1%;
            float: left;
        }

        body {
            margin-top: 3em;
            margin-left: 3em;
        }

    </style>
</head>

<body bgcolor=black>
    <div id="logo">
        <img src="/res/logo.png" width="100%">
    </div>

    <div id=login>
        <a href="zamknij.php"><span id="logoutButton">Wyloguj się</span></a><br><br>


    </div>
    <br>

    <div id="header"> <strong></strong></div>

    <table cellspacing="30px" cellpadding="10px">
        <tr>

            <td>
                <div id="nowe">
                    <a href="noweCzesci.php" style="text-decoration: none;">
                        <img class="circle" src="/res/main/nowe.png">
                        <p><strong>Nowe</strong></p>
                    </a>
                </div>
            </td>

            <td>
                <div id="uzywane">
                    <a href="uzywaneCzesci.php" style="text-decoration: none;">
                        <img class="circle" src="/res/main/uzywane.png">
                        <p><strong>Używane</strong></p>
                    </a>
                </div>
            </td>

            <td>
                <div id="naprawy">
                    <a href="czesciDoNaprawy.php" style="text-decoration: none;">
                        <img class="circle" src="/res/main/donaprawy.png">
                        <p><strong>Do naprawy</strong></p>
                    </a>
                </div>
            </td>

        </tr>

    </table>

</body>

</html>
