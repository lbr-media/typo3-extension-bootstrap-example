<?php

declare(strict_types=1);

namespace LBRmedia\BootstrapExample\Hooks;

class IconSet
{
    /**
     * Get the HTML markup for fontaweseome icons.
     * Is used as hook function.
     *
     * @param array $params Array with keys 'set' and 'value'.
     * @return string The icon markup or an empty string it is not the required icon set
     */
    public function getFontawesomeIconMarkup($params): string
    {
        if ($params['set'] === 'fa6') {
            return  '<i class="' . $params['value'] . '"></i>';
        }

        return '';
    }
}
