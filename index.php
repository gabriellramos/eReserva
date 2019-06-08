<?php

define('APP_ROOT', 'sistema_eReserva');

require_once 'helper/Bootstrap.php';

use lib\System;

$System = new System();
$System->Run();
