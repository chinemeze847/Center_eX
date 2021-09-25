<?php

use Cespess\Web\Core\App;
use Cespess\Web\Controller\IndexController;

App::route()->get('/', [IndexController::class, 'home']);


