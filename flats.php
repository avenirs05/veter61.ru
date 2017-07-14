<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <meta name="format-detection" content="telephone=no">
	
    <title>Квартиры</title>
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <link rel="shortcut icon" href="/imgs/fav.png" type="image/png">
    <link type="text/css" rel="stylesheet" href="css/lightGallery.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">    
    <link href="style.css" rel="stylesheet">

    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script>    
        $(function () {

            $('.btn-callback').click(function() { 
                $('#modal-free-consult').modal('show'); 
            });

            $('.burger-menu').click(function() { 
                $('#modal-menu').modal('show'); 
            });


            $('[data-toggle="tooltip"]').tooltip();
           
            
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

<div class="container-fluid flats visible-md-block visible-lg-block">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Выберите этаж</h1>
            <div class="img-cut-wrap text-center">
                <div class="roof">
                    <img src="imgs/house-cut-09.png" width="500" alt="">
                </div>
                <div>
                    <img src="imgs/house-cut-08.png" width="490" alt="">
                </div>
                <a href="plans.php?floor=8" data-toggle="tooltip" data-placement="top" title="8-й этаж">
                    <img src="imgs/house-cut-07.png" width="490" alt="" class="floor">
                </a>
                <a href="plans.php?floor=7" data-toggle="tooltip" data-placement="top" title="7-й этаж">
                    <img src="imgs/house-cut-06.png" width="490" alt="" class="floor">
                </a>
                <a href="plans.php?floor=6" data-toggle="tooltip" data-placement="top" title="6-й этаж">
                    <img src="imgs/house-cut-05.png" width="490" alt="" class="floor">
                </a>
                <a href="plans.php?floor=5" data-toggle="tooltip" data-placement="top" title="5-й этаж">
                    <img src="imgs/house-cut-04.png" width="490" alt="" class="floor">
                </a>
                <a href="plans.php?floor=4" data-toggle="tooltip" data-placement="top" title="4-й этаж">
                    <img src="imgs/house-cut-03.png" width="490" alt="" class="floor">
                </a>
                <a href="plans.php?floor=3" data-toggle="tooltip" data-placement="top" title="3-й этаж">
                    <img src="imgs/house-cut-02.png" width="490" alt="" class="floor">
                </a>
                <a href="plans.php?floor=2" data-toggle="tooltip" data-placement="top" title="2-й этаж"><img src="imgs/house-cut-01.png" width="490" alt="" class="floor"></a><img src="imgs/house-cut-00.png" width="490" alt="">
            </div>
        </div>
    </div>
</div>

<div class="container-fluid flats visible-xs-block visible-sm-block">
    <div class="row">
        <div class="col-md-12">
            <h4 class="text-center plan-3d-wrap-mob">1-к квартира. Площадь 35,1 кв.м. Цена: от <span style="text-decoration: line-through;">2 200 000</span><span class="real-red"> 1 999 000 руб.</span></h4>
            <div class="text-center flat-3d-mob">
                <img class="" src="imgs/flat-3d-02.jpg" width="290" alt="">
            </div>
            <div class="text-center flat-plan-mob">
                <img class="" src="imgs/flat-plan-02.jpg" width="290" alt="">
            </div>
            <hr>
        </div>
        <div class="col-md-12">
            <h4 class="text-center" id="myModalLabel">1-к квартира. Площадь 36,6 кв.м. Цена: от <span style="text-decoration: line-through;">2 379 000</span><span class="real-red"> 2 279 000 руб.</span></h4>
            <div class="text-center flat-3d-mob">
                <img class="" src="imgs/flat-3d-05.jpg" width="290" alt="">
            </div>
            <div class="text-center flat-plan-mob">
                <img class="" src="imgs/flat-plan-05.jpg" width="290" alt="">
            </div>
            <hr>
        </div>
        <div class="col-md-12">
            <h4 class="text-center" id="myModalLabel">1-к квартира. Площадь 44,7 кв.м. Цена: от <span style="text-decoration: line-through;">2 816 100</span><span class="real-red"> 2 516 000 руб.</span></h4>
            <div class="text-center flat-3d-mob">
                <img class="" src="imgs/flat-3d-04.jpg" width="290" alt="">
            </div>
            <div class="text-center flat-plan-mob">
                <img class="" src="imgs/flat-plan-04.jpg" width="290" alt="">
            </div>
            <hr>
        </div>
        <div class="col-md-12">
            <h4 class="text-center" id="myModalLabel">1-к квартира. Площадь 46,1 кв.м. Цена: от <span style="text-decoration: line-through;">2 904 300</span><span class="real-red"> 2 699 500 руб.</span></h4>
            <div class="text-center flat-3d-mob">
                <img class="" src="imgs/flat-3d-01.jpg" width="290" alt="">
            </div>
            <div class="text-center flat-plan-mob">
                <img class="" src="imgs/flat-plan-01.jpg" width="290" alt="">
            </div>
            <hr>
        </div>
        <div class="col-md-12">
            <h4 class="text-center" id="myModalLabel">2-к квартира. Площадь 55 кв.м. Цена: от <span style="text-decoration: line-through;">3 465 000</span><span class="real-red"> 3 065 000 руб.</span></h4>
            <div class="text-center flat-3d-mob">
                <img class="" src="imgs/flat-3d-06.jpg" width="290" alt="">
            </div>
            <div class="text-center flat-plan-mob">
                <img class="" src="imgs/flat-plan-06.jpg" width="290" alt="">
            </div>
            <hr>
        </div>
        <div class="col-md-12">
            <h4 class="text-center" id="myModalLabel">2-к квартира. Площадь 71,1 кв.м. Цена: от <span style="text-decoration: line-through;">4 479 300</span><span class="real-red"> 4 029 300 руб.</span></h4>
            <div class="text-center flat-3d-mob">
                <img class="" src="imgs/flat-3d-03.jpg" width="290" alt="">
            </div>
            <div class="text-center flat-plan-mob">
                <img class="" src="imgs/flat-plan-03.jpg" width="290" alt="">
            </div>
            <hr>
        </div>
    </div>
</div>

<?php require_once 'footer.php'; ?>