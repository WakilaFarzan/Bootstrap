<?php

$place= array(
    0 => array(
        'city'=>'Tokyo',
        'country'=>'japan',
        'continent'=>'Asia'
    ),

    1 => array(
        'city'=>'mexico city',
        'country'=>'mexico',
        'continent'=>'north america'
    ),
    2 => array(
        'city'=>'New York City',
        'country'=>'USA',
        'continent'=>'North America'
    ),
    3 => array(
        'city'=>'Mumbai',
        'country'=>'India',
        'continent'=>'Asia'
    ),
    4 => array(
        'city'=>'Seoul',
        'country'=>'Korea',
        'continent'=>'Asia'
    ),
    5 => array(
        'city'=>'Shanghai',
        'country'=>'China',
        'continent'=>'Asia'
    ),
    6 => array(
        'city'=>'Lagos',
        'country'=>'Nigeria',
        'continent'=>'Asia'
    ),
    7 => array(
        'city'=>'Buenos Aires',
        'country'=>'Argentina',
        'continent'=>'Africa'
    ),
    8 => array(
        'city'=>'Cairo',
        'country'=>'Egypt',
        'continent'=>'Africa'
    ),
    9 => array(
        'city'=>'London',
        'country'=>'UK',
        'continent'=>'Europe'
    )
);

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
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="well well-lg">
                <table class="table table-striped">
                    <tr>
                        <td>City</td>
                        <td>Country</td>
                        <td>Continent</td>
                    </tr>
                    <?php
                    foreach($place as $table){
                    ?>
                    <tr>
                        <td><?php echo $table['city'];?></td>
                        <td><?php echo $table['country'];?></td>
                        <td><?php echo $table['continent'];?></td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>

</section>




<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>