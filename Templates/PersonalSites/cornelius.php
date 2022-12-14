<?php
    session_start();
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Cornelius Hanusch</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../../Sources/CSS/containers.css">
        <link rel="stylesheet" type="text/css" href="../../Sources/CSS/colorsAndDesign.css">
        <link rel="stylesheet" type="text/css" href="../../Sources/CSS/textStyles.css">

    </head>
    <body class="style">
        <header class="header colorCornelius" >
            <a class="link linkHeader" href="../../index.php">Homepage</a>
            <a class="link linkHeader" href="julius.php">Julius</a>
            <a class="link linkHeader" href="../comingSoon.php">Olivia</a>
            <?php
            if(isset($_SESSION["useruid"])){
                echo "<a class='link linkHeader' href='../Includes/logout.inc.php?currentSite=cornelius'>Logout</a>";
            }
            ?>
        </header>
        <div class="top">
            <p class="headline headlineBlack">Cornelius Hanusch</p>
            <p class="text">Cornelius Hanusch is currently doing his apprenticeship at Globalfoundries Dresden to become a 
            mechatronics engineer. Therefor he has to go to the vocational school in Riesa and to the SBG 
            Dresden to achieve theoretical knowledge and skills in metalworking. He started his apprenticeship 
            in august 2022 and is expected to be finished in february 2026.""
            </p>
        </div>
        <div class="row">
            <div class="textColumn">
                <p class="h2 h2Black">Personal Data</p>
                    <p class="h3">Contact</p>
                        <div class=textRow>
                            <div class="textBoxLeft">
                                <p class="text">
                                    Mail:
                                </p>
                            </div>
                            <div class="textBoxRight">
                                <p class="text">
                                    cornelius.hanusch@gmail.com
                                </p>
                            </div>
                        </div>
                        <div class=textRow>
                            <div class="textBoxLeft">
                                <p class="text">
                                    Phone:
                                </p>
                            </div>
                            <div class="textBoxRight">
                                <p class="text">
                                    +49(0)17699324835
                                </p>
                            </div>
                        </div>

                <p class="h3">Education</p>
                <div class=textRow>
                    <div class="textBoxLeft">
                        <p class="text">
                            2022-2026
                        </p>
                    </div>
                    <div class="textBoxRight">
                        <p class="text">
                             Mechatronics apprenticeship at Global Foundries Dresden.
                        </p>
                    </div>
                </div>
                <div class=textRow>
                    <div class="textBoxLeft">
                        <p class="text">
                            2014-2022
                        </p>
                    </div>
                    <div class="textBoxRight">
                        <p class="text">
                            A-level (Abitur) at Gymnasium Coswig
                        </p>
                    </div>
                </div>
                <!-- <div class=textRow>
                    <div class="textBoxLeft">
                        <p class="text">
                            2010-2013
                        </p>
                    </div>
                    <div class="textBoxRight">
                        <p class="text">
                            Gymnasium Coswig
                        </p>
                    </div>
                </div>                -->
            </div>
            <div class="textColumn">
                <p class="h2 h2Black">Interests and Experiences </p>
                    <p class="h3">Tabletennis</p>
                        <p class="text">Cornelius Hanusch does tabletennis since 2016. He plays for TuS Coswig 1920 in the county league
                            U19 and in the 3rd and 2nd county class men. In season 2021/2022 he and his team were able to achieve 
                            the 1st place in the county league U19.</p>
                    <p class="h3">Building a PC</p>
                        <p class="text">Cornelius Hanusch has knowledge about building a PC.</p>

            </div>
        </div>
    </body>
    <footer class="footer colorCornelius">
        <?php
            if(isset($_SESSION["useruid"])){
                echo "<a class='link linkHeader' href='../InternalArea/intern.php'>Intern</a>";
            }
            else{
                echo "<a class='link linkHeader' href='../InternalArea/login.php'>Intern</a>";
            }
        ?>
    </footer>
</html>