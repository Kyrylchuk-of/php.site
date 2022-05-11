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
        <a class="active" href="index2.php"><h2>Завдання 3</h2></a>
        <p><h4> 1) Виведіть 16 чисел в шістнадцятковій системі, так щоб в браузері відобразилося:</h4> </p>
        <p><h4> "0 1 2 3 4 5 6 7 8 9 10 11 12 13 14 15"</h4></p>
        <a href="index3.php"><h2>Завдання 4 --></h2></a>
        <br><br><br><br><br><br><br><br><br><br>
        <a href="index1.php"><h2>Назад до завдання 2  <--</h2></a>
    </div>

    <!-- Page content -->
    <div class="content">
        <div class="layer3">
            <h2>Вивід  16-ти чисел в шістнадцятковій системі:</h2>
        </div>
<h1>
    <?php
    $my_int_1 = 0x1;
    $my_int_2 = 0x2;
    $my_int_3 = 0x3;
    $my_int_4 = 0x4;
    $my_int_5 = 0x5;
    $my_int_6 = 0x6;
    $my_int_7 = 0x7;
    $my_int_8 = 0x8;
    $my_int_9 = 0x9;
    $my_int_10 = 0xa;
    $my_int_11 = 0xb;
    $my_int_12 = 0xc;
    $my_int_13 = 0xd;
    $my_int_14 = 0xe;
    $my_int_15 = 0xf;
    $my_int_16 = 0x10;
    echo 'Варіант №1=  ';

    echo "$my_int_1"," ","$my_int_2"," ","$my_int_3"," ","$my_int_4"," ","$my_int_5"," ",
    "$my_int_6"," ","$my_int_7"," ","$my_int_8"," ","$my_int_9"," ","$my_int_10"," ",
    "$my_int_11"," ","$my_int_12"," ","$my_int_13"," ","$my_int_14"," ","$my_int_15"," ","$my_int_16";
    ?>
</h1>
        <hr size="5px" color="#35445C">
        <h1>
            <?php
            echo 'Варіант №2=  ';
            $array = [0x1, 0x2, 0x3, 0x4,0x5,0x6,0x7,0x8,0x9,0xa,0xb,0xc,0xd,0xe,0xf,0x10];
            echo implode(',',$array);
            ?>
        </h1>
<div class="layer3">
    <h2>Варіннт №1 реалізований простим- звичайним способом перечислення змінних через кому, а от варіант
    №2 виконаний способом сеператора(був створений масив з змінних, а потім був переведений у строку(implode -- Об'єднує елементи масиву в рядок))</h2>
</div>

    </div>
</div>

</html>
