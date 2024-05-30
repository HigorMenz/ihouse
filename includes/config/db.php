<?php
function connectDB() : mysqli
{
    $db = mysqli_connect('localhost', 'root', 'root', 'ihouse_crud');

    if (!$db) {

        echo ":( didn't connect";
        exit;
    }

    return $db;
}
