<?php
require_once __DIR__ . '/../src/Validation/Input.php';

use CyberSec\Validation\Input;

$email = 'test@example.com';
$url = 'https://www.example.com';

echo "Email Validation: " . (Input::isEmail($email) ? 'Valid' : 'Invalid') . "\n";
echo "URL Validation: " . (Input::isUrl($url) ? 'Valid' : 'Invalid') . "\n";
