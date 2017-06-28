<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <meta name="format-detection" content="telephone=no">
	
    <title>Жилой комплекс Ветер Перемен</title>
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
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
            $("#lightgallery").lightGallery( {
                showThumbByDefault: true
            });
        });
    </script>
</head>
<body>

<?php require_once 'header.php'; ?> 


<div id="carousel-main-screen" class="carousel slide" data-ride="carousel">
    <h1 class="text-center">Квартиры от застройщика в новом доме в 10 минутах от центра города!</h1>
  <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#carousel-main-screen" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-main-screen" data-slide-to="1"></li>
        <li data-target="#carousel-main-screen" data-slide-to="2"></li>
    </ol>
  <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="imgs/slider-01.jpg" alt="">
        </div>
        <div class="item">
            <img src="imgs/slider-02.jpg" alt="">
        </div>
        <div class="item">
            <img src="imgs/slider-03.jpg" alt="">
        </div>               
    </div>
  <!-- Controls -->
    <a class="left carousel-control" href="#carousel-main-screen" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-main-screen" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div class="container-fluid about-house">
    <div class="row">
        <div class="col-md-12">
            <p>Жилой дом «Ветер перемен» – это 8-этажный 42-квартирный дом клубного типа, расположенный на тихой улочке в Ленинском районе г. Ростова-на-Дону.</p>
            <p>Концепция дома – уютный и тихий анклав для своих. Микрорайон «Новое поселение» - один из немногих, где отсутствует масштабная многоэтажная застройка.</p>
            <p class="attention text-center"><span class="red">Внимание!</span> Мы не предлагаем долевое участие. Дом построен и сдан в эксплуатацию. Вы получаете квартиры в готовом доме с зарегистрированным правом собственности!</p>
            <p class="bold">Ищем порядочных и умных соседей!</p>
            <p>Всего по 6 квартир на каждом этаже. Многие будущие жильцы, купившие здесь квартиры, знакомы друг с другом. Руководители  компаний застройщика и генподрядчика приняли решение оставить несколько квартир для себя. Безупречное качество строительства – один из главных аргументов при выборе квартиры в нашем жилом доме.</p>
            <p>Наш дом не похож на другие. В нем есть то, чего нет у большинства ростовских многоэтажек, - душá. Уютный дворик создает ощущение домашней террасы, а при входе в подъезд тихо играет легкая классическая музыка.</p>
            <p>Если вы хотите жить в престижном доме близко к центру, но устали от 20-этажных «муравейников», этот дом для вас. Почему мы так гордимся нашим проектом?</p>
        </div>
    </div>
</div>

<div class="container-fluid advantages">
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center">Преимущества нашего дома</h2>
            <ul>
                <li>прекрасное расположение в непосредственной близости к центру города на пересечении улиц Курганной и Городской</li>
                <li>наличие необходимой инфраструктуры в пешей доступности: школа, детский сад – 5 минут пешком, остановка – 3 минуты пешком, зоопарк – 10 минут пешком</li>
                <li>великолепные планировки квартир, многие из которых имеют по два балкона, выходящие на разные стороны</li>
                <li>подземный паркинг на 17 машино-мест</li>
                <li>закрытая территория с детской площадкой и зоной отдыха для взрослых</li>
                <li>бесшумный лифт OTIS грузоподъемностью 1 000 кг, который опускается до «-1»  уровня</li>
                <li>круглосуточный консьерж, видеонаблюдение</li>
                <li>индивидуальное газовое отопление в каждой квартире: Вы сами определяете температуру в своем доме</li>
                <li>пожизненная гарантия на кровлю</li>
                <li>строительство дома окончено, рядом нет и не будет шумных строек длиной в несколько лет</li>
                <li>детский развивающий клуб на первом этаже</li>
            </ul>
        </div>
    </div>
</div>

<div class="container-fluid about-house">
    <div class="row">
        <div class="col-md-12">
            <p>Квартиры продаются в состоянии «стройвариант». При желании предоставляются услуги дизайна интерьера и ремонта «под ключ».</p>
            <p>В доме имеются 1- и 2-комнатные квартиры площадью от 35,1 кв.м до 71,1 кв.м. При этом возможно объединение квартир на выгодных условиях. Также в продаже нежилые помещения и машино-места в подземном паркинге. Количество квартир и машино-мест ограничено.</p>
            <p>Запись на просмотр по телефону: 8(863) 296-02-60 (без выходных).</p>
            <p class="attention text-center"><span class="red">Внимание!</span> Дом построен в строгом соответствии с проектом, прошедшим экспертизу, и разрешением на строительство. Никаких «самозастроев» и «долевых» квартир!</p>
            <p>Жилой дом «Ветер перемен»: взгляните по-новому на городскую жизнь!</p>
            <p>Настало время для перемен к лучшему!</p>
        </div>
    </div>
</div>

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