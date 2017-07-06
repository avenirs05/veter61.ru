<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <meta name="format-detection" content="telephone=no">
  
    <title>Дизайн и ремонт</title>
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
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
            $("#lightgallery").lightGallery( { showThumbByDefault: true } );
            $('.btn-callback').click(function() { $('#modal-free-consult').modal('show'); });
            $('.burger-menu').click(function() { $('#modal-menu').modal('show'); });
            
            // Выделение цветом нужной страницы
            var location = window.location.href;  
            $('.menu-wrapper a').each(function () {  
                var link = $(this).attr('href');
                if (location == link) { 
                    $(this).addClass('change-color');                
                }
            }); 
            // Конец. Выделение цветом нужной страницы 

        });
    </script>
    <style>
        body {
          padding-right: 0 !important;
          background-color: #fff;
        }
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

<div class="container-fluid design-text">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Дизайн и ремонт</h1>   
            <p>У вас нет времени и желания заниматься ремонтом? Вам надоели скучные интерьеры, похожие друг на друга, словно братья-близнецы? А может, вы давно мечтали о воплощении собственных дизайнерских идей, но не знаете с чего начать?</p>
            <p>Мы с радостью вам поможем!</p>
            <p>Наша креатив-студия разработает для вас дизайн-проект любой сложности, а специалисты по внутренней отделке со скоростью, которой позавидует даже гепард, превратят красивую картинку в осязаемую реальность. Не отказывайте себе в удовольствии иметь по-настоящему эксклюзивный интерьер, в котором будут собраны самые передовые дизайнерские идеи, помноженные на безупречную функциональность и экологичность.</p>
            <p>Просто представьте, что ваши жилье или офис могли бы выглядеть так:</p>
        </div>
    </div>
</div>



<div class="container-fluid gallery-design visible-md-block visible-lg-block">
    <div class="row">
        <div class="col-md-12 text-center">       
            <div class="visible-md-block visible-lg-block" id="lightgallery">
                <a href="imgs/design-kozl-01.jpg">
                    <img src="imgs/design-kozl-thumb-01.jpg">
                </a>  
                <a href="imgs/design-kozl-02.jpg">
                    <img src="imgs/design-kozl-thumb-02.jpg">
                </a> 
                <a href="imgs/design-kozl-03.jpg">
                    <img src="imgs/design-kozl-thumb-03.jpg">
                </a> 
                <a href="imgs/design-kozl-04.jpg">
                    <img src="imgs/design-kozl-thumb-04.jpg">
                </a>  
                <a href="imgs/design-kozl-05.jpg">
                    <img src="imgs/design-kozl-thumb-05.jpg">
                </a>  
                <a href="imgs/design-kozl-06.jpg">
                    <img src="imgs/design-kozl-thumb-06.jpg">
                </a>  
                <a href="imgs/design-kozl-07.jpg">
                    <img src="imgs/design-kozl-thumb-07.jpg">
                 </a>  
                <a href="imgs/design-kozl-08.jpg">
                    <img src="imgs/design-kozl-thumb-08.jpg">
                </a>  
                <a href="imgs/design-tavr-01.jpg">
                    <img src="imgs/design-tavr-thumb-01.jpg">
                </a>
                <a href="imgs/design-tavr-01.jpg">
                    <img src="imgs/design-tavr-thumb-01.jpg">
                </a>
                <a href="imgs/design-tavr-02.jpg">
                    <img src="imgs/design-tavr-thumb-02.jpg">
                </a>
                <a href="imgs/design-tavr-03.jpg">
                    <img src="imgs/design-tavr-thumb-03.jpg">
                </a>
                <a href="imgs/design-tavr-04.jpg">
                    <img src="imgs/design-tavr-thumb-04.jpg">
                </a>
                <a href="imgs/design-tavr-05.jpg">
                    <img src="imgs/design-tavr-thumb-05.jpg">
                </a>
                <a href="imgs/design-tavr-06.jpg">
                    <img src="imgs/design-tavr-thumb-06.jpg">
                </a>
                <a href="imgs/design-tavr-07.jpg">
                    <img src="imgs/design-tavr-thumb-07.jpg">
                </a>
                <a href="imgs/design-tavr-08.jpg">
                    <img src="imgs/design-tavr-thumb-08.jpg">
                </a>
                <a href="imgs/design-tavr-09.jpg">
                    <img src="imgs/design-tavr-thumb-09.jpg">
                </a>
                <a href="imgs/design-tavr-10.jpg">
                    <img src="imgs/design-tavr-thumb-10.jpg">
                </a>
                <a href="imgs/design-tavr-11.jpg">
                    <img src="imgs/design-tavr-thumb-11.jpg">
                </a>
                <a href="imgs/design-tavr-12.jpg">
                    <img src="imgs/design-tavr-thumb-12.jpg">
                </a>
                <a href="imgs/design-tavr-13.jpg">
                    <img src="imgs/design-tavr-thumb-13.jpg">
                </a>     
                <a href="imgs/design-tavr-14.jpg">
                    <img src="imgs/design-tavr-thumb-14.jpg">
                </a>          
            </div>
        </div>
        <div class="col-md-12 text-center">
            <button class="btn-callback">Хочу так же!</button>  
        </div>
    </div>
</div>

<div id="gallery-design-wrap" class="container-fluid gallery-mob visible-xs-block visible-sm-block"> 
    <div class="col-md-12 text-center">
        <button id="btn-want-the-same" class="btn-callback">Хочу так же!</button>  
    </div>      
    <div id="carousel-gallery-mob" data-ride="carousel" class="carousel slide">
        <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
              <div id="design-kozl-mob-01" class="item active"></div>
              <div id="design-kozl-mob-02" class="item"></div>
              <div id="design-kozl-mob-03" class="item"></div>
              <div id="design-kozl-mob-04" class="item"></div>
              <div id="design-kozl-mob-05" class="item"></div>
              <div id="design-kozl-mob-06" class="item"></div>
              <div id="design-kozl-mob-07" class="item"></div>
              <div id="design-kozl-mob-08" class="item"></div>
              <div id="design-tavr-mob-01" class="item"></div>
              <div id="design-tavr-mob-02" class="item"></div>
              <div id="design-tavr-mob-03" class="item"></div>
              <div id="design-tavr-mob-04" class="item"></div>
              <div id="design-tavr-mob-05" class="item"></div>
              <div id="design-tavr-mob-06" class="item"></div>
              <div id="design-tavr-mob-07" class="item"></div>
              <div id="design-tavr-mob-08" class="item"></div>
              <div id="design-tavr-mob-09" class="item"></div>
              <div id="design-tavr-mob-10" class="item"></div>
              <div id="design-tavr-mob-11" class="item"></div>
              <div id="design-tavr-mob-12" class="item"></div>
              <div id="design-tavr-mob-13" class="item"></div>
              <div id="design-tavr-mob-14" class="item"></div>                 
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