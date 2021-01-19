<?php


namespace App\Adapter;


class Person
{
    private $book;

    public function __construct(BookInterface $book)
    {
        $this->book = $book;
    }

    public function read()
    {
        $this->book->open();
        $this->book->nextPage();
    }
}