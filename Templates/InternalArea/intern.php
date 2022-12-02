<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Interneral Area</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../../Sources/CSS/containers.css">
        <link rel="stylesheet" type="text/css" href="../../Sources/CSS/colorsAndDesign.css">
        <link rel="stylesheet" type="text/css" href="../../Sources/CSS/textStyles.css">
    </head>
    <body class="style">
        <header class="header colorHome headerHome">
        <a class="link linkHeader" href="../../index.php">Homepage</a>
        <a class="link linkHeader" href="../PersonalSites/julius.php">Julius</a>
        <a class="link linkHeader" href="../comingSoon.php">Olivia</a>
        <a class="link linkHeader" href="../PersonalSites/cornelius.php">Cornelius</a>
        <a class="link linkHeader" href="../Includes/logout.inc.php?curentSite=julius">Logout</a>

        </header>
        <!-- <div class="">
            <form action="../Includes/newContent.inc.php method="post"">
                <input type="text" name="message">
                <br>
                <input type="text" name="content">
                <br>
                <input type="submit" value="Submit">
            </form>
        
        </div> -->

        <?php
            if($_SESSION["userrole"] == 'admin'){
                echo 
                    "<div class='rowFields'>
                        <div class='boxStandart'>
                            <form class='formStandart' action='../Includes/createUser.inc.php' method='post'>
                                <input type='text' name='name' placeholder='Name'>
                                <input type='text' name='uid' placeholder='Username'>
                                <input type='text' name='pwd' placeholder='Password'>
                                <input type='text' name='pwdrepeat' placeholder='Repeat Password'>
                                <br>
                                <select name='role' placeholder='Role'>
                                    <option value='member'>Member</option>
                                    <option value='admin'>admin</option>
                                </select>
                                <button class='buttorn' type='submit' name='submit'>Create User</button>
                            </form>
                        </div>
                    </div>";}

                    if(isset($_GET["error"])){
                        if($_GET["error"] == "emptyinput"){
                            echo "<p>Please fill in all fields!<p>";
                        }
                        elseif($_GET["error"] == "invaliduiid"){
                            echo "<p>Choose proper username!<p>";
                        }
                        elseif($_GET["error"] == "passwordmatch"){
                            echo "<p>Passwords doesn't match!<p>";
                        }
                        elseif($_GET["error"] == "stmtfailed"){
                            echo "<p>Unexpected error, please try again!<p>";
                        }
                        elseif($_GET["error"] == "usernametaken"){
                            echo "<p>Username aready taken, please choose another one!<p>";
                        }
                        elseif($_GET["error"] == "none"){
                            echo "<p>New user created!<p>";
                        }
                        
                    }
        ?>






        <footer class="footer colorHome">
            <a class='link linkHeader' href='intern.php'>Intern</a>
        </footer>

    </body>