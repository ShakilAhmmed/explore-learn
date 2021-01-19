<?php


namespace App\Adapter;


class eBookAdapter implements BookInterface
{
    private $eReader;

    public function __construct(eReaderInterface $eReader)
    {
        $this->eReader = $eReader;
    }

    public function open()
    {
        $this->eReader->open();
    }

    public function nextPage()
    {
        $this->eReader->swipe();
    }
}