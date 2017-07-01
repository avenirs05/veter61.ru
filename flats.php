﻿<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <meta name="format-detection" content="telephone=no">
	
    <title>Квартиры</title>
    
    <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <link rel="shortcut icon" href="/imgs/fav.png" type="image/png">
    <link type="text/css" rel="stylesheet" href="css/lightGallery.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">    
    <link href="style.css" rel="stylesheet">

    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/lightgallery.min.js"></script>
    <script src="js/lg-thumbnail.min.js"></script>

    <script>    
        $(function () {
            // $('#carousel-main-screen').carousel();
            // $('#carousel-gallery-mob').carousel();
            $("#lightgallery").lightGallery( { showThumbByDefault: true });
            $('.btn-callback').click(function() { $('#modal-free-consult').modal('show'); });
            $('.burger-menu').click(function() { $('#modal-menu').modal('show'); });
            $('[data-toggle="tooltip"]').tooltip();
            // $('.img-cut-wrap a').focus(function() {
            //     // $('.txt-floor').show();
            // }) 

            
            
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

<div class="flats visible-md-block visible-lg-block">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Выберите этаж</h1>
            <div class="img-cut-wrap text-center">
                <div class="roof">
                    <img src="imgs/house-cut-09.png" width="989" alt="">
                </div>
                <a href="plans.php">
                    <img src="imgs/house-cut-08.png" width="980" alt="">
                </a>
                <a href="plans.php" data-toggle="tooltip" data-placement="top" title="8-й этаж. Нажмите для просмотра плана">
                    <img src="imgs/house-cut-07.png" width="980" alt="" class="floor">
                </a>
                <a href="plans.php" data-toggle="tooltip" data-placement="top" title="7-й этаж. Нажмите для просмотра плана">
                    <img src="imgs/house-cut-06.png" width="980" alt="" class="floor">
                </a>
                <a href="plans.php" data-toggle="tooltip" data-placement="top" title="6-й этаж. Нажмите для просмотра плана">
                    <img src="imgs/house-cut-05.png" width="980" alt="" class="floor">
                </a>
                <a href="plans.php" data-toggle="tooltip" data-placement="top" title="5-й этаж. Нажмите для просмотра плана">
                    <img src="imgs/house-cut-04.png" width="980" alt="" class="floor">
                </a>
                <a href="plans.php" data-toggle="tooltip" data-placement="top" title="4-й этаж. Нажмите для просмотра плана">
                    <img src="imgs/house-cut-03.png" width="980" alt="" class="floor">
                </a>
                <a href="plans.php" data-toggle="tooltip" data-placement="top" title="3-й этаж. Нажмите для просмотра плана">
                    <img src="imgs/house-cut-02.png" width="980" alt="" class="floor">
                </a>
                <a href="plans.php" data-toggle="tooltip" data-placement="top" title="2-й этаж. Нажмите для просмотра плана">                    
                    <img src="imgs/house-cut-01.png" width="980" alt="" class="floor">                    
                </a>
                <img src="imgs/house-cut-00.png" width="980" alt="">
            </div>
        </div>
    </div>
</div>

<?php require_once 'footer.php'; ?>