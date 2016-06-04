<!DOCTYPE html >
<html lang="ua">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/main1.css">
    <title>МНВК</title>
</head>

<body>
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
        if (empty($_SESSION['login_old']) or empty($_SESSION['id'])) {
            echo "<a href=\"regForm.php\">Войти</a>";
        } else {
            echo "<a href=\"regForm.php\" class='clear'>".$_SESSION['login_old']."</a>
              <a href=\"exit.php\">Выйти</a>";
        }
        ?>
    </div>
</header>