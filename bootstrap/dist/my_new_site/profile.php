
<?php
session_start();

$id = $_SESSION['id'];

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "newsite");

$query = "select * from signup WHERE id = $id";

$result = mysqli_query($link, $query);

$row = mysqli_fetch_assoc($result);

//print_r($row);
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
                            <li class="active"><a href="dashboard.php">Home <span class="sr-only">(current)</span></a></li>
                            <li><a href="gallery.html">Gallery</a></li>
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
        <div class="col-md-8 col-md-offset-2">
            <div class="well well-lg">
                <p class="text-right"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                        Code
                    </button></p>
                <div class="modal fade"  id="myModal" >
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title">Code</h4>
                            </div>
                            <div class="modal-body">
                                <p>Here will be tyhe code of this table&hellip;</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
            <table  class="table table-striped">

                <tr>
                    <td>Field Name</td>
                    <td>Description</td>
                </tr>

                <?php
                foreach($result as $row) {
                    ?>

                    <tr>
                        <td>Name</td>
                        <td><?php echo $row['name'] ?></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><?php echo $row['email'] ?></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><?php echo $row['password'] ?></td>
                    </tr>
                    <tr>
                        <td>Gender</td>
                        <td><?php echo $row['gender'] ?></td>
                    </tr>
                    <tr>
                        <td>Religion</td>
                        <td><?php echo $row['religion'] ?></td>
                    </tr>
                    <tr>
                        <td>Date of Birth</td>
                        <td><?php echo $row['bday'] ?></td>
                    </tr>
                    <tr>
                        <td>Nationality</td>
                        <td><?php echo $row['nationality'] ?></td>
                    </tr>
                    <tr>
                        <td>Action</td>
                    <td> <a href="">View</a> |<a href="">Edit</a> | <a href="">Delete</a></td>
                    </tr>

                <?php
                }

                ?>

            </table>
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