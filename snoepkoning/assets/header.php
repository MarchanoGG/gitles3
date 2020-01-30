<style>
    * {box-sizing: border-box;}

    .nav-logo {
        height: 40px;
        transition: .3s;
    }
    .nav-logo:hover {
        padding: 2px;
        cursor: pointer;
    }
    .header {
        overflow: hidden;
        background-color: rgba(48, 179, 74, 1);
        padding: 15px 10px;
    }

    .header a {
        float: left;
        color: white;
        text-align: center;
        padding: 12px;
        text-decoration: none;
        font-size: 18px;
        line-height: 25px;
        border-radius: 4px;
        transition: .3s;
    }

    .header a.logo {
        font-size: 25px;
        font-weight: bold;
    }

    .header a:hover {
        color: #ffa500;
    }

    .header a.active {
        background-color: dodgerblue;
        color: white;
    }

    .header-right {
        float: right;
    }

    @media screen and (max-width: 500px) {
        .header a {
            float: none;
            display: block;
            text-align: left;
        }

        .header-right {
            float: none;
        }
    }
</style>
</head>
<body>

<div class="header">
    <img class="nav-logo" src="/school/beroeps/snoepkoning/assets/images/DeSnoepKoning.png">
    <div class="header-right">
        <a href="/school/beroeps/snoepkoning/index.php">Home</a>
        <a href="https://82904.ict-lab.nl/vakken/beroeps/snoepkoning/winkelwagen.php">Winkelwagen</a>
        <?php
            if (  $_SESSION['username'] == "") {
                echo "<a href=\"/school/beroeps/snoepkoning/login/login.php\">Login</a>";
            } else {
               echo "<a href=\"/school/beroeps/snoepkoning/login/logout.php\">Logout</a>";
            }
        ?>
    </div>
</div>





<?php
//?>
<!---->
<!--<head>-->
<!--    <meta name="viewport" content="width=device-width, initial-scale=1">-->
<!--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->
<!--    <link href="header.css" type="text/css" rel="stylesheet">-->
<!---->
<!--</head>-->
<!--<body>-->
<!---->
<!--<div class="header">-->
<!---->
<!---->
<!--    <div class="header-right">-->
<!---->
<!--        <a href="https://82904.ict-lab.nl/vakken/beroeps/snoepkoning/winkelwagen.php" class="logo-foto"><img src="/school/beroeps/snoepkoning/assets/images/shoppingcart.png"></a>-->
<!---->
<!--    </div>-->
<!--    <div class="topnav" id="myTopnav">-->
<!--        <a href="javascript:void(0);" class="icon" onclick="myFunction()">-->
<!--            <i class="fa fa-bars"></i>-->
<!--        </a>-->
<!---->
<!--    <a href="index.php">Home Page</a>-->
<!--    <a href="login/login.php">Inlog</a>-->
<!--    <a href="login/register.php">Registratie</a>-->
<!---->
<!--</div>-->
<!--   <img src="assets/images/DeSnoepKoning.png" class="snoeplogo">-->
<!--</div>-->
<!---->
<!---->
<!--<script>-->
<!--    function myFunction() {-->
<!--        var x = document.getElementById("myTopnav");-->
<!--        if (x.className === "topnav") {-->
<!--            x.className += " responsive";-->
<!--        } else {-->
<!--            x.className = "topnav";-->
<!--        }-->
<!--    }-->
<!--</script>-->
<!--</body>-->
