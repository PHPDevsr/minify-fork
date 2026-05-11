<?php

namespace PHPDevsr\Minify\Tests\CSS;

use PHPDevsr\Minify\CSS;

class NoSaveCSS extends CSS
{
    protected function save($content, $path)
    {
        // do nothing
    }
}
