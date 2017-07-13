<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <meta name="format-detection" content="telephone=no">
  
    <title>Разрешение на ввод в эксплуатацию</title>
    
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

            $('.btn-callback').click(function() { 
                $('#modal-free-consult').modal('show'); 
            });

            $('.burger-menu').click(function() { 
                $('#modal-menu').modal('show'); 
            }); 

        });
    </script>
    
    <style>
        body {
          padding-right: 0 !important;
          background-color: #f8f8f8;
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

<div class="container-fluid allows visible-md-block visible-lg-block">
    <div class="row">
        <div class="col-md-12 text-center">
            <h1 class="text-center">Разрешение на ввод в эксплуатацию</h1> 
            
            <div class="allows-wrap-text">
              <a href="imgs/allow-1.jpg" target="_blank" download>Лист 1. Скачать</a>
            </div>
            <img src="imgs/allow-1.jpg" alt="">
            
            <div class="allows-wrap-text">
              <a href="imgs/allow-2.jpg" target="_blank" download>Лист 2. Скачать</a>
            </div>
            <img src="imgs/allow-2.jpg" alt="">
            
            <div class="allows-wrap-text">
              <a href="imgs/allow-3.jpg" target="_blank" download>Лист 3. Скачать</a>
            </div>
            <img src="imgs/allow-3.jpg" alt="">

            <div class="allows-wrap-text">
              <a href="imgs/allow-4.jpg" target="_blank" download>Лист 4. Скачать</a>
            </div>
            <img src="imgs/allow-4.jpg" alt="">

        </div>
    </div>
</div>

<div class="container-fluid allows visible-xs-block visible-sm-block">
    <div class="row">
        <div class="col-md-12 text-center">
            <h1 class="text-center">Разрешение на ввод в эксплуатацию</h1> 
            
            <div class="allows-wrap-text">
              <a href="imgs/allow-1.jpg" target="_blank" download>Лист 1. Скачать</a>
            </div>
            <img src="imgs/allow-1.jpg" width="290" alt="">
            
            <div class="allows-wrap-text">
              <a href="imgs/allow-2.jpg" target="_blank" download>Лист 2. Скачать</a>
            </div>
            <img src="imgs/allow-2.jpg" width="290" alt="">
            
            <div class="allows-wrap-text">
              <a href="imgs/allow-3.jpg" target="_blank" download>Лист 3. Скачать</a>
            </div>
            <img src="imgs/allow-3.jpg" width="290" alt="">

            <div class="allows-wrap-text">
              <a href="imgs/allow-4.jpg" target="_blank" download>Лист 4. Скачать</a>
            </div>
            <img src="imgs/allow-4.jpg" width="290" alt="">

        </div>
    </div>
</div>

<?php require_once 'footer.php'; ?>