<?php

namespace Pms\Bundle\ProjectsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class TopicController extends Controller
{
    public function addAction(Request $request)
    {
        $form = $this->createFormBuilder()
            ->add('subject', 'text', array(
                'max_length' => 200
            ))
            ->add('users', 'collection', array(
                'type' => 'text',
                'mapped' => false,
                'allow_add' => true
            ))
            ->add('save', 'submit')
            ->getForm();
        
        if ($request->isMethod('POST')) {
            $form->handleRequest($request);
            
            if ($form->isValid()) {
                var_dump($form->getData(), $students = $form->get('users')->getData());
                
            }
        }
        
        return $this->render(
            'PmsProjectsBundle:Topic:add.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }

}
