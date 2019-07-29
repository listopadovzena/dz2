<?php
/**
 * Created by PhpStorm.
 * User: imac
 * Date: 22.07.19
 * Time: 21:07
 */


function example() {
    $a = 0;
    include __DIR__.'/include.php';
    return $a;
}

example();


//Оператор include это впринцыпи и есть функция и нужна она для того что бы подключать какой то файл в любом другом файле.
//Тойсть оператор include при его использовании будет передавать какие то данные с одного файла в другой.