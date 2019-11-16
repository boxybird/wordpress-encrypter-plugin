<?php

if (!function_exists('bb_encrypt')) {
    /**
     * @param mixed $value
     *
     * @throws \Exception
     */
    function bb_encrypt($value)
    {
        if (!defined('BB_ENCRYPT_KEY')) {
            throw new \Exception(__FUNCTION__ . ' cannot find BB_ENCRYPT_KEY. Must be set in wp-config as 16 charater random string.');
        }

        $encrypter = new Boxybird_Encrypter(BB_ENCRYPT_KEY);

        return $encrypter->encrypt($value);
    }
}

if (!function_exists('bb_decrypt')) {
    /**
     * @param string $encrypted_payload
     *
     * @throws \Exception
     */
    function bb_decrypt($encrypted_payload)
    {
        if (!defined('BB_ENCRYPT_KEY')) {
            throw new \Exception(__FUNCTION__ . ' cannot find BB_ENCRYPT_KEY. Must be set in wp-config as 16 charater random string.');
        }

        $encrypter = new Boxybird_Encrypter(BB_ENCRYPT_KEY);

        return $encrypter->decrypt($encrypted_payload);
    }
}
