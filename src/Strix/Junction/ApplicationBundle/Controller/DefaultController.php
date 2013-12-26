<?php

namespace Strix\Junction\ApplicationBundle\Controller;

use Strix\Junction\ApplicationBundle\Entity\Application ;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{

    public function introAction()
    {
        return $this->render('StrixJunctionApplicationBundle:Default:intro.html.twig');
    }

    public function indexAction()
    {

        $application = new Application();

        $form = $this->createFormBuilder($application)

            ->add('namePrefix', 'choice', array('choices' => array('Ms.', 'Mrs.', 'Mr.')))
            ->add('firstName')
            ->add('lastName')
            ->add('gender', 'choice', array('choices' => Application::getGenders(), 'empty_value' => 'Choose an option',))
            ->add('email')
            ->add('cellPhone')
            ->add('countryOfLiving', 'country', array('empty_value' => 'Choose an option'))
            ->add('dateOfBirth', 'date', array('widget' => 'single_text'))
            ->add('facebookProfile', 'url')
            ->add('linkedinProfile', 'url')
            ->add('knowFrom', 'choice', array('choices' => Application::knowFromSuggestions(), 'label' => 'How did you hear about Baltic Jewish Network?') )

            ->add('languages', 'language', array('multiple' => true, 'label' => 'What languages do you speak?'))
//            ->add('languages', 'choice', array('multiple' => true, 'choices' => array(
//                'latvian' => 'Latviesu',
//                'estonian' => 'Estonian',
//                'english' => 'English',
//                'lithuanian' => 'Lietuveski',
//                'russian' => 'Русский',
//            )))
            ->add('fieldOfWork', 'textarea')
            ->add('companyName', 'text')
            ->add('position', 'text')
            ->add('wannaBePartner', null, array('label' => 'Would you like to be a Baltic Jewish Network Presenter? (business idea, field of expertise, company?)*'))
            ->add('motivation', 'textarea', array('label' => 'Motivation to participate in Baltic Jewish Network 2014?'))
            ->add('dietaryRequirements', 'textarea', array('label' => 'Kosher style food will be served (vegetarian + fish). Please specify for any other dietary requirements .'))
            ->add('accommodation', 'choice', array('choices' => Application::accommodationsList(), 'label' => 'Accommodation Preference'))
            ->add('accommodationComments', 'textarea', array('label' => 'Remarks & Comments for accommodation'))
            ->add('apply', 'submit')
            ->getForm();
        ;
        return $this->render('StrixJunctionApplicationBundle:Default:index.html.twig', array('form' => $form->createView()));
    }
}
