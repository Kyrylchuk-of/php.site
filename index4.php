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
        <a class="active" href="index4.php"><h2>Фото галерея</h2></a>
        <br>
        <p><h4>На даній сторінці, будуть показані знімки екрана з кодом сайту, в знак доказу, що сайт зроблений мною.</h4> </p>

        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <a href="index3.php"><h2>Назад до завдання 4  <--</h2></a>
    </div>

    <!-- Page content -->
    <div class="content">
<div class="layer3">
    <center><img src="1.png" width="70%"></center>
    <center><h2>На діній світлині зображено PHP-код першої сторінки.</h2></center>
</div>
        <hr size="15px" color="red">
        <div class="layer3">
            <center><img src="3.png" width="70%"></center>
            <center><h2>На діній світлині зображено PHP-код другої сторінки, другого завдання.</h2></center>
        </div>
        <hr size="15px" color="red">
        <div class="layer3">
            <center><img src="2.png"width="70%"></center>
            <center><h2>На діній світлині зображено PHP-код третьої сторінки (з методом implode).</h2></center>
        </div>
        <hr size="15px" color="red">
    </div>

</html>
