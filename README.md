# CyberSec Utility Library

## Description
A PHP library for essential cybersecurity utilities, including encryption, hashing, input validation, and token management.

## Features
- Symmetric encryption (AES-256).
- Password hashing and verification.
- Input sanitization and validation.
- JWT token generation and decoding.

## Usage

### Encryption
```php
require 'vendor/autoload.php';
use CyberSec\Encryption\Symmetric;

$key = 'securekey1234567';
$data = 'Hello World';

$encrypted = Symmetric::encrypt($data, $key);
echo $encrypted;

$decrypted = Symmetric::decrypt($encrypted, $key);
echo $decrypted;
