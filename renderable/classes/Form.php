<?php

class Form implements Renderable {
    private $elements = [];

    public function addElement($element) {
        $this->elements[] = $element;
    }

    public function render() {
        $formHtml = '<form>';
        foreach ($this->elements as $element) {
            $formHtml .= $element->render();
        }
        $formHtml .= '</form>';
        return $formHtml;
    }
}