<?php

require"layout/header";

session_start();
if($_SESSION['login']){
header ('location:login,php')
}
?>
welcome ke dashboard