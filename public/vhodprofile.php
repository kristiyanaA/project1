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
    <h2>Какво ще откриете тук</h2>
    <h3  style="background-color: #ff3c8c; color: white">Гел лакове на следните марки:</h5>
   <img src="Secretly.png" style="width: 500px; height: 200px ">
   <img src="snb.jpg" style="width: 500px; height: 200px ">
   <img src="kodi.jpg" style="width: 500px; height: 200px ">
   <img src="bluesky.png" style="width: 500px; height: 200px ">
    <h3  style="background-color: #ff3c8c; color: white">Курсове за маникюр и ноктопластика:</h3>
    <p>Базов курс</p>
    <img src="mani.jpg" style="width: 500px; height: 200px ">
    <p>Курс за правилно сваляне на гел лак/ноктопластика с електрическа пила</p>
    <img src="pila.jpg" style="width: 500px; height: 200px ">
    <p> Курс по декорации</p>
    <img src="dec.jpg" style="width: 500px; height: 200px ">
    <img src="mani2.jpg" style="width: 500px; height: 200px ">
  </div>
  </div>
  <div class="main">
    <h3  style="background-color: #ff3c8c; color: white">Съвети</h3>
    <h5><b>1.</b>Как да подбирате правилните патериали</h5>
    <h5><b>2.</b>Защо дезинфекцията е толкова важна, без значение дали работите в салон или си поддържате маникюра в домашни условия.</h5>
    <img src="dez.jpg" style="width: 500px; height: 200px ">
    <img src="dez1.jpg" style="width: 500px; height: 200px ">
    <h2 style="background-color: #ff3c8c; color: white">Нашата цел</h2>
    <p>Да можете да си закупите качествени материали за вашия изящен маникюр и за този на вашите клиенти. Да получите обективна информация за поддръжката на маникюр и за вашето здраве. </p>
    <br>

</div>
<div class="footer">
  <small><i>Copyright &copy; 2021 Kristiyana</i></small>


</body>
</html>
