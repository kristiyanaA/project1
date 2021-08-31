<?php
include("./include.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="mystyle.css">
<title>Маникюр</title>
<meta charset="utf-8">
</head>
	<div class = "header">
<header>
	<img src="logok.png">
  <p>Материали <b>и</b> съвети</p>
    <form action="" method="GET" name="">
        <table>
            <tr>
                <td><input type="text" name="k" value="<?php echo isset($_GET['k']) ? $_GET['k'] : ''; ?>" placeholder="Enter your search keywords" /></td>
                <td><input type="submit" name="" value="Search" /></td>
            </tr>
        </table>
    </form>

    <?php
    if (isset($_GET['k']) && $_GET['k'] !=''){
        $k = trim($_GET['k']);

        $keywords = explode(' ', $k);
        $query_string = "SELECT * FROM search_engine WHERE";
        foreach($keywords as $word){
            $query_string .= "keywords LIKE '% ".$word."%' OR";
        }
        $query_string = substr($query_string, 0, strlen($query_string) - 3);

        $cann = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME );

    }
    else
        echo '';

    ?>


    <div id="marquee-cont">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
                <td width="50px" style="background:#1174A8;">

                </td>
                <td id="marquee">
                    <marquee onmouseover="this.stop();" onmouseout="this.start();" id='scroll'>
                        СВЕТЪТ НА МАНИКЮРА <img src="logok.png" width="100px" /> ОТКРИЙ КУП ПОЛЕЗНИ СЪВЕТИ И МАТЕРИАЛИ
                    </marquee>
                </td>
            </tr>
        </table>
    </div>
</header>
</div>

<body>

<div class="navbar">
    <a href="index.php">Начало</a>
    <a href="gel lak.php">Secretly</a>
    <a href="snb.php">SNB</a>
    <a href="kodi.php">KODI</a>
    <a href="bluesky.php">Bluesky</a>
    <a href="instrumenti.php">Инструменти</a>
    <a href="gallery.php">Галерия</a>
    <a href="kursove.php">Курсове</a>
    <a href="suveti.php">Съвети</a>
    <a href="registraciq.php" style="float: right">Регистрация</a>
    <a href="vhod.php" style="float: right">Вход</a>
    <a href="zanas.php" class="right">За нас</a>
</div>
<div class="main">

  <div class="side">
    <h2>СЪВЕТИ</h2>
    <h3  style="background-color: #ff3c8c; color: white">Хидратация</h5>
   <img src="hid.jpg" style="width: 500px; height: 200px ">
   <p style="background-color: #ff748c; color: white">&#10004;След всяко измиване на ръцете, не пропускайте да нанесете хидратиращ крем. Препоръчваме ви тези, създадени за ръце и нокти. Този малък ритуал ще предпази кожата от изсушаване и в същото време ще хидратира ноктите, ще стимулира растежа им и ще ги направи по-здрави. През летния сезон не пропускайте да нанасяте компенсираща, дълбоко овлажняваща грижа за ръце и нокти, особено ако често се излагате на влиянието на слънцето и хлора в басейните.


    <h3  style="background-color: #ff3c8c; color: white">Оформяне</h5>
   <img src="of.jpg" style="width: 500px; height: 200px ">
   <p style="background-color: #ff748c; color: white">&#10004;Оформянето на ноктите е важна стъпка от грижата за красив маникюр. Не забравяйте обаче, че е важно да подходите с внимание, както към пилите, които избирате, така и към самата техника. Никога не използвайте прекалено груби пили. За предпочитане са картонените и стъклените, тъй като те са по-фини и не увреждат нокътната плочка. Металните пили често водят до нацепване и счуване. Пилете винаги в една посока.

    <h3  style="background-color: #ff3c8c; color: white">Подготовка и подсилване</h5>
   <img src="pod.jpg" style="width: 500px; height: 200px ">
   <p style="background-color: #ff748c; color: white">&#10004;Независимо дали ще използвате лак за нокти или не, заздравителят е почти задължителен. Заздравителите за нокти са разработени така, че да изолират нокътната плочка от вредните химикали и оцветяващите пигменти на лака. Едновременно с това те имат подхранващо и подсилващо действие, благодарение на съдържанието на калций, витамин А и Е и растителни компоненти.

    <h3  style="background-color: #ff3c8c; color: white">Грижа за кожичките</h5>
   <img src="grija.jpg" style="width: 500px; height: 200px ">
   <p style="background-color: #ff748c; color: white">&#10004;Кожичките, които обгръщат нокътната плочка имат защитна роля. Неправилно е към тях да се отнасяме като към нещо ненужно, което трябва да бъде на всяка цена отстранено. По-скоро говорим за грижа. Препоръчваме ви да нанасяте специално предназначено за целта олио, което подхранва и прави по-лесно оформянето на кожичките. Изрязването им често причинява инфекции, затова бъдете внимателни.

    <h3  style="background-color: #ff3c8c; color: white">Масаж</h5>
   <img src="masaj.jpg" style="width: 500px; height: 200px ">
   <p style="background-color: #ff748c; color: white">&#10004;Масажът на тялото, гърба или ходилата със сигурност е нещо, което всеки е опитвал. Време е да опитате и масаж на ноктите и ръцете… Докато си почивате пред телевизора вземете малко количество кокосово масло или зехтин и с нежни движения го втрийте в кожата на ръцете и по нокътните плочки, до пълното му попиване. Процедурата би била още по-ефективна, ако я прилагате всяка вечер и след завършването й си сложите меки памучни ръкавици за през нощта.


</div>
<div class="footer">
  <small><i>Copyright &copy; 2021 Kristiyana</i></small>


</body>
</html>
