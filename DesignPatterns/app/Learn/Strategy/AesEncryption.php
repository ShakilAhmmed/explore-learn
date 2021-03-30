<?php


namespace App\Learn\Strategy;


class AesEncryption implements EncryptionInterface
{

    public function encrypt()
    {
        echo "Encrypting message using AES";
    }
}