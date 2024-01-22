<?php

$conn = new mysqli('db', 'root', 'test', 'sales_system', 3306);
$is_connected = false;

if ($conn->connect_error){
    $is_connected = false;
}
else{
    $is_connected = true;
}