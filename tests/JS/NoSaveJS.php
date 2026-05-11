<?php

namespace PHPDevsr\Minify\Tests\JS;

use PHPDevsr\Minify\JS;

class NoSaveJS extends JS
{
    protected function save($content, $path)
    {
        // do nothing
    }
}
