<!DOCTYPE html>
<html lang="en">

<head>
    
<?php include_once './include/head.php';?>
</head>

<body>
     <audio autoplay src="./mp3/video-358ff113995a32891edf36e90331302f-V.mp3"></audio>
    <div class="wrapper">
    <?php include_once './include/topbar.php';?>

        <?php include_once './include/navbar.php';?>


        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Kontaktirajte nas</h2>
                    </div>
                    <div class="col-12">
                        <a href="VizijaBuducnost.php">Vizija Budućnost</a>
                        <a href="forum.php">Forum</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->


        <!-- Contact Start -->
        <div class="contact wow fadeInUp">
            <div class="container">
                <div class="section-header text-center">
                    <p>Ostanimo u kontaktu</p>
                    <h2>Sa svim pitanjima</h2>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="contact-info">
                            <div class="contact-item">
                                <i class="flaticon-address"></i>
                                <div class="contact-text">
                                    <h2>Gdje smo</h2>
                                    <p><i class="fa fa-map-marker-alt"></i> <a href="https://www.google.com/maps/place/Borina%C4%8Dka+ul.+50,+32100,+Vinkovci/@45.3015866,18.7779246,17z/data=!3m1!4b1!4m5!3m4!1s0x475c8b2b0f9ff889:0x3877eeaad3bf36a2!8m2!3d45.3015866!4d18.7801133">Vinkovci Borinačka 50</a></p>
                                </div>
                            </div>
                            <div class="contact-item">
                                <i class="flaticon-call"></i>
                                <div class="contact-text">
                                    <h2>Telefon</h2>
                                    <a class="tel"href="tel:+00385912424500">00385 91 242 4500</a>
                                </div>
                            </div>
                            <div class="contact-item">
                                <i class="flaticon-send-mail"></i>
                                <div class="contact-text">
                                    <h2>Email</h2>
                                    <p><a href="mailto:someone@example.com">info@lux-universo.hr</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="contact-form">
                            <div class="control-group">
                            <div id="success"></div>
                            <?php include_once './include/form.php';?>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->

        <?php include_once './include/footer.php';?>
        
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    </div>
    <?php include_once './include/javascripts.php';?>
   
</body>

</html>