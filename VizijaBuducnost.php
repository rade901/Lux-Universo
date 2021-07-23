<!DOCTYPE html>
<html lang="en">

<head>
<?php include_once './include/head.php';?>
</head>

<body>
     <audio autoplay src="./mp3/video-358ff113995a32891edf36e90331302f-V.mp3"></audio>
    <div class="wrapper">
        <!-- Top Bar Start -->
        <?php include_once './include/topbar.php';?>
        <?php include_once './include/navbar.php';?>


        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Vizija Budućnost</h2>
                    </div>
                    <div class="col-12">
                        <a href="index.php">Početna</a>
                        <a href="kontakt.php">Kontakt</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->


        <!-- About Start -->
        <div class="about wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-6">
                        <div class="about-img">
                            <img src="img/vizija.png" alt="Image">
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6">
                        <div class="section-header text-left">
                            <h2>Vizija i budućnost</h2>
                        </div>
                        <div class="about-text">
                            <p>
                                Naša vizija i budućnost ovisi i o vama kao potrošačima. Cilj nam je objediniti i stvoriti jedan oblak gdje ćemo u svakom trenutku biti dostupni kako bi vaše potrebe a u skladu europskim normativima bili i dostupni na tržištu. Danas smo suočeni s nekim
                                novim vremenima i u skladu s tim nastojimo postići maksimalnu transparentnost. Klimatske promjene su vidljivo utjecale na samu kvalitetu života tako i kvalitetu boravka u samim objektima i domaćinstvima. Vizija nam je objediniti
                                nekoliko sektora poslovanja te bi preko naše platforme imali dostupno kako se kaže sve na jednom mjestu. Učinimo san mirnijim.
                            </p>
                            <a class="btn" href="kontakt.php">Javite nam se</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <?php include_once './include/Gallery.php';?>

        <?php include_once './include/footer.php';?>
      

        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    </div>
    <?php include_once './include/javascripts.php';?>
    
</body>

</html>