<?php
session_start();//  вся процедура работает на сессиях. Именно в ней хранятся данные  пользователя, пока он находится на сайте. Очень важно запустить их в  самом начале странички!!!
if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } //заносим введенный пользователем логин в переменную $login_old, если он пустой, то уничтожаем переменную
if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
//заносим введенный пользователем пароль в переменную $password, если он пустой, то уничтожаем переменную
if (empty($login) or empty($password)) //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
{
    exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!  <a href='regForm.php'>Назад</a>");
}
//если логин и пароль введены,то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
$login = stripslashes($login);
$login = htmlspecialchars($login);
$password = stripslashes($password);
$password = htmlspecialchars($password);
//удаляем лишние пробелы
$login = trim($login);
$password = trim($password);
// подключаемся к базе
//include("bd.php");// файл bd.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь


$myrow = $this->db->query("SELECT * FROM users WHERE login='$login'")->assoc();

if (empty($myrow['password']))
{
    //если пользователя с введенным логином не существует
    exit ("Извините, введённый вами login или пароль неверный.  <a href='regForm.php'>Назад</a>");
}
else {
    //если существует, то сверяем пароли
    if ($myrow['password']==$password) {
        //если пароли совпадают, то запускаем пользователю сессию! Можете его поздравить, он вошел!
        $_SESSION['login']=$myrow['login'];
        $_SESSION['id']=$myrow['id'];//эти данные очень часто используются, вот их и будет "носить с собой" вошедший пользователь
        exit("<!DOCTYPE html><html lang='ua'><head><meta http-equiv='Refresh' content='0; URL=index.php'></head><body></body></html>");
    }
    else {
        //если пароли не сошлись

        exit ("Извините, введённый вами login или пароль неверный.  <a href='regForm.php'>Назад</a>");
    }
}
?>