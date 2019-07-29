<?php
/**
 * Created by PhpStorm.
 * User: imac
 * Date: 17.07.19
 * Time: 21:47
 */



function discriminant($a, $b, $c){
    return $b**2 - 4*$a*$c;
};
// d > 0
assert(16 == discriminant(1,-2,-3));
// d == 0
assert(0 == discriminant(-2,0,0));
// d < 0
assert(-8 == discriminant(-1,-2,-3));

echo discriminant(1,-2,-3).'<br>';
echo discriminant(-2,0,0).'<br>';
echo discriminant(-1,-2,-3);

?>


