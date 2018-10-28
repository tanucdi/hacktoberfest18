<?php

echo '<form method="post">';
echo '<input type="text" name="x" placeholder='.$x.'>';
echo '<input type="text" name="y" placeholder='.$y.'>';
echo '<input type="submit" value="Add" onClick="sum()">';
echo '</form>';
 
    $x=$_POST["x"];
    $y=$_POST["y"];
    echo $x+$y;
   
    ?>