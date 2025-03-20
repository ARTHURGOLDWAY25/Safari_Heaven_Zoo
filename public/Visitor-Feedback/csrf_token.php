<?php

session_start();

if(!isset($_SESSION["scrf_token"])){
    $_SESSION["scrf_token"] = bin2hex(random_bytes(32));
}

header("Content-Type : application/json");

echo json_encode(["scrf_token" => $_SESSION['csrf_token']]);