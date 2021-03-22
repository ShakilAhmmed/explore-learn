<?php


namespace App\Learn\State;


class Canvas
{
    private $tool;

    /**
     * @return mixed
     */
    public function getTool(): Tool
    {
        return $this->tool;
    }

    /**
     * @param mixed $tool
     */
    public function setTool(Tool $tool)
    {
        $this->tool = $tool;
    }

    /**
     * @return string
     */
    public function mouseDown(): string
    {
        return $this->tool->mouseDown();
    }

    /**
     * @return string
     */
    public function mouseUp(): string
    {
        return $this->tool->mouseUp();
    }

}