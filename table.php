<?php
/**
 * Created by PhpStorm.
 * User: imac
 * Date: 17.07.19
 * Time: 20:16
 */

$one = 1;
$zero = 0;
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
        <td> <?php echo $zero?></td>
        <td><?php echo $zero?></td>
        <td><?php echo $zero?></td>
    </tr>
    <tr>
        <td><?php echo $one?></td>
        <td><?php echo $zero?></td>
        <td><?php echo $zero?></td>
    </tr>
    <tr>
        <td><?php echo $zero?></td>
        <td><?php echo $one?></td>
        <td><?php echo $zero?></td>
    </tr>
    <tr>
        <td><?php echo $one?></td>
        <td><?php echo $one?></td>
        <td><?php echo $one?></td>
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
        <td> <?php echo $zero?></td>
        <td><?php echo $zero?></td>
        <td><?php echo $zero?></td>
    </tr>
    <tr>
        <td><?php echo $one?></td>
        <td><?php echo $zero?></td>
        <td><?php echo $one?></td>
    </tr>
    <tr>
        <td><?php echo $zero?></td>
        <td><?php echo $one?></td>
        <td><?php echo $one?></td>
    </tr>
    <tr>
        <td><?php echo $one?></td>
        <td><?php echo $one?></td>
        <td><?php echo $one?></td>
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
        <td> <?php echo $zero?></td>
        <td><?php echo $zero?></td>
        <td><?php echo $zero?></td>
    </tr>
    <tr>
        <td><?php echo $one?></td>
        <td><?php echo $zero?></td>
        <td><?php echo $one?></td>
    </tr>
    <tr>
        <td><?php echo $zero?></td>
        <td><?php echo $one?></td>
        <td><?php echo $one?></td>
    </tr>
    <tr>
        <td><?php echo $one?></td>
        <td><?php echo $one?></td>
        <td><?php echo $zero?></td>
    </tr>
</table>

</body>
</html>