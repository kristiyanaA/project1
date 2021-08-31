<?php
include("./include.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta
      name="viewport"
      content="width=device-width, initial-scale=1, maximum-scale=1"
    />
	<link rel="stylesheet" href="mystyle.css">
  <link rel="php" href="search.php">
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
<div class="side">
<h3 style="background-color: #ff3c8c; color: white">Базов курс </h3>
<img id="myImg" src="bazovkurs.jpg"" width="300" height="200">

<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>

<h4>За кого е подходящ този курс:</h4>
<p style="background-color: #ff748c; color: white">&#10004; За хора, които вече работят, но не са уверение в уменията си и искат ДА СЕ НАДГРАДЯТ, така и за тези, които тепърва стартират. <br> &#10004; За сериозни и амбицирани хора, които изгарят от желание да бъдат добри в своята професия на маникюрист.<br> &#10004; За всички, които имат проблем в комуникацията със своите клиенти, саморекламирането, ценообразуването и всички други важни неща за един успешен маникюрист.</p>

<h4>Курсът ще включва следните модули:</h4>

<p style="background-color: #ff748c; color: white">&#10004; Дезинфекция и стерилизация <br> &#10004; Маникюр – основни части на нокътя, видове форми и начини за оформяне, видове кожички и начини за обработване на кожичките. Всичко за подготовката на нокът преди слагането на покритие върху него . <br> &#10004; Поставяне на гел лак с точни стъпки и как правилно да нанасяме за повече издържливост.<br> &#10004; Изграждане с гел <br> &#10004; Изграждане с акрил <br> &#10004; Изграждане с удължители - дипинг система</p>




<h3 style="background-color: #ff3c8c; color: white">  Курс за правилно сваляне на гел лак</h3>
<img id="myImg" src="kurs5.png" width="300" height="200">

<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>
<h4>Курсът ще включва следните модули:</h4>

<p style="background-color: #ff748c; color: white">&#10004; Сваляне на гел лак с електрическа пила - как правилно се държи пилата и в какви посоки се извършват движенията. <br> &#10004; Сваляне на гел лак с накисване. </p>

<h3 style="background-color: #ff3c8c; color: white">  Курс за декорации</h3>
<img id="myImg" src="kurs00.png" width="300" height="200">

<div id="myModal" class="modal">
  <span class="close">&times;</span>

  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>
<h4>Курсът ще включва следните модули:</h4>

<p style="background-color: #ff748c; color: white">&#10004; Как правилно се държи четката <br> &#10004; Прави линии  <br> &#10004; Пеперуди  <br> &#10004; цветя  <br> &#10004; Мрамор   </p>
</div>
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}
</script>
<div class="footer">
  <small><i>Copyright &copy; 2021 Kristiyana</i></small>
</div>

</body>
</html>
