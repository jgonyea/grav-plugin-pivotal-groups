<?php
namespace Grav;

use Codeception\Util\Fixtures;
use Faker\Factory;
use Grav\Common\Grav;

ini_set('error_log', __DIR__ . '/error.log');

// Needed to load grav's core autoload.
require_once('../../../vendor/autoload.php');


// Copied from Grav's core tests _bootstrap.php file.
$grav = function () {
    Grav::resetInstance();
    $grav = Grav::instance();
    $grav['config']->init();

    // This must be set first before the other init
    $grav['config']->set('system.languages.supported', ['en', 'fr', 'vi']);
    $grav['config']->set('system.languages.default_lang', 'en');

    foreach (array_keys($grav['setup']->getStreams()) as $stream) {
        @stream_wrapper_unregister($stream);
    }

    $grav['streams'];

    // Commented due to error.
    //$grav['uri']->init();
    $grav['debugger']->init();
    $grav['assets']->init();

    $grav['config']->set('system.cache.enabled', false);
    $grav['locator']->addPath('tests', '', 'tests', false);

    return $grav;
};

Fixtures::add('grav', $grav);
