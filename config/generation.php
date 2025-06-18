<?php

use Codeat3\BladeIconGeneration\IconProcessor;

$svgNormalization = static function (string $tempFilepath, array $iconSet) {
    // perform generic optimizations
    xdebug_break();
    $iconProcessor = new IconProcessor($tempFilepath, $iconSet);
    $iconProcessor
        ->optimize()
        ->save();
};

return [
    [
        'source' => __DIR__.'/../payment-logos/assets/cards',
        'destination' => __DIR__.'/../resources/svg/cards',
        'after' => $svgNormalization,
    ],
    [
        'source' => __DIR__.'/../payment-logos/assets/apm',
        'destination' => __DIR__.'/../resources/svg/apm',
        'after' => $svgNormalization,
    ],
    [
        'source' => __DIR__.'/../payment-logos/assets/generic',
        'destination' => __DIR__.'/../resources/svg/generic',
        'after' => $svgNormalization,
    ],
    [
        'source' => __DIR__.'/../payment-logos/assets/wallets',
        'destination' => __DIR__.'/../resources/svg/wallets',
        'after' => $svgNormalization,
    ],
];
