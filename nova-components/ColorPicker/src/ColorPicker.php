<?php

namespace Acme\ColorPicker;

use Laravel\Nova\Fields\Field;

class ColorPicker extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'color-picker';

    public function hues(array $hues)
    {
        return $this->withMeta(['hues' => $hues]);
    }
}
