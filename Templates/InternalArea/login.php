<!DOCTYPE html>
<html>
    <head>
        <title>Homepage</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../../Sources/CSS/comtainers.css">
        <link rel="stylesheet" type="text/css" href="../../Sources/CSS/colorsAndDesign.css">
        <link rel="stylesheet" type="text/css" href="../../Sources/CSS/textStyles.css">

    </head>
    <body class="style">
        <header class="header colorHome headerHome">
            <p class="headline headlineGrey">Meet the Hanuschs</p>
        </header>

        <div class="row">
            <h2>Login</h2>
            <form action="../Includes/login.inc.php" method="post">
                <input type="text" name="uid" placeholder="Username">
                <input type="text" name="pwd" placeholder="Password">
                <button type="submit" name="submit">Log In</button>
            </form>
        </div>

        <?php
            if(isset($_GET["error"])){
                if($_GET["error"] == "emptyinput"){
                    echo "<p>Please fill in all fields!<p>";
                }
                elseif($_GET["error"] == "wronglogin"){
                    echo "<p>Incorrect loging, try again!<p>";
                }
            }
        ?>


        
