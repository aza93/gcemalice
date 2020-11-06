<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.access_map' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Http\\AccessMapInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Http\\AccessMap.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\HttpFoundation\\RequestMatcherInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\HttpFoundation\\RequestMatcher.php';

$this->services['security.access_map'] = $instance = new \Symfony\Component\Security\Http\AccessMap();

$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/login$'), [0 => 'IS_AUTHENTICATED_ANONYMOUSLY'], NULL);
$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/register'), [0 => 'IS_AUTHENTICATED_ANONYMOUSLY'], NULL);
$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/resetting'), [0 => 'IS_AUTHENTICATED_ANONYMOUSLY'], NULL);
$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/consult/'), [0 => 'ROLE_SUPER_ADMIN'], NULL);
$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/gce/'), [0 => 'ROLE_SUPER_ADMIN'], NULL);
$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/edi/'), [0 => 'ROLE_SUPER_ADMIN'], NULL);
$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/'), [0 => 'ROLE_USER'], NULL);
$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/mag/'), [0 => 'ROLE_MAG'], NULL);
$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/PA/'), [0 => 'ROLE_CAM'], NULL);
$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/PV/'), [0 => 'ROLE_CAM'], NULL);
$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/VN/'), [0 => 'ROLE_CAM'], NULL);

return $instance;
