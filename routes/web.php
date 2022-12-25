<?php

use Controllers\HomeController;
use Controllers\AboutController;
use Controllers\ProductController;

Router::get('', HomeController::class);
Router::get('about', [AboutController::class, 'about']);
