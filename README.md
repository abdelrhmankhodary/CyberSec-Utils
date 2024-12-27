# CyberSec-Utils Library

## Overview

CyberSec-Utils is a PHP library providing utilities for cybersecurity-related operations such as encryption, hashing, token generation, and input validation. It is designed to simplify the implementation of secure and reliable functionality in PHP projects.

## Features

### Encryption
- Symmetric encryption using AES-256.

### Hashing
- Secure password hashing using `password_hash`.

### Token Generation
- JSON Web Token (JWT) generation and validation.

### Validation
- Input validation and sanitization for common use cases.

## Requirements
- PHP 8.0 or higher
- OpenSSL extension (for encryption)

## Installation

### Using Composer (Recommended)

Add the library to your project:

```
composer require your-namespace/cybersec-utils
```

Include the Composer autoload file in your project:

```php
require_once __DIR__ . '/vendor/autoload.php';
```

### Manual Installation

Clone the repository:

```
git clone https://github.com/your-repo/cybersec-utils.git
```

Include the library files manually:

```php
require_once __DIR__ . '/src/Encryption/Symmetric.php';
require_once __DIR__ . '/src/Hashing/Password.php';
require_once __DIR__ . '/src/Tokens/JWT.php';
require_once __DIR__ . '/src/Validation/Validation.php';
```

## Usage Examples

### Encryption

```php
use CyberSec\Encryption\Symmetric;

$key = 'your-secret-key';
$data = 'Sensitive data';

$encrypted = Symmetric::encrypt($data, $key);
$decrypted = Symmetric::decrypt($encrypted, $key);

echo $decrypted; // Outputs: Sensitive data
```

### Password Hashing

```php
use CyberSec\Hashing\Password;

$password = 'secure-password';
$hashedPassword = Password::hash($password);

if (Password::verify($password, $hashedPassword)) {
    echo 'Password is valid';
}
```

### JSON Web Tokens (JWT)

```php
use CyberSec\Tokens\JWT;

$payload = ['user_id' => 123, 'role' => 'admin'];
$key = 'your-secret-key';

$token = JWT::generate($payload, $key);
$decoded = JWT::validate($token, $key);

print_r($decoded);
```

### Input Validation

```php
use CyberSec\Validation\Validation;

$email = 'test@example.com';
if (Validation::validateEmail($email)) {
    echo 'Valid email';
}

$sanitizedString = Validation::sanitizeString("Hello <script>alert('hi');</script>");
echo $sanitizedString; // Outputs: Hello
```

## Running Tests

To run unit tests:

1. Ensure PHPUnit is installed via Composer.
2. Execute the tests:

```
./vendor/bin/phpunit
```

## Contributing

1. Fork the repository.
2. Create a new feature branch:

```
git checkout -b feature-name
```

3. Commit your changes and push to the branch:

```
git push origin feature-name
```

4. Create a pull request.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.
