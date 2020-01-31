<?php
session_start();
if(isset($_SESSION['username'])){
	header("Location: zalogowano.php");
}
?>
<html>

<head>
    <link rel="stylesheet" href="css/styl.css">
    <link rel="icon" href="res/logo.png" sizes="16x16">
    <link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">
    <title>Usedparts</title>
</head>

<body>
    <h1>
        <center><img src="res/logo.png"></center>
    </h1>



    

    <div id="login">
        <form name="loginForm" method="post" action="log.php">
            <table class="logowanie" align="right" width="150%">
                <tr>
                    <td align="center">
                        <h2>Logowanie</h2>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="username" id="user" placeholder="E-mail" required>
                    </td>
                </tr>
                <br>
                <tr>

                    <td>
                        <input type="password" name="password" id="pass" placeholder="Hasło" required>
                    </td>
                </tr>
                <tr>

                    <td>
                        <input type="submit" name="login" value="Zaloguj się" class="click">
                    </td>
                </tr>

            </table>
        </form>
    </div>


    <form name="signupForm" method="post" action="zarejestruj.php" id="signup">
        <table class="rejestracja" align="right" width="150%">
            <tr>
                <td align="center" colspan="2">
                    <h2>Rejestracja</h2>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" name="fname" placeholder="Imię" required>
                </td>
                <td>
                    <input type="text" name="lname" placeholder="Nazwisko" required>
                </td>
            </tr>

            <tr>
                <td colspan="2">
                    <input type="email" name="email" placeholder="E-mail" required>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="text" name="phone" placeholder="Numer telefonu" required>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="password" name="password" placeholder="Hasło" required>
                </td>
            </tr>

            <tr>
                <td colspan="2">
                    <input type="submit" name="signup" value="Zarejestruj się" class="click">
                </td>
            </tr>

        </table>
    </form>

</body>

</html>
