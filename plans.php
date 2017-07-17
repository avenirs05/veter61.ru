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

            // PopUp квартра 3d и план 
            // Если квартира продана (имеет класс "sold") - тогда слово "Продано в popUp
            $('#flat-blue').click(function() { 
                if ( $(this).hasClass('sold') ) {
                     $('#modal-flat-blue-sold').modal('show');
                } else {
                    $('#modal-flat-blue').modal('show');
                    if ( $(this).hasClass('floor-4') ) { $('.price-flat').text(' 2 131 500 руб.'); }
                    if ( $(this).hasClass('floor-4') ) { $('.price-flat-origin').text(' 2 281 500 руб.'); }
                    if ( $(this).hasClass('floor-5') ) { $('.price-flat').text(' 2 081 500 руб.'); }
                    if ( $(this).hasClass('floor-5') ) { $('.price-flat-origin').text(' 2 281 500 руб.'); }
                    if ( $(this).hasClass('floor-7') ) { $('.price-flat').text(' 2 131 500 руб.'); }
                    if ( $(this).hasClass('floor-7') ) { $('.price-flat-origin').text(' 2 281 500 руб.'); }
                    if ( $(this).hasClass('floor-8') ) { $('.price-flat').text(' 1 999 000 руб.'); } 
                    if ( $(this).hasClass('floor-8') ) { $('.price-flat-origin').text(' 2 281 500 руб.'); }       
                } 
            });


            $('#flat-violet').click(function() { 
                if ( $(this).hasClass('sold') ) {
                     $('#modal-flat-violet-sold').modal('show');
                } else {
                    $('#modal-flat-violet').modal('show');                    
                    if ( $(this).hasClass('floor-6') ) { $('.price-flat').text(' 2 279 000 руб.'); }
                    if ( $(this).hasClass('floor-6') ) { $('.price-flat-origin').text(' 2 379 000 руб.'); } 
                    if ( $(this).hasClass('floor-7') ) { $('.price-flat').text(' 2 279 000 руб.'); }
                    if ( $(this).hasClass('floor-7') ) { $('.price-flat-origin').text(' 2 379 000 руб.'); }                   
                    if ( $(this).hasClass('floor-8') ) { $('.price-flat').text(' 2 279 000 руб.'); }
                    if ( $(this).hasClass('floor-8') ) { $('.price-flat-origin').text(' 2 379 000 руб.'); }
                }                
            });


            $('#flat-green').click(function() { 
                if ( $(this).hasClass('sold') ) {
                     $('#modal-flat-green-sold').modal('show');
                } else {
                    $('#modal-flat-green').modal('show');
                    if ( $(this).hasClass('floor-2') ) { $('.price-flat').text(' 2 516 000 руб.'); }
                    if ( $(this).hasClass('floor-2') ) { $('.price-flat-origin').text(' 2 816 100 руб.'); }
                    if ( $(this).hasClass('floor-3') ) { $('.price-flat').text(' 2 560 800 руб.'); }
                    if ( $(this).hasClass('floor-3') ) { $('.price-flat-origin').text(' 2 860 800 руб.'); }
                    if ( $(this).hasClass('floor-6') ) { $('.price-flat').text(' 2 605 500 руб.'); }
                    if ( $(this).hasClass('floor-6') ) { $('.price-flat-origin').text(' 2 905 500 руб.'); }
                    if ( $(this).hasClass('floor-7') ) { $('.price-flat').text(' 2 605 500 руб.'); }
                    if ( $(this).hasClass('floor-7') ) { $('.price-flat-origin').text(' 2 905 500 руб.'); }
                    if ( $(this).hasClass('floor-8') ) { $('.price-flat').text(' 2 605 500 руб.'); }
                    if ( $(this).hasClass('floor-8') ) { $('.price-flat-origin').text(' 2 905 500 руб.'); }
                }
            });


            $('#flat-orange').click(function() { 
                if ( $(this).hasClass('sold') ) {
                     $('#modal-flat-orange-sold').modal('show');
                } else { 
                    $('#modal-flat-orange').modal('show');
                    if ( $(this).hasClass('floor-4') ) { $('.price-flat').text(' 2 699 500 руб.'); }
                    if ( $(this).hasClass('floor-4') ) { $('.price-flat-origin').text(' 2 996 500 руб.'); }
                    if ( $(this).hasClass('floor-5') ) { $('.price-flat').text(' 2 699 500 руб.'); }
                    if ( $(this).hasClass('floor-5') ) { $('.price-flat-origin').text(' 2 996 500 руб.'); }
                    if ( $(this).hasClass('floor-6') ) { $('.price-flat').text(' 2 699 500 руб.'); }
                    if ( $(this).hasClass('floor-6') ) { $('.price-flat-origin').text(' 2 996 500 руб.'); }
                    if ( $(this).hasClass('floor-7') ) { $('.price-flat').text(' 2 699 500 руб.'); }
                    if ( $(this).hasClass('floor-7') ) { $('.price-flat-origin').text(' 2 996 500 руб.'); }
                    if ( $(this).hasClass('floor-8') ) { $('.price-flat').text(' 2 699 500 руб.'); }
                    if ( $(this).hasClass('floor-8') ) { $('.price-flat-origin').text(' 2 996 500 руб.'); }
                }
            });


            $('#flat-yellow').click(function() { 
                if ( $(this).hasClass('sold') ) {
                     $('#modal-flat-yellow-sold').modal('show');
                } else { 
                    $('#modal-flat-yellow').modal('show'); 
                    if ( $(this).hasClass('floor-2') ) { $('.price-flat').text(' 3 065 000 руб.'); }
                    if ( $(this).hasClass('floor-2') ) { $('.price-flat-origin').text(' 3 465 000 руб.'); }
                    if ( $(this).hasClass('floor-3') ) { $('.price-flat').text(' 3 150 000 руб.'); }
                    if ( $(this).hasClass('floor-3') ) { $('.price-flat-origin').text(' 3 520 000 руб.'); }
                    if ( $(this).hasClass('floor-4') ) { $('.price-flat').text(' 3 175 000 руб.'); }
                    if ( $(this).hasClass('floor-4') ) { $('.price-flat-origin').text(' 3 575 000 руб.'); }
                    if ( $(this).hasClass('floor-5') ) { $('.price-flat').text(' 3 175 000 руб.'); }
                    if ( $(this).hasClass('floor-5') ) { $('.price-flat-origin').text(' 3 575 000 руб.'); }
                    if ( $(this).hasClass('floor-6') ) { $('.price-flat').text(' 3 175 000 руб.'); }
                    if ( $(this).hasClass('floor-6') ) { $('.price-flat-origin').text(' 3 575 000 руб.'); }
                    if ( $(this).hasClass('floor-8') ) { $('.price-flat').text(' 3 175 000 руб.'); }
                    if ( $(this).hasClass('floor-8') ) { $('.price-flat-origin').text(' 3 575 000 руб.'); }
                }
            });


            $('#flat-turq, #flat-turq2').click(function() { 
                if ( $('#flat-turq').hasClass('sold') ) {
                     $('#modal-flat-turq-sold').modal('show');
                } else { 
                    $('#modal-flat-turq').modal('show'); 
                    if ( $('#flat-turq').hasClass('floor-2') ) { $('.price-flat').text(' 4 029 300 руб.'); }
                    if ( $('#flat-turq').hasClass('floor-2') ) { $('.price-flat-origin').text(' 4 479 300 руб.'); }

                    if ( $('#flat-turq').hasClass('floor-3') ) { $('.price-flat').text(' 4 150 400 руб.'); }
                    if ( $('#flat-turq').hasClass('floor-3') ) { $('.price-flat-origin').text(' 4 550 400 руб.'); }

                    if ( $('#flat-turq').hasClass('floor-4') ) { $('.price-flat').text(' 4 171 500 руб.'); }
                    if ( $('#flat-turq').hasClass('floor-4') ) { $('.price-flat-origin').text(' 4 621 500 руб.'); }

                    if ( $('#flat-turq').hasClass('floor-5') ) { $('.price-flat').text(' 4 171 500 руб.'); }
                    if ( $('#flat-turq').hasClass('floor-5') ) { $('.price-flat-origin').text(' 4 621 500 руб.'); }

                    if ( $('#flat-turq').hasClass('floor-7') ) { $('.price-flat').text(' 4 171 500 руб.'); }
                    if ( $('#flat-turq').hasClass('floor-7') ) { $('.price-flat-origin').text(' 4 621 500 руб.'); }

                    if ( $('#flat-turq').hasClass('floor-8') ) { $('.price-flat').text(' 4 171 500 руб.'); }
                    if ( $('#flat-turq').hasClass('floor-8') ) { $('.price-flat-origin').text(' 4 621 500 руб.'); }
                }
            });


            // PopUp квартра 3d и план 
            // Если квартира продана (имеет класс "sold") - тогда слово "Продано в popUp


            // Выделение цветом нужной страницы
            var location = window.location.href;  
            $('.menu-wrapper a').each(function () {  
                var link = $(this).attr('href');
                if (location == link) { 
                    $(this).addClass('change-color');                
                }
            }); 
            // Выделение цветом нужной страницы 
            

            // Подсветка нужного плана квартиры при наведении на нее
            $('#flat-orange').mouseover(function() {
                $(this).css('background-position', 'top right');
                return false;
            })
            $('#flat-orange').mouseleave(function() {
                $(this).css('background-position', '0% 0%');
                return false;
            })

            $('#flat-blue').mouseover(function() {
                $(this).css('background-position', 'top right');
                return false;
            })
            $('#flat-blue').mouseleave(function() {
                $(this).css('background-position', '0% 0%');
                return false;
            })    

            $('#flat-green').mouseover(function() {
                $(this).css('background-position', 'top right');
                return false;
            })
            $('#flat-green').mouseleave(function() {
                $(this).css('background-position', '0% 0%');
                return false;
            })        

            $('#flat-violet').mouseover(function() {
                $(this).css('background-position', 'top right');
                return false;
            })
            $('#flat-violet').mouseleave(function() {
                $(this).css('background-position', '0% 0%');
                return false;
            }) 

            $('#flat-yellow').mouseover(function() {
                $(this).css('background-position', 'top right');
                return false;
            })
            $('#flat-yellow').mouseleave(function() {
                $(this).css('background-position', '0% 0%');
                return false;
            }) 

            $('#flat-turq').mouseover(function() {
                $(this).css('background-position', 'top right');
                $("#flat-turq2").css('background-position', 'top right');
                $("#fake-green-div").show();
                return false;
            })
            $('#flat-turq').mouseleave(function() {
                $(this).css('background-position', '0% 0%');
                $("#flat-turq2").css('background-position', 'top left');
                $("#fake-green-div").hide();
                return false;
            }) 

            $('#flat-turq2').mouseover(function() {
                $('#flat-turq').css('background-position', 'top right');
                $("#flat-turq2").css('background-position', 'top right');
                $("#fake-green-div").show();
                return false;
            })
            $('#flat-turq2').mouseleave(function() {
                $('#flat-turq').css('background-position', '0% 0%');
                $("#flat-turq2").css('background-position', 'top left');
                $("#fake-green-div").hide();
                return false;
            }) 
            // Подсветка нужного плана квартиры при наведении на нее

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
    <?php 
        if ($_GET['floor'] == 8) {
            echo '<h1 class="text-center">Планировки 8 этажа</h1>';
            require_once "floors/floor-8.php";
        } 
        if ($_GET['floor'] == 7) {
            echo '<h1 class="text-center">Планировки 7 этажа</h1>';
            require_once "floors/floor-7.php";
        } 
        if ($_GET['floor'] == 6) {
            echo '<h1 class="text-center">Планировки 6 этажа</h1>';
            require_once "floors/floor-6.php";
        } 
        if ($_GET['floor'] == 5) {
            echo '<h1 class="text-center">Планировки 5 этажа</h1>';
            require_once "floors/floor-5.php";
        } 
        if ($_GET['floor'] == 4) {
            echo '<h1 class="text-center">Планировки 4 этажа</h1>';
            require_once "floors/floor-4.php";
        } 
        if ($_GET['floor'] == 3) {
            echo '<h1 class="text-center">Планировки 3 этажа</h1>';
            require_once "floors/floor-3.php";
        } 
        if ($_GET['floor'] == 2) {
            echo '<h1 class="text-center">Планировки 2 этажа</h1>';
            require_once "floors/floor-2.php";
        } 
    ?>                
</div>

<?php require_once 'header.php'; ?>
<?php require_once 'footer.php'; ?>