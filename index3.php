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
        <a class="active" href="index3.php"><h2>Завдання 4</h2></a>
        <br>
        <p><h4> 1) Вивести на екран будь який вірш.</h4> </p>
        <a href="index4.php"><h2>Фото галерея--></h2></a>
        <br><br><br><br><br><br><br><br><br><br><br><br>
        <a href="index2.php"><h2>Назад до завдання 3  <--</h2></a>
    </div>

    <!-- Page content -->
    <div class="content">
        <div class="layer3">
           <h2>Гімн ОУН — Марш Українських Націоналістів,
             поета Олеся Бабія . Затверджений Проводом Українських
            Націоналістів у 1932 р.</h2>
        </div>
       <h2><center>
        <?php
        $text = "Зродились ми великої години,
з пожеж війни і з полум'я вогнів -
плекав нас біль по втраті України,
кормив нас гніт і гнів на ворогів.

І ось ідемо в бою життєвому,
тверді, міцні, незламні мов граніт -
бо плач не дав свободи ще нікому,
а хто борець - той здобуває світ.

Не хочемо ні слави ні заплати -
заплатою нам розкіш боротьби:
солодше нам у бою умирати
як жити в путах, мов німі раби.

Доволі нам руїни і незгоди -
не сміє брат на брата йти у бій.
Під синьо-жовтим прапором свободи
з'єднаєм весь великий нарід свій.

Велику правду для усіх єдину
наш гордий клич народові несе:
Батьківщині будь вірний до загину -
        нам Україна вище понад все!

Веде нас в бій борців упавших слава -
для нас закон найвищий та наказ:
Соборна Українськая Держава -
вільна, міцна, від Сяну по Кавказ.";
        $text = nl2br($text, false);
           echo $text;
        ?>
        </center></h2>
    </div>

</html>
