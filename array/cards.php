<?php

$films=array(
    array (
        'title'=>'Funny movie 3',
        'genre'=>'comedy',
        'stars'=>array(
            'leading acctress',
            'leading actor',
            'expendable dude',
            'somebody else'
        )
    ),
    array (
        'title'=>'Horror movie 3',
        'genre'=>'horror',
        'stars'=>array(
            'leading acctress',
            'leading actor',
            'expendable dude',
            'somebody else'
        )
    )
);


?>

<div>
    <table border="1">
        <tr>
            <td>Title</td>
            <td>Genre</td>
            <td>Stars</td>
        </tr>

        <?php
        foreach($films as $info){
        ?>
        <tr>
            <td><?php echo $info['title'];?></td>
            <td><?php echo $info['genre'];?></td>
            <td>
                <?php
                foreach($info['stars'] as $star){
                    ?>
                    <ul>
                       <li><?php echo $star?></li>
                </ul>
                <?php  }?>
            </td>
        </tr>
        <?php } ?>
    </table>
</div>
