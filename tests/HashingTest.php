<?php
require_once __DIR__ . '/../src/Hashing/Password.php';

use CyberSec\Hashing\Password;

$password = 'supersecurepassword';
$hashedPassword = Password::hash($password);

echo "Hashed Password: $hashedPassword\n";

$isVerified = Password::verify($password, $hashedPassword) ? 'Valid' : 'Invalid';
echo "Password Verification: $isVerified\n";
