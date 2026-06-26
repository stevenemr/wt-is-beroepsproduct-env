<?php

// defined in 'variables.env'
$db_host        = 'database_server';
$db_name        = 'pizzeria';
$db_user        = 'sa';
$db_password    = 'abc123!@#';

$pdo = new PDO('sqlsrv:Server=' . $db_host . ';Database=' . $db_name . ';ConnectionPooling=0;TrustServerCertificate=1', $db_user, $db_password);

unset($db_password); // Remove password to prevent echoing it

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
