<?php


namespace App\Learn\Strategy;


class Solution
{
    private $encryptionAlgorithm;

    public function chatClient(EncryptionInterface $encryptionAlgorithm)
    {
        $this->encryptionAlgorithm = $encryptionAlgorithm;
    }

    public function send()
    {
        $this->encryptionAlgorithm->encrypt();
    }

}