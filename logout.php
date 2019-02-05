<?php
  require_once 'header.php';

  if (isset($_SESSION['user']))
  {
    destroySession();
    echo "<div class='main'>Вы вышли. Пожлауйста, " .
         "<a href='index.php'>click here</a> обновите страницу.";
  }
  else echo "<div class='main'><br>" .
            "Вы не можете выйти, потому что вы не вошли";
?>

    <br><br></div>
  </body>
</html>
