<?php

try {
    $dbcon = new PDO('mysql:host=localhost; port=3306; dbname=noteapp; charset=utf8', 'root', 'jerusalem1991');

    $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    print "An Exception occured " . $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine();
    //print "The server is down, please try again later";
}
