<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Homepage</title>
        <link rel="stylesheet" type="text/css" href="Sources/CSS/containers.css">
        <link rel="stylesheet" type="text/css" href="Sources/CSS/colorsAndDesign.css">
        <link rel="stylesheet" type="text/css" href="Sources/CSS/textStyles.css">

    </head>
    <body class="style">
        <header class="header colorHome headerHome">
            <p class="headline headlineGrey">Meet the Hanuschs</p>
        </header>

<<<<<<< HEAD:index.html
        <div class="row rowHomepage">
            <a class="columnLink" href="Templates/julius.html">
=======
        <div class="row">
            <a class="columnLink" href="Templates/PersonalSites/julius.php">
>>>>>>> develop:index.php
                <div class="column colorBlack">
                    <img class="picture" src="Sources/Pictures/JuliusBlack.png" alt="Julius Hanusch Profilbild"/>
                    <p class="h2 h2White">Julius Hanusch</p>
                    <p class="textWhite">Currently Computer Science student at Technische Universit&auml;t Dresden.</p>
                </div>
            </a>
        
            <a class="columnLink" href="Templates/comingSoon.php">
                <div class="column colorWhite">
                    <img class="picture" src="Sources/Pictures/OliviaWhite.jpeg" alt="Olivia Hanusch Profilbild"/>
                    <p class="h2 h2Black">Olivia Hanusch</p>
                    <p class="textBlack">Presently teaching degree student at "Friedrich Schiller Universit&auml;t" Jena.</p>
                </div>
            </a>
        
            <a class="columnLink" href="Templates/PersonalSites/cornelius.php">
                <div class="column colorBlack">
                    <img class="picture" src="Sources/Pictures/HanuschCorneliusBlack.jpg" alt="Cornelius Hanusch Profilbild"/>
                    <p class="h2 h2White">Cornelius Hanusch</p>
                    <p class="textWhite">Since August 2022 in mechatronics education at Global Foundries Dresden.</p>
                </div>
            </a>
        </div>
 
    </body>
    <footer class="footer colorHome">
        <?php
            if(isset($_SESSION["useruid"])){
                echo "<a class='link linkHeader' href='Templates/InternalArea/intern.php'>Intern</a>";
            }
            else{
                echo "<a class='link linkHeader' href='Templates/InternalArea/login.php'>Intern</a>";
            }
        ?>

    </footer>
</html>