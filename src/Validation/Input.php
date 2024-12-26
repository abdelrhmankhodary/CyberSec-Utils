<?php
namespace CyberSec\Validation;

class Input {
    public static function isEmail($email) {
        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }

    public static function isUrl($url) {
        return filter_var($url, FILTER_VALIDATE_URL) !== false;
    }
}
