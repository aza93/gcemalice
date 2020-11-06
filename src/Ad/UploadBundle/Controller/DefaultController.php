<?php

namespace Ad\UploadBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@Exploit/Default/index.html.twig');
    }
}
