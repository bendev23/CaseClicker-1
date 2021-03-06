<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
            <title>CS:GO Farm</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <link rel="stylesheet" href="CSS/styleLogin.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="JS/scriptLogin.js"></script>
    </head>
<body>
    <div id="loginBox">
        <div class="iCenter">
            <h1 class="titre">CS:GO Farm</h1>
            <form action="INCLUDES/login-inc.php" method="POST">
            <input class="username" type="text" name="uid" placeholder="Username">
            <input class="password" type="password" name="pass"  placeholder="Password"><br>
                <button class="submitBtn btn btn-info" type="submit" name="submit">Login</button>
            </form>
            <a class="noAccount" href="register.php"><p>Don't have an account ?</p></a>
            <a class="forget" href="forget.php"><p>Forgot your password or username ?</p></a>
        </div>
    </div>
    <footer class="text-center">
            <nav class="navbar navbar-default navbar-fixed-bottom">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                             <span class="icon-bar"></span>
                             <span class="icon-bar"></span>
                             <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="clicker.php">Clicker</a></li>
                            <li><a href="coinflip.php">Coinflip</a></li>
                            <li><a href="#">...</a></li>
                            <li><a href="#">Shop</a></li>
                        </ul>
                    </div>

                </div>

            </nav>

        </footer>
</body>
</html>
