<?php

namespace Pms\Bundle\ProjectsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class MainController extends Controller
{
    public function indexAction()
    {
        
        return $this->render(
            'PmsProjectsBundle:Main:index.html.twig'
        );
    }
}
