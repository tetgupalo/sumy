<?php require 'login.php'; ?>
<?php require 'buttons.php'?>
<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="main.css">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>САС</title>
</head>
    
    <body>
        <header>
            <div class="nav">
                <a href="Index.php"><div class="butt">ГОЛОВНА</div></a>
                <a href="ist.php"><div class="butt">ІСТОРІЯ</div></a>
                <a href="inf.php"><div class="butt">ІНФРАСТРУКТУРА</div></a>
                <a href="vidp.php"><div class="butt">МІСЦЯ ВІДПОЧИНКУ</div></a>
                <a href="gal.php"><div class="butt">ГАЛЕРЕЯ</div></a>
            </div>
        </header>
        <?php require 'form.php'; ?>
        <div class="main">
            <img id="photo" src="photo.jpg">
            <p id="im">Ім'я: Андрій</p>
            <p>Прізвище: Акименко</p>
            <p>Стать: чоловіча</p>
            <p>Вік: 18 років</p>
            
            
            <br><br><br>
            <div class="comment-div">
                <h3>Нові коментарі</h3>
                <div id="sas-new-comments">
                    <?php require 'printNewComment.php' ?></div></div>
            <div class="comment-div">
            <h3>Коментарі</h3>
            <div id="comments">
                <?php require 'printCommentAdm.php' ?>
        </div><h3>Користувачі</h3>
    <div id="sas-comments"><?php require 'users.php' ?></div>
</div>
        </div>
        <footer>
            
            <p class="footer"> © Copyright @ 2015  Andriy Akimenko. Kyiv. NTUU "KPI" </p>
        </footer>
    </body>
</html>