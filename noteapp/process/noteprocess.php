<?php

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $note = $_POST['note'];

    echo $note;
}
