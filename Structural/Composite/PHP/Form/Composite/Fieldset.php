<?php

namespace DesignPatterns\Structural\Composite\PHP\Form\Composite;

use DesignPatterns\Structural\Composite\Php\Form\FieldComposite;

class Fieldset extends FieldComposite
{
    public function render(): string
    {
        $output = parent::render();

        return "<fieldset><legend>{$this->title}</legend>\n$output</fieldset>\n";
    }
}