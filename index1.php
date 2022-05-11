<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Lab 14</title>
</head>
<body bgcolor="#0D1117" text="#C0C0C0">

<style type="text/css">
    span.inlineBlock {
        display: inline-block;
        vertical-align: top;
    }
    .layer3 {
        width: 100%; /* Ширина */
        padding: 5px; /* Поля */
        background: #35445C; /* Колір фона */
    }
    .header1 {
        height: 100px;
        background: radial-gradient(#35445C, #0D1117);
    }
    .content1 {
        background: linear-gradient(to left, #2D3A4F 0%, #0D1117 100%);
    }
    /* The side navigation menu */
    .sidebar {
        margin: 0;
        padding: 0;
        width: 25%;
        background-color: #19202B;
        position: fixed;
        height: 100%;
        overflow: auto;
    }
    /* Sidebar links */
    .sidebar a {
        display: block;
        color: #C0C0C0;
        padding: 16px;
        text-decoration: none;
    }
    /* Active/current link */
    .sidebar a.active {
        background-color: #35445C;
        color: white;
    }
    /* Links on mouse-over */
    .sidebar a:hover:not(.active) {
        background-color: #555;
        color: white;
    }
    /* Page content. The value of the margin-left property should match the value of the sidebar's width property */
    div.content {
        margin-left: 25%;
        padding: 1px 16px;
        height: 1000px;
    }
    /* On screens that are less than 700px wide, make the sidebar into a topbar */
    @media screen and (max-width: 700px) {
        .sidebar {
            width: 100%;
            height: auto;
            position: relative;
        }
        .sidebar a {
            float: left;
        }
        div.content {
            margin-left: 0;
        }
    }
    /* On screens that are less than 400px, display the bar vertically, instead of horizontally */
    @media screen and (max-width: 400px) {
        .sidebar a {
            text-align: center;
            float: none;
        }
    }
    .rr {
        font-family: Pompadur, 'Comic Sans MS', cursive;
    }
    #c {
        color: #ffffff;
    }

</style>

<div class="rr">
    <!-- The sidebar -->
    <div class="sidebar">
        <h2 align="center">Лабораторна №14</h2>
        <a class="active" href="index1.php"><h2>Завдання 2</h2></a>
        <p><h4> 1) Повторіть виведення, беручи змінні в подвійні (") і одинарні лапки (').</h4> </p>
        <p><h4> 2) Проаналізуйте результат.</h4></p>
        <a href="index2.php"><h2>Завдання 3 --></h2></a>
        <br><br><br><br><br><br><br><br><br><br>
        <a href="index.php"><h2>Назад до завдання 1 <--</h2></a>
    </div>

    <!-- Page content -->
    <div class="content">
        <h1><center>
                <?php
                echo "Виконання";
                ?>
            </center></h1>
        <hr size="5px" color="#35445C">
        <h1>1)Подвійні лапки --
            <?php
            $str = "Змінна з текстом (строкова)"; // строкова змінна
            echo "$str";
            ?>
        </h1>
        <h1>Одинарні лапки --
            <?php
            echo '$str';
            ?>
        </h1>
        <hr size="5px" color="#35445C">
        <h1>2)Подвійні лапки --
            <?php
            $cil = 100000;
            echo "$cil";
            ?>
        </h1>
        <h1>Одинарні лапки --
            <?php
            echo '$cil';
            ?>
        </h1>
        <hr size="5px" color="#35445C">
        <h1>3)Подвійні лапки --
            <?php
            $drob = 100.5;
            echo "$drob";
            ?>
        </h1>
        <h1>Одинарні лапки --
            <?php
            echo '$drob';
            ?>
        </h1>
        <hr size="5px" color="#35445C">
        <h1>4)Подвійні лапки --
            <?php
            define ("INDEPENDENCEDAY", "12th June");
            echo "(INDEPENDENCEDAY)";
            ?>
        </h1>
        <h1>4)Одинарні лапки --
            <?php
            echo '(INDEPENDENCEDAY)';
            ?>
        </h1>
        <hr size="5px" color="#35445C">
        <h1>5)Подвійні лапки --
            <?php
            $my_int_10 = 50;
            echo "$my_int_10";
            ?>
        </h1>
        <h1>Одинарні лапки --
            <?php
            echo '$my_int_10';
            ?>
        </h1>
        <hr size="5px" color="#35445C">
        <h1>6)Подвійні лапки --
            <?php
            $my_int_8 = 062;
            echo "$my_int_8";
            ?>
        </h1>
        <h1>Одинарні лапки --
            <?php
            echo 'my_int_8';
            ?>
        </h1>
        <hr size="5px" color="#35445C">
        <h1>7)Подвійні лапки --
            <?php
            $my_int_16 = 0x32;
            echo "$my_int_16";
            ?>
        </h1>
        <h1>Одинарні лапки --
            <?php
            echo '$my_int_16';
            ?>
        </h1>
        <hr size="5px" color="#35445C">
        <div class="layer3">Змінні та екрануючі послідовності для спеціальних символів,
            що зустрічаються у рядках, укладених у одинарні лапки – не обробляються.
            Рядки, обрамлені апострофами, обробляються інтерпретатором PHP набагато
            швидше, ніж аналогічні рядки, укладені подвійними лапками.
        </div>
        <hr size="5px" color="#35445C">
        <center>Тобто рядок із ('') бачиться як строка.</center>
        <hr size="5px" color="#35445C">
        <div class="layer3">Причина тут проста: рядки в подвійних лапках
            інтерпретатор PHP додатково перевіряє на наявність змінних і
            якщо такі знаходяться, то замість імені змінної в рядок вставляється
            її значення. А ось рядок, укладений в апострофи, сприймається
            інтерпретатором як звичайний текст і жодних перетворень у цих
            рядках PHP не проводить. Думаю, зрозуміло, що обробка рядків в
            одинарних лапках у будь-якому випадку відбуватиметься швидше.
        </div>
        <hr size="5px" color="#35445C">
        <hr size="5px" color="#35445C">
    </div>
</div>

</html>
