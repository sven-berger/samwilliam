<?php
    $servername = "server14.febas.net";
    $username = 'webkompakt';
    $passwort = 'odYupQuovTojur$';
    $dbname = "WebKompakt";
    $port = 3306;

    $connection = new PDO("mysql:host=$servername;dbname=$dbname", $username, $passwort);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);