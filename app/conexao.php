<?php
$DATABASE = 'clientes'; 
$HOST = 'localhost'; 
$USER = 'root'; 
$PASS = ''; 
$OPTIONS = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
];

try
{
    $conn = new mysqli($HOST, $USER, $PASS, $DATABASE);
}
catch(PDOException $e)
{
    echo $e->getMessage() . "</p>";
    die();
}
