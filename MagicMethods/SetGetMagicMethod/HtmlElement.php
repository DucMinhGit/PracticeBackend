<?php

class HtmlElement
{
    private $attributes = [];
    private $tag;

    public function __construct(string $tag)
    {
        $this->tag = $tag;
    }

    public function __set($name, $value)
    {
        $this->attributes[$name] = $value;
    }

    public function __get($name)
    {
        if(array_key_exists($name, $this->attributes)) {
            return $this->attributes[$name];
        }
    }

    public function html($innerHtml = '')
    {
        $html = "<{$this->tag}";

        foreach ($this->attributes as $key => $value) {
            $html .= ' ' . $key . '="' . $value . '"';
        }

        $html .= '>';
        $html .= $innerHtml;
        $html .= "</{$this->tag}>";

        return $html;
    }
}
