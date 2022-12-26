<?php

use Controllers\HomeController;
use Controllers\AboutController;

Router::get('', HomeController::class);
Router::get('about', [AboutController::class, 'about']);
