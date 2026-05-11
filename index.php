<?php
$studentName = "Герасимчук Владислав";
$group = "ВТ-24-1";
$subgroup = "1";
$variant = "7";
?>
<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Лабораторна робота №1</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            margin: 0;
            padding: 20px;
            color: #222;
        }

        main {
            max-width: 900px;
            margin: 0 auto;
        }

        h1 {
            margin-bottom: 5px;
        }

        .info {
            margin-bottom: 20px;
            line-height: 1.6;
        }

        .task {
            background: white;
            border: 1px solid #ddd;
            border-radius: 6px;
            padding: 18px;
            margin-bottom: 16px;
        }

        .task h2 {
            margin-top: 0;
            font-size: 22px;
        }

        pre {
            font-family: "Times New Roman", serif;
            font-size: 18px;
            line-height: 1.5;
            margin: 0;
        }

        table.color-table {
            border-collapse: collapse;
        }

        table.color-table td {
            width: 50px;
            height: 50px;
            border: 1px solid #ffffff;
        }

        .black-field {
            width: 500px;
            height: 500px;
            max-width: 100%;
            background: black;
            position: relative;
            overflow: hidden;
        }
    </style>
</head>
<body>
<main>
    <h1>Лабораторна робота №1</h1>
    <div class="info">
        <div>Тема: Базові конструкції мови PHP</div>
        <div>ПІБ: <?php echo $studentName; ?></div>
        <div>Група: <?php echo $group; ?>, підгрупа: <?php echo $subgroup; ?></div>
        <div>Варіант: <?php echo $variant; ?></div>
    </div>

    <div class="task">
        <h2>Завдання 1</h2>
        <?php
        echo "<pre>";
        echo "Полину в мріях в <b>купель океану</b>,\n";
        echo "Відчую <i>шовковистість</i> глибини,\n";
        echo "Чарівні мушлі з дна собі дістану,\n";
        echo "Щоб <u>взимку</u>\n";
        echo "    тішили\n";
        echo "        мене\n";
        echo "            вони…";
        echo "</pre>";
        ?>
    </div>

    <div class="task">
        <h2>Завдання 2</h2>
        <?php
        $uahAmount = 1500;
        $dollarRate = 29.4;
        $dollars = intval($uahAmount / $dollarRate);

        echo "$uahAmount грн. можна обміняти на $dollars долар";
        ?>
    </div>

    <div class="task">
        <h2>Завдання 3</h2>
        <?php
        $month = 7;

        if ($month < 1 || $month > 12) {
            echo "Помилка: некоректний номер місяця";
        } elseif ($month == 12 || $month == 1 || $month == 2) {
            echo "Зима";
        } elseif ($month >= 3 && $month <= 5) {
            echo "Весна";
        } elseif ($month >= 6 && $month <= 8) {
            echo "Літо";
        } else {
            echo "Осінь";
        }
        ?>
    </div>

    <div class="task">
        <h2>Завдання 4</h2>
        <?php
        $letter = "О";
        $letterLower = mb_strtolower($letter, "UTF-8");

        switch ($letterLower) {
            case "а":
            case "е":
            case "є":
            case "и":
            case "і":
            case "ї":
            case "о":
            case "у":
            case "ю":
            case "я":
                echo "Буква $letter є голосною";
                break;
            default:
                echo "Буква $letter є приголосною";
                break;
        }
        ?>
    </div>

    <div class="task">
        <h2>Завдання 5</h2>
        <?php
        $number = mt_rand(100, 999);

        $digit1 = intval($number / 100);
        $digit2 = intval($number / 10) % 10;
        $digit3 = $number % 10;

        $sum = $digit1 + $digit2 + $digit3;
        $reverseNumber = $digit3 * 100 + $digit2 * 10 + $digit1;

        $digits = [$digit1, $digit2, $digit3];
        rsort($digits);
        $maxNumber = $digits[0] * 100 + $digits[1] * 10 + $digits[2];

        echo "Випадкове число: $number<br>";
        echo "Сума цифр: $sum<br>";
        echo "Число у зворотному порядку: $reverseNumber<br>";
        echo "Найбільше число з цих цифр: $maxNumber";
        ?>
    </div>

    <div class="task">
        <h2>Завдання 6</h2>
        <?php
        function drawTable($rows, $cols)
        {
            echo "<table class='color-table'>";

            for ($i = 0; $i < $rows; $i++) {
                echo "<tr>";

                for ($j = 0; $j < $cols; $j++) {
                    $color = sprintf("#%06X", mt_rand(0, 0xFFFFFF));
                    echo "<td style='background-color: $color;'></td>";
                }

                echo "</tr>";
            }

            echo "</table>";
        }

        drawTable(5, 5);
        ?>
    </div>

    <div class="task">
        <h2>Завдання 7</h2>
        <div class="black-field">
            <?php
            function drawSquares($n)
            {
                for ($i = 0; $i < $n; $i++) {
                    $size = mt_rand(30, 110);
                    $top = mt_rand(0, 500 - $size);
                    $left = mt_rand(0, 500 - $size);

                    echo "<div style='
                        position: absolute;
                        width: {$size}px;
                        height: {$size}px;
                        background-color: red;
                        top: {$top}px;
                        left: {$left}px;
                    '></div>";
                }
            }

            drawSquares(5);
            ?>
        </div>
    </div>
</main>
</body>
</html>
