<?php
/**
 * Created by PhpStorm.
 * User: imac
 * Date: 17.07.19
 * Time: 20:16
 */

$and = 'Конъюнкция';
$or = 'Дизъюнкция';
$xor = 'Сложение по модулю 2';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<table >
    <?php echo $and //логичиский оператор и (AND &&). Выполниться если a и  b true?><br>
    (AND)
    <tr>
    <th>
        a
    </th>
        <th>
            b
        </th>
        <th>
            a/\b
        </th>
    </tr>

    <tr>
        <td> <?php echo (int)(true && false)?></td>
        <td><?php echo (int)(false && false)?></td>
        <td><?php echo (int)(false && true)?></td>
    </tr>
    <tr>
        <td><?php echo (int)(true && true)?></td>
        <td><?php echo (int)(true && false)?></td>
        <td><?php echo (int)(false && false)?></td>
    </tr>
    <tr>
        <td><?php echo (int)(true && false)?></td>
        <td><?php echo (int)(true && true)?></td>
        <td><?php echo (int)(false && true)?></td>
    </tr>
    <tr>
        <td><?php echo (int)(true && true)?></td>
        <td><?php echo (int)(true && true)?></td>
        <td><?php echo (int)(true && true)?></td>
    </tr>
</table>

<table>
    <?php echo $or //логичиский оператор или (OR ||).Выполниться если a или b true?><br>
    (OR)
    <tr>
    <th>
        a
    </th>
        <th>
            b
        </th>
        <th>
            a\/b
        </th>
    </tr>
    <tr >
        <td> <?php echo (int)(false || false)?></td>
        <td><?php echo (int)(false || false)?></td>
        <td><?php echo (int)(false || false)?></td>
    </tr>
    <tr>
        <td><?php echo (int)(false || true)?></td>
        <td><?php echo (int)(false || false)?></td>
        <td><?php echo (int)(true || false)?></td>
    </tr>
    <tr>
        <td><?php echo (int)(false || false)?></td>
        <td><?php echo (int)(false || true)?></td>
        <td><?php echo (int)(true || false)?></td>
    </tr>
    <tr>
        <td><?php echo (int)(false || true)?></td>
        <td><?php echo (int)(true || false)?></td>
        <td><?php echo (int)(true || true)?></td>
    </tr>
</table>
<table>
    <?php echo $xor //логичиский оператор исключающее или (XOR).Выполниться , если a или b true, но не оба?><br>
    (XOR)
    <tr>
    <th>
        a
    </th>
        <th>
            b
        </th>
        <th>
            a+b
        </th>
    </tr>
    <tr >
        <td> <?php echo (int)(false xor false)?></td>
        <td><?php echo (int)(false xor false)?></td>
        <td><?php echo (int)(true xor true)?></td>
    </tr>
    <tr>
        <td><?php echo (int)(false xor true)?></td>
        <td><?php echo (int)(false xor false)?></td>
        <td><?php echo (int)(true xor false)?></td>
    </tr>
    <tr>
        <td><?php echo (int)(true xor true)?></td>
        <td><?php echo (int)(false xor true)?></td>
        <td><?php echo (int)(false xor true)?></td>
    </tr>
    <tr>
        <td><?php echo (int)(true xor false)?></td>
        <td><?php echo (int)(false xor true)?></td>
        <td><?php echo (int)(false xor false)?></td>
    </tr>
</table>

</body>
</html>