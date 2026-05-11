<?php

use Nexus\CsConfig\Factory;
use Nexus\CsConfig\Ruleset\Nexus82;

return Factory::create(new Nexus82())->forLibrary('PHPDevsr\Minify', 'PHPDevsr', 'https://github.com/PHPDevsr', 2026);
