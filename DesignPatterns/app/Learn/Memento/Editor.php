<?php


namespace App\Learn\Memento;


class Editor
{
    private $content;

    public function setContent($content)
    {
        $this->content = $content;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function createState(): EditorState
    {
        return new EditorState($this->content);
    }

    public function restore(EditorState $editorState)
    {
        $this->content = $editorState->getContent();
    }
}