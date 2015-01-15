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

print_r($place);
echo $place;
echo "<br>";
echo $place[3]['continent'];
echo "<br>";
echo $place[3]['country']='Bangladesh';
echo "<br>";
echo $place [3]['city'];
echo "<br>";
echo $place [3]['country'];
echo "<br>";



$oddnumber=array(1,3,5,7,9,11,13,15,17);

foreach($place as $bkit)
{
    echo $bkit['city'].'-'.$bkit['country'].'-'.$bkit['continent'];
    echo "<br>";
}

$names=array('meem','fahad1','fahad2','arifa');

foreach($names as $name)
{
   // echo $name;
  //  echo "<br>";
}