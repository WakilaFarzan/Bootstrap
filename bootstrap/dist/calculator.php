
<?php session_start();

$_SESSION['msg']="Successfully calculated the operation";
$msg = $_SESSION['msg'];
?>


<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<section class="container">
    <?php
    if(isset($value)) {
        ?>

        <div class="row">
            <div class="col-md-8 col-md-offset-2">

                <div class="alert alert-success" role="alert">
                    <?php echo $msg; ?>
                </div>

            </div>

        </div>
    <?php } ?>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="well well-lg">
                <form action="calculate.php" method="post" class="form-horizontal">
                    <p class="text-center"><legend>Calculator</legend></p>
                    <div class="form-group">
                        <label  class="col-sm-2 control-label">Enter Number1</label>
                        <div class="col-sm-10">
                            <input type="number" name="number1" class="form-control" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-2 control-label">Enter Number2</label>
                        <div class="col-sm-10">
                            <input type="number" name="number2" class="form-control" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-2 control-label"></label>
                        <div class="col-sm-10">
                            <label class="radio-inline">
                                <input type="radio" name="calculate" id="inlineRadio3" value="add"> Add
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="calculate" id="inlineRadio3" value="subtract"> Subtract
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="calculate" id="inlineRadio3" value="divide"> Divide
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="calculate" id="inlineRadio3" value="multiply"> Multiply
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" value="calculate" class="btn btn-default">Calculate</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php
    if(isset($value)) {
        ?>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="well">
                    <p class="text-center"><strong><?php echo $value; ?></strong></p>
                </div>

            </div>

        </div>
    <?php
    }
    session_unset();
    ?>
</section>


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>

