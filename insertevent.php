<?php
require "dbconnect.php";
//var_dump($_POST);
//die();
if ($_POST['id_country'] > 0){
    try {
        $sql = 'INSERT INTO event(id_country, description, date, img) VALUES(:id_country, :description, :date, :img)';
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':id_country',$_POST['id_country']);
        $stmt->bindValue(':description', $_POST['description']);
        $stmt->bindValue(':date', $_POST['date']);
        $stmt->bindValue(':img', $_POST['img'] );    // ,PDO::PARAM_STR
        $stmt->execute();
        $_SESSION['msg'] = "Событие успешно добавлено";


    } catch (PDOexception $error) {
        $_SESSION['msg'] = "Ошибка добавления" . $error->getMessage();
    }
}
else $_SESSION['msg'] = "Ошибка добавления";

// перенаправление на страницу категорий
header('Location: http://macroeconomica/index.php?page=v');
exit( );
