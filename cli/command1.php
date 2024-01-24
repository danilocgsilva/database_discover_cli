<?php

declare(strict_types=1);

use Danilocgsilva\DatabaseDiscoverCli\DatabaseDiscoverCli;

require_once("vendor/autoload.php");

$databaseDiscoverCli = new DatabaseDiscoverCli();

$databaseDiscoverCli->addConnection();

