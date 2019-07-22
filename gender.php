<?php
/**
 * Created by PhpStorm.
 * User: imac
 * Date: 17.07.19
 * Time: 22:23
 */

function gender($name)
{
    $letter_end = (mb_substr($name, -1, 1));
    if (mb_strtolower($name) == 'саша' || mb_strtolower($name) == 'женя' || mb_strtolower($name) == 'слава') {
        return null;
    } elseif ($letter_end == 'а' || $letter_end == 'я') {
        return 'woman';
    } else {
        return 'man';
    }
}

    echo gender('Александр').'<br>';
    echo gender('Александра').'<br>';
    echo gender('Саша').'<br>';

assert(null == gender('саша'));
assert(null == gender('Женя'));
assert(null == gender('слава'));
assert('woman' == gender('Зина'));
assert('woman' == gender('Александра'));
assert('man' == gender('Александр'));
assert('man' == gender('Алексей'));