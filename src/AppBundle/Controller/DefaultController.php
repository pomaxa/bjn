<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Application;
use AppBundle\Form\ApplicationType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{

    /**
     * @Route("/x", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
        ));
    }

    /**
     * @Route("/", name="registration")
     */
    public function registrationAction(Request $request)
    {

        $regApplicationForm = $this->createForm(new ApplicationType(), new Application());
        $regApplicationForm->add('submit', 'submit', array(
            'label' => 'Create',
            'attr'  => array('class' => 'btn btn-default pull-right')
        ));
//        var_dump($regApplication);exit;
        return $this->render('default/application.html.twig', array('form' => $regApplicationForm->createView()));
    }
}
