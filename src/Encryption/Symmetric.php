<?php
namespace CyberSec\Encryption;

class Symmetric {
    public static function encrypt($data, $key) {
        return openssl_encrypt($data, 'AES-256-CBC', $key, 0, substr($key, 0, 16));
    }

    public static function decrypt($data, $key) {
        return openssl_decrypt($data, 'AES-256-CBC', $key, 0, substr($key, 0, 16));
    }
}
