<!DOCTYPE html >
<html lang="ua">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/main1.css">
    <title><?=@ $this->title; ?></title>
</head>

<body onload="hidePopup()">
<header id="pageHeader">
    <a href="?" id="titleImage"><img src="images/main.png"></a>
    <nav>
        <ul>
            <li><a href="">Все про нас</a>
                <ul class="sub">
                    <li><a href="?career">Профорієнтаційна робота</a></li>
                    <li><a href="?education">Профільне навчання</a></li>
                    <li><a href="?regulatory">Нормативно-правова база</a></li>
                    <li><a href="validation.html">Атестація педпрацівників</a></li>
                </ul>
            </li>
            <li><a href="">Наші учні</a>
                <ul class="sub">
                    <li><a href="progress.php">Успішність учнів</a></li>
                    <li><a href="graduates.php">Випуск учнів</a></li>
                </ul>
            </li>
            <li><a href="gallery.html">Фотогалерея</a></li>
        </ul>
    </nav>

    <div class="auth">
        <?php
        if (empty($_SESSION['login']) or empty($_SESSION['id'])) {
            echo "<span style='cursor: pointer' onclick='showLogin();'>Увійти</span>|<span style='cursor: pointer'  onclick='showRegister()'>Реєстрація</sp>";
        } else {
            echo "<a href=\"\" class='clear'>".$_SESSION['login']."</a>
              <a href=\"?userExit\">Вийти</a>";
        }
        ?>
    </div>
</header>

<?php include("tpl/login/forms.php"); ?>

<section>
<?php $this->out($this->tpl, true); ?>
</section>

<footer id="pageFooter">
    <div>2016 © <b>Болградский МУПК</b><br></div>
    <div>upk-bolgrad@mail.com<br></div>
    <div> 982-12-49</div>
</footer>
</body>
</html>

<!--<section>-->
<!--    <div class="mainImage"><img class="main" src="images/mainImage.jpg"></div>-->
<!--    <h1>Головна</h1>-->
<!--    <div class="text">-->
<!--        <p>Болградський міжшкільний навчально-виробничий комбінат на протязі 34 років є центром допрофесійної-->
<!--            та професійної  підготовки старшокласників району.-->
<!--        </p>-->
<!--        Професії, яким навчають у Болградському МНВК:-->
<!--        <ul>-->
<!--            <li>Водій автотранспортних-->
<!--                засобів” кат. “В”, “С1”</li>-->
<!--            <li>Штукатур</li>-->
<!--            <li>Оператор комп’ютерного набору</li>-->
<!--            <li>Секретар  керівника</li>-->
<!--            <li>Агент з організації туризму</li>-->
<!--        </ul>-->
<!--        <p>З моменту першого випуску у 1979 році і по 2016 рік в Болградському МНВК пройшли навчання більше 6000-->
<!--            учнів. Отримали першу професію 80% від загальної кількості учнів.</p>-->
<!--    </div>-->
<!--</section>-->
<!--<div class="separator"></div>-->
