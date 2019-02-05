<?php 
  require_once 'header.php';

  echo "<br><span class='main'>Welcome to $appname,";

  if ($loggedin) echo " $user, Вы вошли";
  else           echo ' Пожалуйста, зарегистрируйтесь или войдите в систему';
?>

    </span><br><br>
  </body>
</html>
