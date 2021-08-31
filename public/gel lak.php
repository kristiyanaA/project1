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
<div class = "main">
    <div class="side">
        <h2 style="text-align: center">SECRETLY - гел лакове</h2>

        <div class="gallery">
            <a target="_blank" href="sec1.jpg1.jpg">
                <img src="sec1.jpg" alt="Cinque Terre" width="600" height="400">
            </a>
            <div class="desc">ГЕЛ ЛАК SECRETLY</div>
        </div>

        <div class="gallery">
            <a target="_blank" href="sec2.jpg">
                <img src="sec2.jpg" alt="Forest" width="600" height="400">
            </a>
            <div class="desc">ГЕЛ ЛАК SECRETLY</div>
        </div>

        <div class="gallery">
            <a target="_blank" href="sec3.jpg">
                <img src="sec3.jpg" alt="Northern Lights" width="600" height="400">
            </a>
            <div class="desc">ГЕЛ ЛАК SECRETLY</div>
        </div>

        <div class="gallery">
            <a target="_blank" href="sec4.jpg">
                <img src="sec4.jpg" alt="Mountains" width="600" height="400">
            </a>
            <div class="desc">ГЕЛ ЛАК SECRETLY</div>
        </div>
        <div class="gallery">
            <a target="_blank" href="sec5.jpg">
                <img src="sec5.jpg" alt="Northern Lights" width="600" height="400">
            </a>
            <div class="desc">ГЕЛ ЛАК SECRETLY</div>
        </div>
        <div class="gallery">
            <a target="_blank" href="sec6.jpg">
                <img src="sec6.jpg" alt="Northern Lights" width="600" height="400">
            </a>
            <div class="desc">ГЕЛ ЛАК SECRETLY</div>
        </div>
        <div class="gallery">
            <a target="_blank" href="sec7.jpg">
                <img src="sec7.jpg" alt="Northern Lights" width="600" height="400">
            </a>
            <div class="desc">ГЕЛ ЛАК SECRETLY</div>
        </div>

        <div class="gallery">
            <a target="_blank" href="sec8.jpg">
                <img src="sec8.jpg" alt="Northern Lights" width="600" height="400">
            </a>
            <div class="desc">ГЕЛ ЛАК SECRETLY</div>
        </div>
        <div class="gallery">
            <a target="_blank" href="sec9.jpg">
                <img src="sec9.jpg" alt="Northern Lights" width="600" height="400">
            </a>
            <div class="desc">ГЕЛ ЛАК SECRETLY</div>
        </div>
        <div class="gallery">
            <a target="_blank" href="sec10.jpg">
                <img src="sec10.jpg" alt="Northern Lights" width="600" height="400">
            </a>
            <div class="desc">ГЕЛ ЛАК SECRETLY</div>
        </div>
    </div>

    <div class="footer">
        <small><i>Copyright &copy; 2021 Kristiyana</i></small>
    </div>

</body>
</html>
