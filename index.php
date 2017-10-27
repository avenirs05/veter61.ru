<?php 
    require_once 'functions.php';  
    
    //Кликфрог
    $path = "clickfrogru_tcp.php";
    include_once($path);

    getHeadScripts('Жилой комплекс Ветер Перемен'); 
    require_once 'modals.php';
    require_once 'header.php'; 
?> 
<div id="carousel-main-screen" class="carousel slide" data-ride="carousel">  

	<h1 class="text-center">Квартиры от застройщика в новом доме в 10 минутах от центра города!</h1>
<!--     <h2 class="text-center">Квартиры от застройщика в новом доме в 10 минутах от центра города!</h2> -->
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
        <div class="col-md-6 hidden-xs hidden-sm">
            <div class="img-cut-wrap">
                <div class="">
                    <img src="imgs/roof-for-index.png" width="100%" alt="">
                </div>
                <a href="plans.php?floor=8" data-toggle="tooltip" data-placement="top" title="8-й этаж">
                    <img src="imgs/house-cut-07.png" width="100%" alt="" class="floor">
                </a>
                <a href="plans.php?floor=7" data-toggle="tooltip" data-placement="top" title="7-й этаж">
                    <img src="imgs/house-cut-06.png" width="100%" alt="" class="floor">
                </a>
                <a href="plans.php?floor=6" data-toggle="tooltip" data-placement="top" title="6-й этаж">
                    <img src="imgs/house-cut-05.png" width="100%" alt="" class="floor">
                </a>
                <a href="plans.php?floor=5" data-toggle="tooltip" data-placement="top" title="5-й этаж">
                    <img src="imgs/house-cut-04.png" width="100%" alt="" class="floor">
                </a>
                <a href="plans.php?floor=4" data-toggle="tooltip" data-placement="top" title="4-й этаж">
                    <img src="imgs/house-cut-03.png" width="100%" alt="" class="floor">
                </a>
                <a href="plans.php?floor=3" data-toggle="tooltip" data-placement="top" title="3-й этаж">
                    <img src="imgs/house-cut-02.png" width="100%" alt="" class="floor">
                </a>
                <a href="plans.php?floor=2" data-toggle="tooltip" data-placement="top" title="2-й этаж"><img src="imgs/house-cut-01.png" width="100%" alt="" class="floor"></a><img src="imgs/house-cut-00.png" width="100%" alt="">
            </div>
        </div>
        <div class="col-md-6">    
            <p>Жилой дом «Ветер перемен» – это 8-этажный 42-квартирный дом клубного типа, расположенный на тихой улочке в Ленинском районе г. Ростова-на-Дону.</p>
            <p>Концепция дома – уютный и тихий анклав для своих. Микрорайон «Новое поселение» - один из немногих, где отсутствует масштабная многоэтажная застройка.</p>
            <p class="attention text-center"><span class="red">Внимание!</span> Мы не предлагаем долевое участие. Дом построен и <a href="allows.php" target="_blank">сдан в эксплуатацию</a>. Вы получаете квартиры в готовом доме с зарегистрированным правом собственности!</p>
            <p class="bold">Ищем порядочных и умных соседей!</p>
            <p>Всего по 6 квартир на каждом этаже. Многие будущие жильцы, купившие здесь квартиры, знакомы друг с другом. Руководители  компаний застройщика и генподрядчика приняли решение оставить несколько квартир для себя. Безупречное качество строительства – один из главных аргументов при выборе квартиры в нашем жилом доме.</p>
            <p>Наш дом не похож на другие. В нем есть то, чего нет у большинства ростовских многоэтажек, - душá. Уютный дворик создает ощущение домашней террасы, а при входе в подъезд тихо играет легкая классическая музыка.</p>
            <p id="advantage">Если вы хотите жить в престижном доме близко к центру, но устали от 20-этажных «муравейников», этот дом для вас. Почему мы так гордимся нашим проектом?</p>
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
            <p>В доме имеются 1- и 2-комнатные квартиры площадью от 35,1 кв.м до 71,1 кв.м. При этом возможно объединение квартир на выгодных условиях. Также в продаже нежилые помещения и машино-места в подземном паркинге. Количество квартир и машино-мест ограничено. <span class="discount-text">Скидки на квартиры до 450 000 руб!</span></p>
            <p>Дополнительная информация по телефону: 8 (863) 296-02-60 (без выходных).</p>
            <p class="attention text-center"><span class="red">Внимание!</span> Дом построен в строгом соответствии с проектом, прошедшим экспертизу, и разрешением на строительство. Никаких «самозастроев» и «долевых» квартир!</p>
            <p>Жилой дом «Ветер перемен»: взгляните по-новому на городскую жизнь!</p>
            <p>Настало время для перемен к лучшему!</p>
        </div>
    </div>
</div>

<div class="video-main-wrap visible-md-block visible-lg-block">
	<div id="video-main">
		<iframe width="100%" height="100%" src="https://www.youtube-nocookie.com/embed/Rv6SvmXtKQo" frameborder="0" allowfullscreen></iframe>
	</div>
</div>

<div class="video-main-wrap-mob visible-xs-block visible-sm-block">
	<div id="video-main-mob">
		<iframe width="100%" height="100%" src="https://www.youtube-nocookie.com/embed/Rv6SvmXtKQo" frameborder="0" allowfullscreen></iframe>
	</div> 
</div> 
<!-- test -->

<?php require_once 'footer.php'; ?>