<?php
namespace CyberSec\Tokens;

class JWT {
    public static function generate($payload, $secret) {
        $header = base64_encode(json_encode(['alg' => 'HS256', 'typ' => 'JWT']));
        $body = base64_encode(json_encode($payload));
        $signature = hash_hmac('sha256', "$header.$body", $secret, true);
        $encodedSignature = base64_encode($signature);
        return "$header.$body.$encodedSignature";
    }

    public static function decode($jwt, $secret) {
        list($header, $body, $signature) = explode('.', $jwt);
        $validSignature = base64_encode(hash_hmac('sha256', "$header.$body", $secret, true));
        return $signature === $validSignature ? json_decode(base64_decode($body), true) : null;
    }
}
