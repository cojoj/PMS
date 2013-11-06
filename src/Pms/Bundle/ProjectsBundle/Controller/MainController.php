<?php

namespace Pms\Bundle\ProjectsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Pms\Bundle\ProjectsBundle\Entity;

class MainController extends Controller
{
    public function indexAction()
    {
        $repo = $this->getDoctrine()->getRepository('PmsProjectsBundle:Project');
        $project = new \stdClass();
        $project->awaiting = $repo->findBy(['status' => Entity\Status::AWAITING]);
        $project->accepted = $repo->findBy(['status' => Entity\Status::ACCEPTED]);
        $project->canceled = $repo->findBy(['status' => Entity\Status::CANCELED]);
        
        return $this->render(
            'PmsProjectsBundle:Main:index.html.twig',
            array('project' => $project)
        );
    }
}
