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
    <link rel="stylesheet" type="text/css" href="css/administrators.css">
    <link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">
    <title>Administrator</title>
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
        <img src="res/logo.png" width="100%">
    </div>

    <div id=login style="float: right;">
        <a href="zamknij.php"><span id="logoutButton">Wyloguj</span></a><br><br>
        <?php echo $_SESSION['username'];?>
    </div>
    <br>

    

    <table cellspacing="30px" cellpadding="5px">
        <tr>
            <td>
                <div id="website">
                    <table>
                        <tr>
                            <td>
                                <a href="zalogowano.php" target="_blank" style="text-decoration: none;">&nbsp;
                            </td>

                            <td>
                                <a href="zalogowano.php" target="_blank" style="text-decoration: none;">
                                    <p><strong>&nbsp;&nbsp;&nbsp;&nbsp;Przejdź na stronę</strong></p>
                                </a>
                            </td>

                            


                        </tr>
                    </table>
                </div>
            </td>
        </tr>

        <tr>
            <td>
                <div id="inventory">
                    <table>
                        <tr>
                            <td>
                                <a href="magazyn.php" style="text-decoration: none;">&nbsp;
                            </td>

                            <td>
                                <a href="magazyn.php" style="text-decoration: none;">
                                    <p><strong>&nbsp;&nbsp;&nbsp;&nbsp;Zobacz magazyn</strong></p>
                                </a>
                            </td>
                        </tr>
                    </table>
                </div>
            </td>

        </tr>
    </table>

</body>

</html>
