<?php
/**
 * Created by PhpStorm.
 * User: imac
 * Date: 17.07.19
 * Time: 21:47
 */





function discriminant($a,$b,$c){

    $d=$b*$b-4*$a*$c;

    if (0<$d) {
        $x1=($b*(-1)+sqrt($d))/($a*2);
        $x2=($b*(-1)-sqrt($d))/($a*2).'<br>';
        echo 'x1='.$x1.'<br>';
        echo 'x2='.$x2;

    }
    else
    {
        if(0==$d) {
            $x=($b*(-1))/($a*2).'<br>';
         echo 'x='.$x;
        }
        else
        {
            if(0>$d)
                echo 'нет решений'.'<br>';
        }

    }
return $d;
}

echo discriminant(1,-2,-3).'<br>';
echo discriminant(-2,0,0).'<br>';
echo discriminant(-1,-2,-3);

?>


