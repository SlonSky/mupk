<?php session_start(); ?>

<!DOCTYPE html>
<html lang="ua">
<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="./css/main1.css">
    <title>МУПК</title>
</head>

<body>
  <header id="pageHeader">
    <a href="index.php" id="titleImage"><img src="images/main.png"></a>
    <nav>
        <ul>
            <li><a href="#">Все про нас</a>
                <ul class="sub">
                    <li><a href="career.html">Профорієнтаційна робота</a></li>
                    <li><a href="education.html">Профільне навчання</a></li>
                    <li><a href="regulatory.html">Нормативно-правова база</a></li>
                    <li><a href="validation.html">Атестація педпрацівників</a></li>
                </ul>
            </li>
            <li><a href="#">Наші учні</a>
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
              echo "<a href=\"regForm.php\">Войти</a>";
          } else {
              echo "<a href=\"regForm.php\" class='clear'>".$_SESSION['login']."</a>
              <a href=\"exit.php\">Выйти</a>";
          }
          ?>
      </div>

  </header>
  <section>

<!--      <div class="separator"></div>-->
      <div class="mainImage"><img class="main" src="images/mainImage.jpg"></div>
      <h1>Головна</h1>
      <div class="text">
      <p>Болградський міжшкільний навчально-виробничий комбінат на протязі 34 років є центром допрофесійної
              та професійної  підготовки старшокласників району.
      </p>
      Професії, яким навчають у Болградському МНВК:
          <ul>
              <li>Водій автотранспортних
                  засобів” кат. “В”, “С1”</li>
              <li>Штукатур</li>
              <li>Оператор комп’ютерного набору</li>
              <li>Секретар  керівника</li>
              <li>Агент з організації туризму</li>
          </ul>
      <p>З моменту першого випуску у 1979 році і по 2016 рік в Болградському МНВК пройшли навчання більше 6000
          учнів. Отримали першу професію 80% від загальної кількості учнів.</p>
      </div>
  </section>
  <div class="separator"></div>
  <h1>Новини</h1>
  <article>
      <header><h3>Другий запис</h3></header>
      <section>
          <p>Новини будуть тут. Suspendisse vel lectus sed mi ultricies posuere lobortis non eros. Nunc accumsan est nec nisl ullamcorper,-->
              vitae congue nunc pretium. Quisque maximus iaculis leo ac congue. Quisque vitae elit magna. Maecenas
              ultricies hendrerit suscipit. Quisque sit amet ipsum eu sapien posuere vehicula in a ante. Cras tempus
              dui id tellus sagittis tempus.Suspendisse vel lectus sed mi ultricies posuere lobortis non eros. Nunc accumsan est nec nisl ullamcorper,
              vitae congue nunc pretium. Quisque maximus iaculis leo ac congue. Quisque vitae elit magna. Maecenas
              ultricies hendrerit suscipit.</p><div class="data">03.06.2016</div><hr></section>
  </article>
  <article>
      <header><h3>Відкриття сайту МНВК</h3></header>
      <section>
          <p>Сьогодні відкрився наш сайт! Suspendisse vel lectus sed mi ultricies posuere lobortis non eros. Nunc accumsan est nec nisl ullamcorper,-->
                                vitae congue nunc pretium. Quisque maximus iaculis leo ac congue. Quisque vitae elit magna. Maecenas
                                ultricies hendrerit suscipit. Quisque sit amet ipsum eu sapien posuere vehicula in a ante. Cras tempus
                                dui id tellus sagittis tempus.Suspendisse vel lectus sed mi ultricies posuere lobortis non eros. Nunc accumsan est nec nisl ullamcorper,
                                vitae congue nunc pretium. Quisque maximus iaculis leo ac congue. Quisque vitae elit magna. Maecenas
                                ultricies hendrerit suscipit. </p><div class="data">01.06.2016</div><hr></section>
                </article>
  <div class="pages"><a href="">1</a> <a href="">2</a>...<a href="">20</a></div>
              <!--  <section>-->
