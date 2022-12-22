<?php

namespace Acme\ImageCollection;

use Laravel\Nova\Fields\Field;

class ImageCollection extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'image-collection';

    public function imageType($value)
    {
        return $this->withMeta([
            'type' => $value,
        ]);
    }
}
