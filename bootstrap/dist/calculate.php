<?php
session_start();

$_SESSION['msg']="Successfully calculated the operation";
$msg = $_SESSION['msg'];

$number1=$_POST['number1'];
$number2=$_POST['number2'];
$calculate=$_POST['calculate'];


$value=calResult($number1, $number2, $calculate);
//echo calResult($number1,$number2,$calculate);

function calResult($number1,$number2,$calculate){


    if($calculate=="add")
    {
        $compute=addCalculator($number1,$number2);
    }
    if($calculate=="subtract")
    {
        $compute=subtractCalculator($number1,$number2);
    }
    if($calculate=="multiply")
    {
        $compute=multiplyCalculator($number1,$number2);
    }
    if($calculate=="divide")
    {
        $compute=divideCalculator($number1,$number2);
    }

    return $compute;
}


function addCalculator($number1,$number2){

    $result=$number1+$number2;
    return $result;
}

function subtractCalculator($number1,$number2){

    if($number1>$number2)
    {
        $result=$number1-$number2;
        return $result;
    }
    else
    {
        return "Number1 should be larger than Number2";
    }
}

function multiplyCalculator($number1,$number2){

    $result= $number1 * $number2;
    return $result;

}

function divideCalculator($number1,$number2){

    if($number2==0)
    {
        return "can't divide";
    }
    else
    {
        $result= $number1/$number2;
        return $result;
    }
}


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







