<?php


namespace App\Learn\Memento;

use App\Learn\Memento\Editor;
use App\Learn\Memento\History;

class Main
{
    public function __construct()
    {
        $editor = new Editor();
        $history = new History();
        $editor->setContent("a");
        $history->push($editor->createState());
        $editor->setContent("b");
        $history->push($editor->createState());
        $editor->setContent("c");
        $editor->restore($history->pop());
        $editor->restore($history->pop());
        echo $editor->getContent();
    }
}
