<?php require 'login.php'; ?>
<!doctype html>
<html>
<head>
    <?=$incorrect_login_js ?>
    <link rel="stylesheet" href="main.css">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Головна</title>
</head>
    
    <body>
        
        <header>
           
            <div class="nav">
                <a href="Index.php"><div class="butt">ГОЛОВНА</div></a>
                <a href="Ist.php"><div class="butt">ІСТОРІЯ</div></a>
                <a href="Inf.php"><div class="butt">ІНФРАСТРУКТУРА</div></a>
                <a href="Vidp.php"><div class="butt">МІСЦЯ ВІДПОЧИНКУ</div></a>
                <a href="gal.php"><div class="butt">ГАЛЕРЕЯ</div></a>
            </div>
        </header>
        
        <?php require 'form.php'; ?>
        <div class="main1">
            <article id="h2"><h2>Головна</h2></article>
            <img id="svg" src="Imgg.svg" alt="">
            <p id="citation">Cуми - місто, де ми народжуємося, живемо, ростемо, вчимося, <br> 
                працюємо, любимо, мріємо, творимо, згадуємо ...<br></p>
            

            <section class="golovna"><h4>Суми - перлина Слобідського краю ,
            сучасне місто з легким шармом старовини. В ньому тісно
            переплелися славне історичне минуле і трудове
            сьогодення.</h4></section>

            <section class="golovna"><h4>«Місто над Пслом», «Місто троянд» та
            «Місто трьох сумок» - саме так неофіційно називають
            місцеві жителі своє рідне місто. І це далеко не повний
            перелік назв обласного центру на північному сході
            України.</h4></section>

            <section class="golovna"><h4>Років 20-30 тому у порівняно невеличкому
            місті і справді духм’яніло кілька десятків тисяч цих
            ніжних квітів, але потім настали часи, коли керманичам
            стало не до клумб і не до газонів, і троянди щезли. Але
            один з «псевдонімів» – «Місто ста тисяч троянд» – так і
            залишився.</h4></section>
            <img id="gol2" src="img/gol1.jpg" alt="">
            <img id="gol3" src="img/gol3.jpg" alt="">

            <p id="kom1">Центральна вулиця вночі</p>
            <p id="kom2">Вигляд міста з висоти пташиного польоту</p>
            
            <div id="comment-div">
            <h3>Відгуки про місто</h3>
                    <div id="comments">
                        <?php require 'newComment.php' ?>
                        <?php require 'printComment.php' ?>
                </div>
               

        </div>
            <p>&nbsp;</p>
        <footer>
            <p class="footer"> © Copyright @ 2015  Andriy Akimenko. Kyiv. NTUU "KPI" </p>
        </footer>
        </div>
    </body>

</html>