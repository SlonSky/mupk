<?php

// field data checking
if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} }
if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
if (empty($login) or empty($password)) //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
{
    exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
}

// delete tags
$login = stripslashes($login);
$login = htmlspecialchars($login);
$password = stripslashes($password);
$password = htmlspecialchars($password);

// trim whitespaces
$login = trim($login);
$password = trim($password);

// existing user checking
$existingID =  $this->db->query("SELECT id FROM users WHERE login='$login'")->all();
if (!empty($existingID['id'])) {
    exit ("Извините, введённый вами логин уже зарегистрирован. Введите другой логин.");
}

// insert user to DB
$this->db->query("INSERT INTO users (login,password) VALUES('$login','$password')");

// to index
exit("<!DOCTYPE html><html lang='ua'><head><meta    http-equiv='Refresh' content='0;    URL=index.php'></head><body></body></html>");
?>