<?php

use Cespess\Web\Core\App;
use Cespess\Web\Controller\IndexController;

App::route()->get('/center_ex/public/', [IndexController::class, 'home']);


