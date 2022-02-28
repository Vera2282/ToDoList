<?php
    require "dbconnect.php";
    if (strlen($_GET['name']) >= 3){
        try {
            $sql = 'INSERT INTO category(name) VALUES(:name)';
            $stmt = $conn->prepare($sql);
            $stmt->bindValue(':name', $_GET['name']);
            $stmt->execute();
            $_SESSION['msg'] = "Категория успешно добавлена";
            // return generated id
            // $id = $pdo->lastInsertId('id');

        } catch (PDOexception $error) {
            $_SESSION['msg'] = "Ошибка добавления категории: " . $error->getMessage();
        }
    }
    else $_SESSION['msg'] = "Ошибка добавления категории: имя категории должно содержать не менее 3х символов";

    // перенаправление на главную страницу приложения
    header('Location: http://todolist');
    exit( );

