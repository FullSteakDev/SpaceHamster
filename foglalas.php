<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rólunk</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<section class="header">

    <a href="kezdolap.php" class="logo">corleOne</a>

    <nav class="navbar">
        <a href="kezdolap.php">kezdőlap</a>
        <a href="rolunk.php">rólunk</a>
        <a href="utazasok.php">utazások</a>
        <a href="foglalas.php">foglalás</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</section>

<div class="heading" style="background:url(img/foglalas.png) no-repeat">
    <h1>foglalás</h1>
</div>

<section class="foglalas">

    <h1 class="heading-title">foglald le most az utad!</h1>

    <form action="foglalas_minta.php" method="post" class="foglalas-minta">

        <div class="flex">
            <div class="inputBox">
                <span>név :</span>
                <input type="text" placeholder="Kérlek add  meg  a neved" name="név">
            </div>
            <div class="inputBox">
                <span>email :</span>
                <input type="email" placeholder="Kérlek add  meg  az email címed" name="email">
            </div>
            <div class="inputBox">
                <span>telefon :</span>
                <input type="number" placeholder="Kérlek add  meg  a telefonszámod" name="telefon">
            </div>
            <div class="inputBox">
                <span>lakcím :</span>
                <input type="text" placeholder="Kérlek add  meg  a lakcímed" name="lakcím">
            </div>
            <div class="inputBox">
                <span>hova :</span>
                <input type="text" placeholder="Ahova szeretnél menni" name="bolygó">
            </div>
            <div class="inputBox">
                <span>utasszám :</span>
                <input type="number" placeholder="Hány fő" name="utas">
            </div>
            <div class="inputBox">
                <span>oda :</span>
                <input type="date" name="oda">
            </div>
            <div class="inputBox">
                <span>vissza :</span>
                <input type="date" name="vissza">
            </div>
        </div>

        <input type="submit" value="megerősítés" class="btn" name="send">

    </form>

</section>




<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>ugrás</h3>
            <a href="kezdolap.php"> <i class="fas fa-angle-right"></i> kezdőlap</a>
            <a href="rolunk.php"> <i class="fas fa-angle-right"></i> rólunk</a>
            <a href="utazasok.php"> <i class="fas fa-angle-right"></i> utazások</a>
            <a href="foglalas.php"> <i class="fas fa-angle-right"></i> foglalás</a>
        </div>

        <div class="box">
            <h3>elérhetőségeink</h3>
            <a href="#"> <i class="fas fa-phone"></i> 123456789</a>
            <a href="#"> <i class="fas fa-envelope"></i> jolvagyokkoszi@gmail.com</a>
            <a href="#"> <i class="fas fa-map"></i> pécs, magyarország</a>
        </div>

        <div class="box">
            <h3>kövess minket</h3>
            <a href="#"> <i class="fab fa-facebook"></i> facebook</a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram</a>
            <a href="#"> <i class="fab fa-youtube"></i> youtube</a>
        </div>

    </div>

    <div class="author"> készítette <span>Farkas Barna</span></div>

</section>


<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="script.js"></script>

</body>
</html>
