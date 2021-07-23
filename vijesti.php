<!DOCTYPE html>
<html lang="en">
    <head>
    <?php include_once './include/head.php';?>
    </head>

    <body>
        <div class="wrapper">
        <?php include_once './include/topbar.php';?>
            
        <?php include_once './include/navbar.php';?>
            
            
            <!-- Page Header Start -->
            <div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>Vijesti</h2>
                        </div>
                        <div class="col-12">
                            <a href="index.php">Početna</a>
                            <a href="kontakt.php">Kontakt</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Header End -->


            <!-- Forum Start -->
      <center><?php include("vijesti/show_news.php");?></center> 
       
            <!-- Forum End -->
           
            
         <?php include_once './include/footer.php';?>
            <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        </div>

        <?php include_once './include/javascripts.php';?>

    </body>
</html>
