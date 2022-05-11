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
        <a class="active" href="index.php"><h2>Завдання 1</h2></a>
         <p><h4>За допомогою оператора echo вивести на сторінку:</h4></p>
         <p><h4> 1) строкову змінну; </h4></p>
         <p><h4> 2) цілу змінну; </h4></p>
         <p><h4> 3) змінну дробового типу; </h4></p>
         <p><h4> 4) константу; </h4></p>
         <p><h4> 5) число в десятковій нотації; </h4></p>
         <p><h4> 6) число в вісімковій нотації; </h4></p>
         <p><h4> 7) число в шістнадцятковій нотації. </h4></p>
        <br><br><br>
        <a href="index1.php"><h2>Завдання 2 --></h2></a>
     </div>

     <!-- Page content -->
    <div class="content">
        <div class="layer3">Одним з основних елементів майже в кожній мові програмування є змінні.
            Змінні використовуються для зберігання інформації, яка потрібна буде в подальшому. У
            PHP змінні повинні починатися зі знака долара ($), після якого слідує ім’я змінної.
        </div>
        <h1><center>
            <?php
            echo "Виконання";
            ?>
        </center></h1>
        <hr size="5px" color="#35445C">
        <h1>1)
        <?php
        $str = "Змінна з текстом (строкова)"; // строкова змінна
        echo $str;
        ?>
        </h1>
        <hr size="5px" color="#35445C">
        <h1>2)
            <?php
            $cil = 100000;
            echo $cil;
            ?>
        </h1>
        <hr size="5px" color="#35445C">
        <h1>3)
            <?php
            $dr = 100.5;
            echo $dr;
            ?>
        </h1>
        <hr size="5px" color="#35445C">
        <h1>4)
            <?php
            define ("INDEPENDENCEDAY", "12th June");
            echo (INDEPENDENCEDAY);
            ?>
       (constant) </h1>
        <hr size="5px" color="#35445C">
        <h1>5)
            <?php
            $my_int_10 = 50;
            echo $my_int_10;
            ?>
            (Стандартна десяткова нотація)
        </h1>
        <hr size="5px" color="#35445C">
        <h1>6)
            <?php
            $my_int_8 = 062;
            echo $my_int_8;
            ?>
            (Те ж число в вісімковій нотації (починається з нуля 062 ))
        </h1>
        <hr size="5px" color="#35445C">
        <h1>7)
            <?php
            $my_int_16 = 0x32;
            echo $my_int_16;
            ?>
            (// Шістнадцяткова нотація (починається з 0x))
        </h1>
        <hr size="5px" color="#35445C">
    </div>
</div>

</html>