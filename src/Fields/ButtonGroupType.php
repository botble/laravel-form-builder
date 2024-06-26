<?php

namespace Kris\LaravelFormBuilder\Fields;

class ButtonGroupType extends FormField
{
    public function render(array $options = [], $showLabel = true, $showField = true, $showError = true)
    {
        $options['splitted'] = $this->getOption('splitted', false);
        $options['size'] = $this->getOption('size', 'md');
        $options['buttons'] = $this->getOption('buttons', []);

        return parent::render($options, $showLabel, $showField, $showError);
    }

    protected function getTemplate(): string
    {
        return 'buttongroup';
    }
}
