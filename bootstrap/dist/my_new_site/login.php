
<?php session_start() ?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
</head>
<body style="background-color: #009999">
<header class="container">
    <div class="row">
        <div class="col-md-12">
            <p class="text-right"><a href="signup.html" class="btn btn-primary btn-lg active" role="button">SignUp</a>
            </p>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12">
            <img src="../images/abstract1.jpg" width="100%" height="150">
        </div>
    </div>


    <hr>

    <div class="row">
        <div class="col-md-12">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">Brand</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
                            <li><a href="#">Gallery</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="aboutus.html">About Me</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Others <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="aboutus.html">About Us</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Contact Me</a></li>
                                    <li class="divider"></li>
                                </ul>
                            </li>
                        </ul>
                        <form class="navbar-form navbar-right" role="search">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search">
                            </div>
                            <button type="submit" class="btn btn-default">Submit</button>
                        </form>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </div>
    </div>
</header>
<section class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="well well-lg">
                <form action="checkuser.php" method="post" class="form-horizontal">
                    <div class="form-group">
                        <label  class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" class="form-control" placeholder="full name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-2 control-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" name="password" class="form-control" placeholder="password">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default">Login</button>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>

    <?php if(isset($_SESSION['msg'])){ ?>

    <div class="row">
        <div class="col-md-6 col-md-offset-3">

            <div class="alert alert-danger" role="alert">
                <?php echo $_SESSION['msg']; ?>
            </div>

        </div>

    </div>

    <?php } ?>

</section>

<footer class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="well">
                <p class="text-center">&copy;<strong> 2009 Created by Mysite</strong></p>
            </div>
        </div>
    </div>
</footer>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>


<?php if(isset($_SESSION['msgname']))  echo $_SESSION['msgname']; ?><br>
<?php if(isset($_SESSION['msgpass']))  echo $_SESSION['msgpass']; ?>
<?php session_unset() ?>

