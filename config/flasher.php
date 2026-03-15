<?php

declare(strict_types=1);

use Flasher\Prime\Configuration;

return Configuration::from([
    'default' => 'noty',
    'plugins' => [
        'noty' => [
            'scripts' => [
                '/vendor/flasher/noty.min.js',
                '/vendor/flasher/flasher-noty.min.js',
            ],
            'styles' => [
                '/vendor/flasher/noty.css',
                '/vendor/flasher/mint.css',
            ],
            'options' => [
                //
            ],
        ],
    ],
]);
