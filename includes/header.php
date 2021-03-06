
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >


        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Lifestyle Store</title>
         <link href="index.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        
            <div class="container" style="padding-bottom: 50px;">
                <div class="navbar navbar-inverse navbar-fixed-top">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        
                    </button>
                    <?php
                            if(isset($_SESSION['id'])) {
                        ?>
                    <a href="products.php" class="navbar-brand">Lifestyle Store</a>
                    <?php
                            } else {
                                ?>
                    <a href="index.php" class="navbar-brand">Lifestyle Store</a>
                    <?php
                            }
                        ?>
                    
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <?php
                            if(isset($_SESSION['id'])) {
                        ?>
                        <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                        <li><a href="settings.php"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
                         <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                         ?>
                         <?php
                            } else {
                                ?>
                        <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                        <?php
                            }
                        ?>
                      
                    </ul>
                </div>
            </div>
        </div>
    </body>
</html>

