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

    protected function trans($string)
    {
        return $this->get('translator')->trans($string);
    }

    public function dbaAction()
    {

        $leadId = $this->getRequest()->get('lead_id');


        return $this->render('StrixJunctionApplicationBundle:Crm:form.html.twig', array('leadId' => $leadId));
    }


    public function indexAction()
    {

        $application = new Application();

        $form = $this->createFormBuilder($application)

            ->add('namePrefix', 'choice', array('choices' => array('Ms.', 'Mrs.', 'Mr.')))
            ->add('firstName', null, array('label' => 'first name'))
            ->add('lastName', null, array('label' => 'last name'))
            ->add('gender', 'choice', array('choices' => Application::getGenders(), 'empty_value' => $this->trans('Choose an option'), 'label' => $this->trans('gender')))
            ->add('email', null, array('label' => 'email'))
            ->add('cellPhone', null, array('label' => 'cell phone'))
            ->add('countryOfLiving', 'country', array('empty_value' => $this->trans('Choose an option'), 'label' => $this->trans('country of living')))
            ->add('dateOfBirth', 'date', array('widget' => 'single_text', 'label' => $this->trans('date of birth')))
            ->add('facebookProfile', 'url',array('label' => 'facebook profile'))
            ->add('linkedinProfile', 'url', array('label' => 'linkedin profile'))
            ->add('knowFrom', 'choice', array('choices' => Application::knowFromSuggestions(), 'label' => $this->trans('How did you hear about Baltic Jewish Network?')) )
            ->add('languages', 'language', array('multiple' => true, 'label' => $this->trans('What languages do you speak?')))
//            ->add('languages', 'choice', array('multiple' => true, 'choices' => array(
//                'latvian' => 'Latviesu',
//                'estonian' => 'Estonian',
//                'english' => 'English',
//                'lithuanian' => 'Lietuveski',
//                'russian' => 'Русский',
//            )))
            ->add('fieldOfWork', 'textarea', array('label' => $this->trans('field of work')))
            ->add('companyName', 'text', array('label'=> $this->trans('company_name')))
            ->add('position', 'text', array('label' => $this->trans('position in company')))
            ->add('wannaBePartner', null, array('label' => $this->trans('Would you like to be a Baltic Jewish Network Presenter? (business idea, field of expertise, company?)*')))
            ->add('motivation', 'textarea', array('label' => $this->trans('Motivation to participate in Baltic Jewish Network 2014?')))
            ->add('dietaryRequirements', 'textarea', array('label' => $this->trans('Kosher style food will be served (vegetarian + fish). Please specify for any other dietary requirements .')))
            ->add('accommodation', 'choice', array('choices' => Application::accommodationsList(), 'label' => $this->trans('Accommodation Preference')))
            ->add('accommodationComments', 'textarea', array('label' => $this->trans('Remarks & Comments for accommodation')))
            ->add('apply', 'submit')
            ->getForm();
        ;
        return $this->render('StrixJunctionApplicationBundle:Default:index.html.twig', array('form' => $form->createView()));
    }
}
