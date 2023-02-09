<?php
    echo '<table border=2>';
    for ($red=0; $red<=255; $red += 75) 
    {
        echo '<tr>';
        for ($green=0; $green<=255; $green += 75)
        {
            for ($blue=0; $blue<=255; $blue += 75)
            {
                echo '<td style="background-color:RGB('.$red.', '.$green.', '.$blue.'); color: #fff;"> rgb('.$red.', '.$green.', '.$blue.')</td>';
            }
        }
    }
    echo'</table>';
?>
