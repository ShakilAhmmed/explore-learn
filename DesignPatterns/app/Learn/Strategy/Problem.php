<?php


namespace App\Learn\Strategy;


class Problem
{
    private $encryptionAlgorithm;

    public function chatClient(string $encryptionAlgorithm)
    {
        $this->encryptionAlgorithm = $encryptionAlgorithm;
    }

    public function send()
    {
        if ($this->encryptionAlgorithm == "DES") {
            echo "Encrypting message using DES";
        } else if ($this->encryptionAlgorithm == "AES") {
            echo "Encrypting message using AES";
        } else {
            throw new \Error("Unsupported encryption algorithm");
        }
        echo "Sending the encrypted message...";
    }

}