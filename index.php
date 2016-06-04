<?php session_start();

include "lib/db.php";
include "lib/base.php";

new app(substr(str_replace("/mupk/index.php","", $_SERVER["REQUEST_URI"]),1));

?>