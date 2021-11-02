<?php
error_reporting(-1);
ini_set('display_errors', 'on');
header('Content-Type: text/html; charset=utf-8');

/*
 * CONTROLLER BLOCK + MODEL BLOCK
 * В этой части идёт создание и обработка PHP кода
 */
$title = 'Домашняя работа php 11';

//$country = [
//    1 => 'завтрак',
//    2 => 'обед',
//    3 => 'ужин'
//];
//echo '<pre>' . print_r($country) . '</pre>'


$dogs = [
    [
        'id' => 0,
        'title' => 'Chihuahua',
        'lifespan' => '13-15 years',
        'color' => 'red',
        'price' => 500,
    ],
    [
        'id' => 1,
        'title' => 'Greyhound',
        'lifespan' => '10-14 years',
        'color' => 'grey',
        'price' => 1000,
    ],
    [
        'id' => 2,
        'title' => 'Kolli',
        'lifespan' => '10-14 years',
        'color' => 'yellow',
        'price' => 200,
    ],
    [
        'id' => 3,
        'title' => 'Mastif',
        'lifespan' => '8-10 years',
        'color' => 'brown',
        'price' => 1000,
    ],
    [
        'id' => 4,
        'title' => 'Bulltearrier',
        'lifespan' => '11-14 years',
        'color' => 'white',
        'price' => 800,
    ],
];



/*
 * VIEW BLOCK / Вид сайта
 * В этой части идёт вывод HTML и PHP
 */
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<table>
    <tr>
        <th>ID</th>
        <th>Порода</th>
        <th>Продолжительность жизни</th>
        <th>Цвет</th>
        <th>Цена</th>
    </tr>
    <?php foreach ($dogs as $dog) { ?>
        <tr <?php if($dog['title'] === 'Bulltearrier') {?>style="font-weight: 600;"<?php }?>>
            <td <?php if($dog['id'] % 2 === 0) {?>style="text-decoration: underline;"<?php }?>><?= $dog['id'] ?></td>
            <td <?php if($dog['title'] === 'Chihuahua') {?>style="font-style: italic;"<?php }?>><?= $dog['title'] ?></td>
            <td><?= $dog['lifespan'] ?></td>
            <td class="<?= $dog['color'] != 'brown' ? $dog['color'] : '' ?>"></td>
            <td <?php if($dog['price'] > 900) {?>style="color: red;"<?php }?>><?= $dog['price'] ?></td>
        </tr>
    <?php } ?>
</table>
<?php for ($i = 1; $i < 10; $i++) {
    echo $i . '<br>';
}?>
<?php
$i = 1;
while($i < 5) {
    echo $i . '<br>';
    $i++;
}?>
<?php
$i = 1;
do {
    echo $i . '<br>';
    $i++;
} while ($i < 1)
?>
</body>
