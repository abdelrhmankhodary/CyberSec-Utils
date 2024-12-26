# CyberSec-Utils
The CyberSec Utility Library is a lightweight and powerful PHP library designed to simplify the implementation of essential cybersecurity practices in web applications. This library provides tools for encryption, hashing, input validation, authentication tokens, and more, helping developers secure their applications with minimal effort.
# CyberSec Utility Library

## Description
A PHP library for essential cybersecurity utilities, including encryption, hashing, input validation, and token management.

## Features
- Symmetric encryption (AES-256).
- Password hashing and verification.
- Input sanitization and validation.
- CSRF and JWT token generation.

## Usage
Example of encryption:
```php
require 'vendor/autoload.php';
use CyberSec\Encryption\Symmetric;

$key = 'securekey1234567';
$data = 'Hello World';

$encrypted = Symmetric::encrypt($data, $key);
echo $encrypted;

$decrypted = Symmetric::decrypt($encrypted, $key);
echo $decrypted;

## Installation
To install the library, run:

```bash
composer require abdelrhmankhodary/cybersec-utils
