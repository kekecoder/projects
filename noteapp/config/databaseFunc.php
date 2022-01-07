<?php

require_once "dbconfig.php";

function inputs($var)
{
    $var = htmlspecialchars($var);
    $var = trim($var);
    $var = strtolower($var);

    return $var;
}

function insert()
{

}
