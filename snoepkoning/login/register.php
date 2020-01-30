<?php

?>
<!doctype html>
<html lang="nl">
<head>

    <!-- MAIN -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- RESPONSIVE INPUT -->
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <!-- CSS / FONTS -->
    <link rel="stylesheet" type="text/css" href="../assets/style.css">
    <link rel="stylesheet" type="text/css" href="https://82904.ict-lab.nl/vakken/beroeps/snoepkoning/assets/loginstyle.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,300,600,800,900" rel="stylesheet" type="text/css">

    <!-- SCRIPT -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="../assets/main.js"></script>

    <!-- TITEL VAN DE SITE -->
    <title>SnoepKoning</title>


</head>
<body onload="">

<?php include "../components/header.php";?>

<br><br>

<div class="login-box">

        <form class="login-form" method="post" action="register_v.php">
            <h1>Registreren</h1>
            <input name="naam" type="text" placeholder="Volledige Naam"/>
            <input name="email" type="text" placeholder="Email"/>
            <input name="tel" type="text" placeholder="Telefoon Nummer"/>
            <input name="password" type="password" placeholder="Wachtwoord"/>

            <input name="adres" type="text" placeholder="Adres + Huisnummer"/>
            <input name="plaats" type="text" placeholder="Plaats"/>
            <input name="postcode" type="text" placeholder="Postcode"/>

            <input type="submit" value="Registreer">

            <a style="color: red; margin-left: 15%;"><?php
                if(isset($_GET['fail'])) {
                    echo "Email en/of Wachtwoord verkeerd ingevoerd";
                }
                ?></a>

            <p class="message">Heeft u al een account? <a href="login.php">Login</a></p>
        </form>

</div>

<?php include "../components/footer.php";?>

</body>
</html>