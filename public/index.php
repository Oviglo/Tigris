<?php

use App\Kernel;

// set time zone utc
date_default_timezone_set('UTC');

require_once dirname(__DIR__).'/vendor/autoload_runtime.php';

return function (array $context) {
    return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
};
