<?php
  require_once 'header.php';
  echo "<div class='main'><h3>Пожалуйста, введите логин и пароль</h3>";
  $error = $user = $pass = "";

  if (isset($_POST['user']))
  {
    $user = sanitizeString($_POST['user']);
    $pass = sanitizeString($_POST['pass']);
    
    if ($user == "" || $pass == "")
        $error = "Заполните все поля<br>";
    else
    {
      $result = queryMySQL("SELECT user,pass FROM members
        WHERE user='$user' AND pass='$pass'");

      if ($result->num_rows == 0)
      {
        $error = "<span class='error'>Логин/Пароль
                  invalid</span><br><br>";
      }
      else
      {
        $_SESSION['user'] = $user;
        $_SESSION['pass'] = $pass;
        die("Вы вошли в систему. Пожалуйста <a href='members.php?view=$user'>" .
            "нажмите сюда чтобы </a> продолжить.<br><br>");
      }
    }
  }

  echo <<<_END
    <form method='post' action='login.php'>$error
    <span class='fieldname'>Логин</span><input type='text'
      maxlength='16' name='user' value='$user'><br>
    <span class='fieldname'>Пароль</span><input type='password'
      maxlength='16' name='pass' value='$pass'>
_END;
?>

    <br>
    <span class='fieldname'>&nbsp;</span>
    <input type='submit' value='Login'>
    </form><br></div>
  </body>
</html>
