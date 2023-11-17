<?php

use ClickBlocks\Cache;

// This line is necessary for correct work of the framework
// when you run the script from the console.
$_SERVER['DOCUMENT_ROOT'] = __DIR__;

// Includes the main class of the framework.
require_once(__DIR__ . '/development/Framework/clickblocks.php');

// Initializes the framework.
$cb = CB::init();

// Loading of the main application config.
$cb->setConfig(__DIR__ . '/development/Application/_config/config.ini');
// Loading of the local (development) application config.
$cb->setConfig(__DIR__ . '/development/Application/_config/.local.ini');
// Launching of the garbage collector with the given probability if it set.
if (!empty($cb['cache']['gcProbability'])) $cb->getCache()->gc($cb['cache']['gcProbability']);