<!--      <h1>Наша команда</h1>-->
<!--      <div class="person">-->
<!--          <div class="personPhoto"><img src="images/einstein.jpg"></div>-->
<!--          <div class="personInfo">-->
<!--              <h3>Альберт Эйнштейн</h3>-->
<!--              <span> Suspendisse vel lectus sed mi ultricies posuere lobortis non eros. Nunc accumsan est nec nisl ullamcorper,-->
<!--                  vitae congue nunc pretium. Quisque maximus iaculis leo ac congue. Quisque vitae elit magna. Maecenas-->
<!--                  ultricies hendrerit suscipit. Quisque sit amet ipsum eu sapien posuere vehicula in a ante. Cras tempus-->
<!--                  dui id tellus sagittis tempus.Suspendisse vel lectus sed mi ultricies posuere lobortis non eros. Nunc accumsan est nec nisl ullamcorper,-->
<!--                  vitae congue nunc pretium. Quisque maximus iaculis leo ac congue. Quisque vitae elit magna. Maecenas-->
<!--                  ultricies hendrerit suscipit. Quisque sit amet ipsum eu sapien posuere vehicula in a ante. Cras tempus-->
<!--                  dui id tellus sagittis tempus. Quisque maximus iaculis leo ac congue. Quisque vitae elit magna. Maecenas-->
<!--                  ultricies hendrerit suscipit. Quisque sit amet ipsum eu sapien posuere vehicula in a ante. Cras tempus-->
<!--                  dui id tellus sagittis tempus. </span>-->
<!--          </div>-->
<!--      </div>-->
<!---->
<!--      <div class="person">-->
<!--          <div class="personPhoto"><img src="images/heisenberg.jpg"></div>-->
<!--          <div class="personInfo">-->
<!--              <h3>Вернер Гейзенберг</h3>-->
<!--              <span> Suspendisse vel lectus sed mi ultricies posuere lobortis non eros. Nunc accumsan est nec nisl ullamcorper,-->
<!--                  vitae congue nunc pretium. Quisque maximus iaculis leo ac congue. Quisque vitae elit magna. Maecenas-->
<!--                  ultricies hendrerit suscipit. Quisque sit amet ipsum eu sapien posuere vehicula in a ante. Cras tempus-->
<!--                  dui id tellus sagittis tempus.Suspendisse vel lectus sed mi ultricies posuere lobortis non eros. Nunc accumsan est nec nisl ullamcorper,-->
<!--                  vitae congue nunc pretium. Quisque maximus iaculis leo ac congue. Quisque vitae elit magna. Maecenas-->
<!--                  ultricies hendrerit suscipit. Quisque sit amet ipsum eu sapien posuere vehicula in a ante. Cras tempus-->
<!--                  dui id tellus sagittis tempus. Quisque maximus iaculis leo ac congue. Quisque vitae elit magna. Maecenas-->
<!--                  ultricies hendrerit suscipit. Quisque sit amet ipsum eu sapien posuere vehicula in a ante. Cras tempus-->
<!--                  dui id tellus sagittis tempus. </span>-->
<!--          </div>-->
<!--      </div>-->
<!---->
<!--      <div class="person">-->
<!--          <div class="personPhoto"><img src="images/bohr.jpg"></div>-->
<!--          <div class="personInfo">-->
<!--              <h3>Нильс Бор</h3>-->
<!--              <span> Suspendisse vel lectus sed mi ultricies posuere lobortis non eros. Nunc accumsan est nec nisl ullamcorper,-->
<!--                  vitae congue nunc pretium. Quisque maximus iaculis leo ac congue. Quisque vitae elit magna. Maecenas-->
<!--                  ultricies hendrerit suscipit. Quisque sit amet ipsum eu sapien posuere vehicula in a ante. Cras tempus-->
<!--                  dui id tellus sagittis tempus.Suspendisse vel lectus sed mi ultricies posuere lobortis non eros. Nunc accumsan est nec nisl ullamcorper,-->
<!--                  vitae congue nunc pretium. Quisque maximus iaculis leo ac congue. Quisque vitae elit magna. Maecenas-->
<!--                  ultricies hendrerit suscipit. Quisque sit amet ipsum eu sapien posuere vehicula in a ante. Cras tempus-->
<!--                  dui id tellus sagittis tempus. Quisque maximus iaculis leo ac congue. Quisque vitae elit magna. Maecenas-->
<!--                  ultricies hendrerit suscipit. Quisque sit amet ipsum eu sapien posuere vehicula in a ante. Cras tempus-->
<!--                  dui id tellus sagittis tempus. </span>-->
<!--          </div>-->
<!--      </div>-->
<!---->
<!--      <div class="person">-->
<!--          <div class="personPhoto"><img src="images/Antoine_Laurent_de_Lavoisier.png"></div>-->
<!--          <div class="personInfo">-->
<!--              <h3>Антуан Лавуазье</h3>-->
<!--              <span> Suspendisse vel lectus sed mi ultricies posuere lobortis non eros. Nunc accumsan est nec nisl ullamcorper,-->
<!--                  vitae congue nunc pretium. Quisque maximus iaculis leo ac congue. Quisque vitae elit magna. Maecenas-->
<!--                  ultricies hendrerit suscipit. Quisque sit amet ipsum eu sapien posuere vehicula in a ante. Cras tempus-->
<!--                  dui id tellus sagittis tempus.Suspendisse vel lectus sed mi ultricies posuere lobortis non eros. Nunc accumsan est nec nisl ullamcorper,-->
<!--                  vitae congue nunc pretium. Quisque maximus iaculis leo ac congue. Quisque vitae elit magna. Maecenas-->
<!--                  ultricies hendrerit suscipit. Quisque sit amet ipsum eu sapien posuere vehicula in a ante. Cras tempus-->
<!--                  dui id tellus sagittis tempus. Quisque maximus iaculis leo ac congue. Quisque vitae elit magna. Maecenas-->
<!--                  ultricies hendrerit suscipit. Quisque sit amet ipsum eu sapien posuere vehicula in a ante. Cras tempus-->
<!--                  dui id tellus sagittis tempus. </span>-->
<!--          </div>-->
<!--      </div>-->
<!--  </section>-->

  <div class="separator"></div>
  <footer id="pageFooter">

      <div>2016 © <b>Болградский МУПК</b><br></div>
      <div>upk-bolgrad@mail.com<br></div>
      <div> 982-12-49</div>
  </footer>

</body>
</html>