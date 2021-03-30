<?php


namespace App\Learn\Strategy;


class DesEncryption implements EncryptionInterface
{

    public function encrypt()
    {
        echo "Encrypting message using DES";
    }
}