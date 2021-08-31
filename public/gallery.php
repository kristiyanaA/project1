<?php
include("./include.php");
?>
<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
  <link rel="stylesheet" href="mystyle.css">
<title>Маникюр</title>
<meta charset="utf-8">
    <style>
        body {
            font-family: Arial, serif;
            margin: 0;
        }

        * {
            box-sizing: border-box;
        }

        img {
            vertical-align: middle;
        }

        /* Position the image container (needed to position the left and right arrows) */
        .container {
            position: relative;
        }

        /* Hide the images by default */
        .mySlides {
            display: none;
            position: center;
        }

        /* Add a pointer when hovering over the thumbnail images */
        .cursor {
            cursor: pointer;
        }

        /* Next & previous buttons */
        .prev,
        .next {
            cursor: pointer;
            position: absolute;
            top: 40%;
            width: auto;
            padding: 16px;
            margin-top: -50px;
            color: white;
            font-weight: bold;
            font-size: 20px;
            border-radius: 0 3px 3px 0;
            user-select: none;
            -webkit-user-select: none;
        }

        /* Position the "next button" to the right */
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .prev:hover,
        .next:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        /* Number text (1/3 etc) */
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        /* Container for image text */


        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Six columns side by side */
        .column {
            float: left;
            width: 16.66%;
        }

        /* Add a transparency effect for thumnbail images */
        .demo {
            opacity: 0.6;
        }

    </style>
</head>
  <div class = "header">
<header>
  <img src="logok.png" alt="">
  <p>Материали <b>и</b> съвети</p>
    <form action="" method="GET" name="">
        <table>
            <tr>
                <td><label>
                        <input type="text" name="k" value="<?php echo isset($_GET['k']) ? $_GET['k'] : ''; ?>" placeholder="Enter your search keywords" />
                    </label></td>
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
        <table width="150%"; border="0" cellspacing="0" cellpadding="0">
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
<h2 style="text-align:center">Галерия</h2>

<div class="container">
  <div class="mySlides">
    <div class="numbertext">1 / 6</div>
    <img src="kurs1.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 6</div>
    <img src="kurs2.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 6</div>
    <img src="kurs3.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">4 / 6</div>
    <img src="kurs4.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 6</div>
    <img src="kurs5.png" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">6 / 6</div>
    <img src="kurs6.jpg" style="width:100%">
  </div>

  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <div class="row">
    <div class="column">
      <img class="demo cursor" src="kurs1.jpg" style="width:100%" onclick="currentSlide(1)">
    </div>
    <div class="column">
      <img class="demo cursor" src="kurs2.jpg" style="width:100%" onclick="currentSlide(2)">
    </div>
    <div class="column">
      <img class="demo cursor" src="kurs3.jpg" style="width:100%" onclick="currentSlide(3)">
    </div>
    <div class="column">
      <img class="demo cursor" src="kurs4.jpg" style="width:100%" onclick="currentSlide(4)">
    </div>
    <div class="column">
      <img class="demo cursor" src="kurs5.png" style="width:100%" onclick="currentSlide(5)">
    </div>
    <div class="column">
      <img class="demo cursor" src="kurs6.jpg" style="width:100%" onclick="currentSlide(6)">
    </div>
  </div>
</div>
</div>
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
    let i;
    const slides = document.getElementsByClassName("mySlides");
    const dots = document.getElementsByClassName("demo");
    const captionText = document.getElementById("caption");
    if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>

<div class="footer">
  <small><i>Copyright &copy; 2021 Kristiyana</i></small>
</div>

</body>
</html>
