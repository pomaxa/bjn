<?php

namespace Strix\Junction\ApplicationBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Strix\Junction\ApplicationBundle\Entity\Application;

class ApplicationAdmin extends Admin
{
    protected function configureFormFields(FormMapper $form)
    {
        $form
            ->add('applicationStatus', 'choice', array('choices' => array('NEW', 'PENDING', 'CHECKING', 'REJECTED', 'APPROVED') ))
            ->add('applicationComments', 'textarea')
            ->add('namePrefix', 'choice', array('choices' => array('Ms.', 'Mrs.', 'Mr.')))
            ->add('firstName')
            ->add('lastName')
            ->add('gender', 'choice', array('choices' => array(Application::getGenders())))
            ->add('email')
            ->add('cellPhone')
            ->add('countryOfLiving', 'country')
            ->add('dateOfBirth', 'date')
            ->add('facebookProfile', 'url')
            ->add('linkedinProfile', 'url')
            ->add('knowFrom', 'choice', array('choices' => Application::knowFromSuggestions()))

            ->add('languages', 'language', array('multiple' => true))
            ->add('fieldOfWork', 'textarea')
            ->add('companyName', 'text')
            ->add('position', 'text')
            ->add('wannaBePartner', null, array('label' => 'Would you like to be a Baltic Jewish Network Presenter? (business idea, field of expertise, company?)*'))
            ->add('motivation', 'textarea', array('label' => 'Motivation to participate in Baltic Jewish Network 2014?'))
            ->add('dietaryRequirements', 'textarea', array('label' => 'Kosher style food will be served (vegetarian + fish). Please specify for any other dietary requirements .'))
            ->add('accommodation', 'choice', array('choices' => Application::accommodationsList(), 'label' => 'Accommodation Preference'))
            ->add('accommodationComments', 'textarea', array('label' => 'Remarks & Comments for accommodation'))
            ;
    }

    protected function configureListFields(ListMapper $list)
    {
        $list->addIdentifier('id')
            ->add('firstName')
            ->add('lastName');
    }
} 