<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'monolog.handler.null_internal' shared service.

include_once $this->targetDirs[3].'\\vendor\\monolog\\monolog\\src\\Monolog\\Handler\\NullHandler.php';

return $this->services['monolog.handler.null_internal'] = new \Monolog\Handler\NullHandler();