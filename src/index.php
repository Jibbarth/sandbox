<?php

require_once dirname(__DIR__) . '/vendor/autoload.php';

$argv = new \Symfony\Component\Console\Input\ArgvInput();

dump($argv->getFirstArgument());
