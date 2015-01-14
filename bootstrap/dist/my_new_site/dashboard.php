

<?php session_start();
if(isset($_SESSION['name'])){
?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">

</head>

<body style="background-color: #009999">
<header class="container">
    <div class="row">
        <div class="col-md-12">
            <p class="text-right">
                <span class=" glyphicon glyphicon-envelope" aria-hidden="true" style="font-size:larger"></span>
                <button class="btn btn-primary" type="button">
                    Messages <span class="badge">4</span>
                </button>
                <span class="glyphicon glyphicon-globe" aria-hidden="true" style="font-size:larger"></span>
                <button class="btn btn-primary" type="button">
                    Notification <span class="badge">4</span>
                </button>
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron">
               <p class="text-center"><img src="../images/flower.jpg" class="img-circle" style="width: 250px; height: 250px;"></p>
                <h1 class="text-center"><?php  echo  $_SESSION['name'];?></h1>
            </div>
        </div>
    </div>
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
                            <li><a href="gallery.html">Gallery</a></li>
                            <li><a href="profile.php">Profile</a></li>
                            <li><a href="logout.php">Logout</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Others <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
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
        <div class="col-md-8">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Quisque volutpat condimentum velit</h3>
                </div>
                <div class="panel-body">
                    <p>Nulla metus metus, ullamcorper vel, tincidunt sed, euismod in, nibh. Quisque volutpat condimentum velit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam nec ante. Sed lacinia, urna non tincidunt mattis, tortor neque adipiscing diam, a cursus ipsum ante quis turpis. Nulla facilisi. Ut fringilla. Suspendisse potenti. Nunc feugiat mi a tellus consequat imperdiet. Vestibulum sapien. Proin quam. Etiam ultrices. Suspendisse in justo eu magna luctus suscipit. Sed lectus.</p>

                    <p>Integer euismod lacus luctus magna. Quisque cursus, metus vitae pharetra auctor, sem massa mattis sem, at interdum magna augue eget diam. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Morbi lacinia molestie dui. Praesent blandit dolor. Sed non quam. In vel mi sit amet augue congue elementum. Morbi in ipsum sit amet pede facilisis laoreet. Donec lacus nunc, viverra nec, blandit vel, egestas et, augue. Vestibulum tincidunt malesuada tellus. Ut ultrices ultrices enim. Curabitur sit amet mauris.</p>
                    <p class="text-right"><button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                            Comments
                        </button>
                    <div class="collapse" id="collapseExample">
                        <div class="well">

                            <ul class="media-list">
                                <li class="media">
                                    <a class="media-left" href="#">
                                        <img data-holder-rendered="true" src="../images/flower.jpeg" style="width: 64px; height: 64px;">
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">Media heading</h4>
                                        <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                                        <!-- Nested media object -->
                                        <div class="media">
                                            <a class="media-left" href="#">
                                                <img data-holder-rendered="true" src="../images/flower.jpeg" style="width: 64px; height: 64px;">
                                            </a>
                                            <div class="media-body">
                                                <h4 class="media-heading">Nested media heading</h4>
                                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                                                <!-- Nested media object -->
                                                <div class="media">
                                                    <a class="media-left" href="#">
                                                        <img data-holder-rendered="true" src="../images/flower.jpeg" style="width: 64px; height: 64px;">
                                                    </a>
                                                    <div class="media-body">
                                                        <h4 class="media-heading">Nested media heading</h4>
                                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Nested media object -->
                                        <div class="media">
                                            <a class="media-left" href="#">
                                                <img data-holder-rendered="true" src="../images/flower.jpeg" style="width: 64px; height: 64px;">
                                            </a>
                                            <div class="media-body">
                                                <h4 class="media-heading">Nested media heading</h4>
                                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>

                        </div>
                    </div></p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="well">
                <p class="text-center">Profile Completion</p>
                <div class="progress">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                        60%
                    </div>
                </div>
            </div>
        </div>
    </div>
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

<?php }

else {
    header("location:login.php");
}


?>

