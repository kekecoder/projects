<?php

require_once __DIR__ . '/../config/databaseFunc.php';
$errors = [];
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $note = inputs($_POST['note']);

    // validating users entry
    if (!$note) {
        $errors['note'] = "This field cannot be empty";
    }

    if (empty($errors)) {
        $sql = 'INSERT INTO `note` SET
                `notetext` = :notetext,
                `created_date` = CURDATE()';
        $stmt = $dbcon->prepare($sql);

        $stmt->bindValue(':notetext', $note);
        $stmt->execute();

        header("Location: ../noteapp.php");
    }

}
