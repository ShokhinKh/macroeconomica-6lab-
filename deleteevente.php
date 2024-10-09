<?php

require "dbconnect.php";


try {
    $sql = 'DELETE FROM event WHERE event.ID=:ID';
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(':ID', $_GET['ID']);
    $stmt->execute();
    $_SESSION['msg'] = "Маршрут успешно удалён";
    // return generated id
    // $id = $pdo->lastInsertId('id');
} catch (PDOexception $error) {
    $_SESSION['msg'] = "Ошибка удаления Маршрута: " . $error->getMessage();
}
// перенаправление на главную страницу приложения
header('Location: http://macroeconomica/index.php?page=v');
exit( );