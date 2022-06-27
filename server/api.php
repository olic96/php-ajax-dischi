<?php
require __DIR__ . '/database.php';

header('Content-Type: application/json');

header('Access-Control-Allow-Origin: *');

$response = $dischi;

echo json_encode($response);