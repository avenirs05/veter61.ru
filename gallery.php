<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <meta name="format-detection" content="telephone=no">
  
    <title>Фотогалерея</title>
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <link rel="shortcut icon" href="/imgs/fav.png" type="image/png">
    <link type="text/css" rel="stylesheet" href="css/lightgallery.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">    
    <link href="style.css" rel="stylesheet">

    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/lightgallery.min.js"></script>
    <script src="js/lg-thumbnail.min.js"></script>

    <script>    
        $(function () {

            $('#carousel-main-screen').carousel();
            $('#carousel-gallery-mob').carousel();
            $("#lightgallery").lightGallery( { showThumbByDefault: true });


            // Модальные окна
            $('.btn-callback').click(function() { 
              $('#modal-free-consult').modal('show'); 
            });
            $('.burger-menu').click(function() { 
              $('#modal-menu').modal('show'); 
            });
            // Модальные окна


            // Выделение цветом нужной страницы
            var location = window.location.href;  
            $('.menu-wrapper a').each(function () {  
                var link = $(this).attr('href');
                if (location == link) { 
                    $(this).addClass('change-color');                
                }
            }); 
            // Выделение цветом нужной страницы 

        });
    </script>
    
    <style>
        @font-face {
            font-family: "OpenSansCondensedLight";
            src: url("fonts/OpenSans-CondLight.ttf") format("truetype");
            font-style: normal;
            font-weight: normal;  
        }
    </style>
</head>

<body>
<?php require_once 'modals.php'; ?>
<?php require_once 'header.php'; ?>

<div class="container-fluid gallery visible-md-block visible-lg-block">
    <div class="row">
        <div class="col-md-12 text-center">
            <h2 class="text-center">Фотогалерея</h2>            
            <div id="lightgallery">
              <a href="imgs/gallery-01.jpg">
                  <img src="imgs/gallery-thumb-01.jpg">
              </a>
              <a href="imgs/gallery-02.jpg">
                  <img src="imgs/gallery-thumb-02.jpg">
              </a>
              <a href="imgs/gallery-03.jpg">
                  <img src="imgs/gallery-thumb-03.jpg">
              </a>
              <a href="imgs/gallery-04.jpg">
                  <img src="imgs/gallery-thumb-04.jpg">
              </a>
              <a href="imgs/gallery-05.jpg">
                  <img src="imgs/gallery-thumb-05.jpg">
              </a>
              <a href="imgs/gallery-06.jpg">
                  <img src="imgs/gallery-thumb-06.jpg">
              </a>
              <a href="imgs/gallery-07.jpg">
                  <img src="imgs/gallery-thumb-07.jpg">
              </a>
              <a href="imgs/gallery-08.jpg">
                  <img src="imgs/gallery-thumb-08.jpg">
              </a>
              <a href="imgs/gallery-09.jpg">
                  <img src="imgs/gallery-thumb-09.jpg">
              </a>
              <a href="imgs/gallery-10.jpg">
                  <img src="imgs/gallery-thumb-10.jpg">
              </a>
              <a href="imgs/gallery-11.jpg">
                  <img src="imgs/gallery-thumb-11.jpg">
              </a>
              <a href="imgs/gallery-12.jpg">
                  <img src="imgs/gallery-thumb-12.jpg">
              </a>
              <a href="imgs/gallery-13.jpg">
                  <img src="imgs/gallery-thumb-13.jpg">
              </a>
              <a href="imgs/gallery-14.jpg">
                  <img src="imgs/gallery-thumb-14.jpg">
              </a>
              <a href="imgs/gallery-15.jpg">
                  <img src="imgs/gallery-thumb-15.jpg">
              </a>
              <a href="imgs/gallery-16.jpg">
                  <img src="imgs/gallery-thumb-16.jpg">
              </a>
              <a href="imgs/gallery-17.jpg">
                  <img src="imgs/gallery-thumb-17.jpg">
              </a>
              <a href="imgs/gallery-18.jpg">
                  <img src="imgs/gallery-thumb-18.jpg">
              </a>
              <a href="imgs/gallery-19.jpg">
                  <img src="imgs/gallery-thumb-19.jpg">
              </a>
              <a href="imgs/gallery-20.jpg">
                  <img src="imgs/gallery-thumb-20.jpg">
              </a>
              <a href="imgs/gallery-21.jpg">
                  <img src="imgs/gallery-thumb-21.jpg">
              </a>
              <a href="imgs/gallery-22.jpg">
                  <img src="imgs/gallery-thumb-22.jpg">
              </a>
              <a href="imgs/gallery-23.jpg">
                  <img src="imgs/gallery-thumb-23.jpg">
              </a>
              <a href="imgs/gallery-24.jpg">
                  <img src="imgs/gallery-thumb-24.jpg">
              </a>
              <a href="imgs/gallery-25.jpg">
                  <img src="imgs/gallery-thumb-25.jpg">
              </a>
              <a href="imgs/gallery-26.jpg">
                  <img src="imgs/gallery-thumb-26.jpg">
              </a>
              <a href="imgs/gallery-27.jpg">
                  <img src="imgs/gallery-thumb-27.jpg">
              </a>
              <a href="imgs/gallery-28.jpg">
                  <img src="imgs/gallery-thumb-28.jpg">
              </a>
              <a href="imgs/gallery-29.jpg">
                  <img src="imgs/gallery-thumb-29.jpg">
              </a>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid gallery-mob visible-xs-block visible-sm-block"> 
    <h2 class="text-center">Фотогалерея</h2>           
    <div id="carousel-gallery-mob" data-ride="carousel" class="carousel slide">
        <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
              <div id="gal-pict-01" class="item active"></div>
              <div id="gal-pict-02" class="item"></div>
              <div id="gal-pict-03" class="item"></div>
              <div id="gal-pict-04" class="item"></div>
              <div id="gal-pict-05" class="item"></div>
              <div id="gal-pict-06" class="item"></div>
              <div id="gal-pict-07" class="item"></div>
              <div id="gal-pict-08" class="item"></div>
              <div id="gal-pict-09" class="item"></div>  
              <div id="gal-pict-10" class="item"></div>   
              <div id="gal-pict-11" class="item"></div>
              <div id="gal-pict-12" class="item"></div>
              <div id="gal-pict-13" class="item"></div>
              <div id="gal-pict-14" class="item"></div>
              <div id="gal-pict-15" class="item"></div>
              <div id="gal-pict-16" class="item"></div>
              <div id="gal-pict-17" class="item"></div>
              <div id="gal-pict-18" class="item"></div>
              <div id="gal-pict-19" class="item"></div>  
              <div id="gal-pict-20" class="item"></div>
              <div id="gal-pict-21" class="item"></div>
              <div id="gal-pict-22" class="item"></div>
              <div id="gal-pict-23" class="item"></div>
              <div id="gal-pict-24" class="item"></div>
              <div id="gal-pict-25" class="item"></div>
              <div id="gal-pict-26" class="item"></div>
              <div id="gal-pict-27" class="item"></div>
              <div id="gal-pict-28" class="item"></div>
              <div id="gal-pict-29" class="item"></div>  
          </div>
        <!-- Controls -->
          <a class="left carousel-control" href="#carousel-gallery-mob" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#carousel-gallery-mob" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
          </a>
    </div>
</div>

<?php require_once 'footer.php'; ?>