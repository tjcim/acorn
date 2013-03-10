<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="css/bootstrap.css">
        <style>
            body {
                padding-top: 60px;
                padding-bottom: 40px;
            }
        </style>
        <link rel="stylesheet" href="css/bootstrap-responsive.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="/">Acorn</a>
                    <div class="nav-collapse collapse pull-right">
                        <ul class="nav">
                            <li><a href="/">Home</a></li>
                            <li class="active"><a href="login.php">Login Page</a></li>
                            <li><a href="users.php">Users Page</a></li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <div class="container">
                <div class="row">
                        <div class="span12">
                            <div class="hero-unit">
                                <h1>Welcome to the app!</h1>
                                <p>Login below in order to access all the great things we have!</p>
                            </div>
                            <form action="verify-better.php" method="post" class="form-horizontal">
                                <div class="control-group">
                                    <label class="control-label" for="username">Username</label>
                                    <div class="controls">
                                        <input type="text" name="username" placeholder="Username">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="password">Password</label>
                                    <div class="controls">
                                        <input type="password" name="password" placeholder="Password">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="controls">
                                        <button type="submit" name="submit" class="btn btn-large btn-primary">Sign in</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                </div> <!-- /row -->
        </div> <!-- /container -->
        <div class="container">
            <hr>

            <footer>
                <p>&copy; Trevor Christiansen 2013</p>
            </footer>

        </div> <!-- /container -->
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
