<?php

$presentTime = new DateTime('now');

$destinationTime = new DateTime('2015-10-21 16:06:00');

$intervalTime = $destinationTime->diff($presentTime);

$years = $intervalTime->format('%y');
$months = $intervalTime->format('%m');
$days = $intervalTime->format('%d');
$hours = $intervalTime->format('%h');
$minutes = $intervalTime->format('%i');

$litres = round(($years*365*24*60 + $months*30*24*60 + $days*24*60 + $hours*60 + $minutes)/10000);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Back to future</title>
    <style type="text/css">
        table,
        th,
        td {
            border: 1px solid black;
        }

        td {
            text-align: center;
            width: 100px;
            height: 50px;
        }
    </style>
</head>

<body>
    <table>
        <tr class="tr_title">
            <td>MONTH</td>
            <td>DAY</td>
            <td>YEAR</td>
            <td>AM/PM</td>
            <td>HOUR</td>
            <td>MIN</td>
        </tr>
        <tr>
            <td><?= $destinationTime->format('M') ?></td>
            <td><?= $destinationTime->format('d') ?></td>
            <td><?= $destinationTime->format('Y') ?></td>
            <td><?= $destinationTime->format('A') ?></td>
            <td><?= $destinationTime->format('h') ?></td>
            <td><?= $destinationTime->format('i') ?></td>
        </tr>
        <tr>
            <td colspan='6'>DESTINATION TIME</td>
        </tr>
        <tr class="tr_title">
            <td>MONTH</td>
            <td>DAY</td>
            <td>YEAR</td>
            <td>AM/PM</td>
            <td>HOUR</td>
            <td>MIN</td>
        </tr>
        <tr>
            <td><?= $presentTime->format('M') ?></td>
            <td><?= $presentTime->format('d') ?></td>
            <td><?= $presentTime->format('Y') ?></td>
            <td><?= $presentTime->format('A') ?></td>
            <td><?= $presentTime->format('h') ?></td>
            <td><?= $presentTime->format('i') ?></td>
        </tr>
        <tr>
            <td colspan='6'>PRESENT TIME</td>
        </tr>
    </table>
    <p>Time interval : <?= $intervalTime->format('%y years %m months %d days %h hours and %i minutes') ?>.</p>
    <p>Nomber of liters : <?= $litres ?>.</p>
</body>

</html>