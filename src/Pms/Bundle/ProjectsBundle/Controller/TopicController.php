<?php

namespace Pms\Bundle\ProjectsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Pms\Bundle\ProjectsBundle\Entity;

class TopicController extends Controller {

    public function addAction(Request $request) {
        $project = new Entity\Project();
        $lecturer = new Entity\Lecturer();
        $project->setLecturer($lecturer);
        $team = new Entity\Team();

        $form = $this->createFormBuilder()
                ->add('subject', 'text', array(
                    'max_length' => 200
                ))
                ->add('lecturer', 'text', array(
                    'max_length' => 100
                ))
                ->add('students', 'collection', array(
                    'type' => 'text',
                    'mapped' => false,
                    'allow_add' => true,
                    'label' => false
                ))
                ->add('save', 'submit')
                ->getForm();

        if ($request->isMethod('POST')) {
            $form->handleRequest($request);

            if ($form->isValid()) {
                $subject = $form->get('subject')->getData();
                $lecturerName = $form->get('lecturer')->getData();
                $students = $form->get('students')->getData();

                $project->setSubject($subject);
                $project->setStatus(Entity\Status::AWAITING);
                $lecturer->setName($lecturerName);

                foreach ($students as $studentName) {
                    $student = new Entity\Student();
                    $student->setName($studentName);
                    $team->addStudent($student);
                }

                $project->setTeam($team);
                $project->setEntryDate(date('d-m-Y H:i:s'));
                $em = $this->getDoctrine()->getManager();

                $em->persist($project);
                $em->persist($lecturer);
                $em->persist($team);

                $em->flush();

                return $this->redirect("/");
            }
        }

        return $this->render(
                        'PmsProjectsBundle:Topic:add.html.twig', array(
                    'form' => $form->createView()
                        )
        );
    }
 

    public function changeStatusAction($id, Request $request) {
        $form = $this->createFormBuilder()
                ->add('comment', 'textarea')
                ->add('password', 'password')
                ->add('accept', 'submit')
                ->add('reject', 'submit')
                ->getForm();

        if ($request->isMethod('POST')) {
            $form->handleRequest($request);
            if ($form->isValid()) {
                $password = "gargamel";
                if($form->get('password')->getData() === $password){
                $project = $this->getDoctrine()->getRepository('PmsProjectsBundle:Project')->find($id);
                if ($form->get('accept')->isClicked()) {
                    $project->setStatus(Entity\Status::ACCEPTED);
                } elseif ($form->get('reject')->isClicked()) {
                    $project->setStatus(Entity\Status::CANCELED);
                }
                $project->setComment($form->get('comment')->getData());
                $project->setChangeDate(date('d-m-Y H:i:s'));
                $em = $this->getDoctrine()->getManager();
                $em->persist($project);
                $em->flush();
                return $this->redirect("/");
                
                }
                return $this->render('PmsProjectsBundle:Topic:wrongPassword.html.twig');                             // TO DO 
            }
        } else {
            return $this->render('PmsProjectsBundle:Topic:actionForm.html.twig', array('form' => $form->createView()));
        }


    }
    
    public function studentListAction($teamId){
        $em = $this->getDoctrine()->getEntityManager();
        $query = $em->createQuery('Select s.name from Pms\Bundle\ProjectsBundle\Entity\Student  s where s.id in (select t.studentId from Pms\Bundle\ProjectsBundle\Entity\TeamStudent t where t.teamId = :teamId)')
                ->setParameter('teamId', $teamId);
        $result = $query->getResult();
 
        
         
        return $this->render('PmsProjectsBundle:Topic:teamList.html.twig', array('students' => $result));
        
        
        
    }

    

}
