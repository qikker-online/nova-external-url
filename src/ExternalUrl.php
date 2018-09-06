<?php

namespace Qikker\ExternalUrl;

use Closure;
use Laravel\Nova\Fields\Field;

class ExternalUrl extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'external-url';

    public function __construct($name = '', $attribute = '', $resolveCallback = null)
    {
        parent::__construct($name, $attribute, $resolveCallback);
        $this->exceptOnForms();
    }

    /**
     * Allows user to specify the title for the URL
     *
     * @param $title
     * @return ExternalUrl
     */
    public function customTitle($title)
    {
        if ($title instanceof Closure) {
            return $this->withMeta(['title' => call_user_func($title)]);
        }

        return $this->withMeta(['title' => $title]);
    }

    /**
     * Allows user to specify a custom URL
     *
     * @param $title
     * @return ExternalUrl
     */
    public function customUrl($url)
    {
        if ($url instanceof Closure) {
            return $this->withMeta(['url' => call_user_func($url)]);
        }

        return $this->withMeta(['url' => $url]);
    }
}
