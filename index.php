<?php
date_default_timezone_set('Asia/Yekaterinburg');
require "dbconnect.php";
require "auth.php";
require "menu.php";
echo '<main class="container" style="margin-top: 100px">';
switch ($_GET['page']){
    case 'c':
        if (isset($_SESSION['login'])) {
            require "country.php";
        }
        else{
            $msg = 'Войдите в систему для просмотра';
        }
        break;
    case 'v':
        if (isset($_SESSION['login'])) {
            require "event.php";
        }
        else{
            $msg = 'Войдите в систему для просмотра';
        }
        break;
    case 'n':
        if (isset($_SESSION['login'])) {
            require "trade_turnover.php";
        }
        else{
            $msg = 'Войдите в систему для просмотра';
        }
        break;
    case 'b':
        if (isset($_SESSION['login'])) {
            require "economy.php";
        }
        else{
            $msg = 'Войдите в систему для просмотра';
        }
        break;
//    case 't':
  //      if (isset($_SESSION['login'])){
 //           require "tasks.php";
  //          require "taskform.php";
  //      }
    //    else{
   //         $msg = 'Войдите в систему для работы с бд';
   //     }
   //     break;
}
echo '</main>';

if(($_SESSION['msg']!='') or isset($msg)) {
    require "message.php";
    $_SESSION['msg']= '';
}

require "footer.php";
?>