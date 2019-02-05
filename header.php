<?php 
  session_start();

  echo "<!DOCTYPE html>\n<html><head>";

  require_once 'functions.php';

  $userstr = ' (Guest)';

  if (isset($_SESSION['user']))
  {
    $user     = $_SESSION['user'];
    $loggedin = TRUE;
    $userstr  = " ($user)";
  }
  else $loggedin = FALSE;

  echo "<title>$appname$userstr</title><link rel='stylesheet' " .
       "href='styles.css' type='text/css'>"                     .
       "</head><body><center><canvas id='logo' width='624' "    .
       "height='96'>$appname</canvas></center>"             .
       "<div class='appname'>$appname$userstr</div>"            .
       "<script src='javascript.js'></script>";

  if ($loggedin)
  {
    echo "<br ><ul class='menu'>" .
         "<li><a href='members.php?view=$user'>Главная</a></li>" .
         "<li><a href='members.php'>Подписчики</a></li>"         .
         "<li><a href='friends.php'>Друзья</a></li>"         .
         "<li><a href='messages.php'>Сообщения</a></li>"       .
         "<li><a href='profile.php'>Редактировать профиль</a></li>"    .
         "<li><a href='logout.php'>Войти</a></li></ul><br>";
  }
  else
  {
    echo ("<br><ul class='menu'>" .
          "<li><a href='index.php'>Главная</a></li>"                .
          "<li><a href='signup.php'>Зарегистрироваться</a></li>"            .
          "<li><a href='login.php'>Войти</a></li></ul><br>"     .
          "<span class='info'>&#8658; Вам нужно войти " .
          "view this page.</span><br><br>");
  }
?>
