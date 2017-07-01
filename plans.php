<!DOCTYPE html>
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
            $('#carousel-main-screen').carousel();
            $('#carousel-gallery-mob').carousel();
            $("#lightgallery").lightGallery( { showThumbByDefault: true });
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

            $('#flat-orange').mouseover(function() {
                $(this).css('background-image', 'url("imgs/flat-plan-cut-orange-hover.jpg")');
            })
            $('#flat-orange').mouseleave(function() {
                $(this).css('background-image', 'url("imgs/flat-plan-cut-orange.jpg")');
            })

            $('#flat-blue').mouseover(function() {
                $(this).css('background-image', 'url("imgs/flat-plan-cut-blue-hover.jpg")');
            })
            $('#flat-blue').mouseleave(function() {
                $(this).css('background-image', 'url("imgs/flat-plan-cut-blue.jpg")');
            })    

            $('#flat-green').mouseover(function() {
                $(this).css('background-image', 'url("imgs/flat-plan-cut-green-hover.jpg")');
            })
            $('#flat-green').mouseleave(function() {
                $(this).css('background-image', 'url("imgs/flat-plan-cut-green.jpg")');
            })        

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

<div class="plans visible-md-block visible-lg-block">
            <h1 class="text-center">Планировки</h1>
            <div class="text-center">
                <a href="#" id="flat-orange" class="flat-plan-cut"></a><a href="#" id="flat-blue" class="flat-plan-cut"></a><div href="#" id="hall" class="flat-plan-cut"></div><a href="#" id="flat-turq" class="flat-plan-cut"></a>
            </div>
            <div id="second-row-wrap" class="text-center">
                <a  href="#" id="flat-green" class="flat-plan-cut"></a><a href="#" id="flat-violet" class="flat-plan-cut"></a><a href="#" id="flat-yellow" class="flat-plan-cut"></a><a href="#" id="flat-turq2" class="flat-plan-cut"></a>
            </div>
</div>

<?php require_once 'header.php'; ?>

<?php require_once 'footer.php'; ?>