<?php require 'login.php'; ?>
<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="main.css">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <script src="ajax.js" type="text/javascript"></script>
    <title>Реєстрація</title>
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
            <h2><p id="h2">Реєстрація</p></h2>
            
            <form class="reg1" action="reg.php" method="post">
            <p class="reg1"><label>Ім'я та призвіще*:</label> &nbsp;
                <label><input type="text" name="firstname" placeholder="Ім'я" required="" autofocus=""></label></p>
                <p id="reg1"><label><input type="text" name="secondname" placeholder="Призвіще" required="autofocus"></label></p>
                
                <p class="reg1">Введіть логін*:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" name="Login" placeholder="Перевірка логіна" onblur="checkLogin(this.value); regOrNot()" required /><span      id="check_login"></span></p>

                <p class="reg1"><label>E-mail*:</label>
                    <label><input id="email" type="email" name="email" placeholder="example@ex.ua" required=""></label></p>
                
                <p class="reg1"><label>Додатковий email:</label> &nbsp;
                    <label><input type="email" name="reemail" placeholder="example@ex.ua" required=""></label></p>
                
                <p class="reg1"><label>Введіть пароль*:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="password" name="Password" size="15" id="paas" onblur="checkPassword(); regOrNot()" maxlength="30" placeholder="Пароль" required></p>

<p class="reg1"> Підтвердіть пароль*:
<input type="password" name="ConfirmPassword" id="pas" onblur='checkPassword(); regOrNot()' size="15" maxlength="30" placeholder="Підтвердження пароля" required><span id="check_password"></span></p>

                <p class="reg1"><label>Стать:</label>
                    <label id="sex"><select name="Sex">
                    <option value="No" selected>
                        Не обрано
                    </option>
                    <option value="Male">
                        Чоловічa
                    </option>
                    <option value="Female">
                        Жіноча
                    </option>
                    </select></label></p>
                
                <p class="reg1"><label>Мобільний номер:</label>
                    <label id="tel"><input type="tel" name="tel" placeholder="380XXХХХХХХХ" pattern="380[0-9]{9}"></label></p>
                
                <p class="reg1"><label>Додаткова інформація:</label></p>
                <p class="reg1"><label><textarea name="sign" cols="60" maxlength="500" rows="5"></textarea></label></p>
                
                <p class="reg1"><label><input type="submit" value="Далі!" name="Go"></label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <label><input type="reset" value="Очистити"></label></p>
                
                <?php
	$user_file = "users.txt";
	$uname = htmlspecialchars($_POST['firstname']).' '.htmlspecialchars($_POST['lastname']);
	$ulog = htmlspecialchars($_POST['Login']);
	$upas = htmlspecialchars($_POST['Password']);
	$umail = htmlspecialchars($_POST['email']);

	$handle = fopen("users.txt", at);
	flock($handle, LOCK_SH);
	if($_POST['Login']!=""){
	$string = $ulog."|".$upas."|"."notbanned"."|".$umail."|".$uname."*";
	fwrite($handle, $string);
	flock($handle, LOCK_UN);
	fclose($handle);
	echo "<h3>Реєстрація пройшла успішно!</h3>";}
?>
                
            </form>
        </div>
            <footer>
                <p class="footer"> © Copyright @ 2015  Andriy Akimenko. Kyiv. NTUU "KPI" </p>
        </footer>
    </body>
    <script type="text/javascript" src="admin.js"></script>
</html>