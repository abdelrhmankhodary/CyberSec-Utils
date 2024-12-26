<?php
require_once __DIR__ . '/../src/Tokens/JWT.php';

use CyberSec\Tokens\JWT;

$payload = ['user_id' => 1, 'username' => 'admin'];
$secret = 'supersecretkey';

$token = JWT::generate($payload, $secret);
echo "Generated JWT: $token\n";

$decoded = JWT::decode($token, $secret);
echo "Decoded JWT: " . json_encode($decoded) . "\n";
