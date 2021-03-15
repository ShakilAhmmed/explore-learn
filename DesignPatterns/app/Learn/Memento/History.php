<?php


namespace App\Learn\Memento;


class History
{
    private $states = [];

    public function push(EditorState $editorState)
    {
        $this->states[] = $editorState;
    }

    public function pop()
    {
        return array_pop($this->states);
    }

}