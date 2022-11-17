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
            <p class="headline headlineGrey">Internal Area</p>
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
        <div>
            <form action="../Includes/createUser.inc.php" method="post">
                <input type="text" name="name" placeholder="Name">
                <br>
                <input type="text" name="uid" placeholder="Username">
                <br>
                <input type="text" name="pwd" placeholder="Password">
                <br>
                <input type="text" name="pwdrepeat" placeholder="Repeat Password">
                <br>
                <button type="submit" name="submit">Create User</button>
            </form>
        
        </div>





        <footer class="footer colorHome">
            <a class="link linkHeader" href="../../index.php">Logout</a>
        </footer>

    </body>