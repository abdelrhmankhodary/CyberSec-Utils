<?php
require_once __DIR__ . '/../src/Encryption/Symmetric.php';

use CyberSec\Encryption\Symmetric;

$key = 'securekey1234567';  // Your encryption key
$data = 'Hello World';     // The data you want to encrypt

// Encrypt the data
$encrypted = Symmetric::encrypt($data, $key);
echo "Encrypted: $encrypted\n";

// Decrypt the data
$decrypted = Symmetric::decrypt($encrypted, $key);
echo "Decrypted: $decrypted\n";
