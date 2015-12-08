<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class ApplicationAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('firstName')
            ->add('lastName')
            ->add('gender')
            ->add('email')
            ->add('cellPhone')
            ->add('countryOfLiving')
            ->add('dob')
            ->add('facebookProfile')
            ->add('linkedinProfile')
            ->add('knowFrom')
            ->add('languages')
            ->add('fieldOfWork')
            ->add('companyName')
            ->add('position')
            ->add('wannaBePartner')
            ->add('motivation')
            ->add('dietaryRequirements')
            ->add('accommodation')
            ->add('accommodationComments')
            ->add('applicationStatus')
            ->add('applicationComments')
            ->add('namePrefix')
            ->add('transportation')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('id')
            ->add('firstName')
            ->add('lastName')
            ->add('gender')
            ->addIdentifier('email')
            ->add('cellPhone')
            ->add('countryOfLiving')
            ->add('dob')
            ->add('facebookProfile')
            ->add('linkedinProfile')
            ->add('knowFrom')
            ->add('languages')
            ->add('fieldOfWork')
            ->add('companyName')
            ->add('position')
            ->add('wannaBePartner')
            ->add('motivation')
            ->add('dietaryRequirements')
            ->add('accommodation')
            ->add('accommodationComments')
            ->add('applicationStatus')
            ->add('applicationComments')
            ->add('namePrefix')
            ->add('transportation')
            ->add('_action', 'actions', array(
                'actions' => array(
                    'show' => array(),
                    'edit' => array(),
                    'delete' => array(),
                )
            ))
        ;
    }

    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('id')
            ->add('firstName')
            ->add('lastName')
            ->add('gender')
            ->add('email')
            ->add('cellPhone')
            ->add('countryOfLiving')
            ->add('dob')
            ->add('facebookProfile')
            ->add('linkedinProfile')
            ->add('knowFrom')
            ->add('languages')
            ->add('fieldOfWork')
            ->add('companyName')
            ->add('position')
            ->add('wannaBePartner')
            ->add('motivation')
            ->add('dietaryRequirements')
            ->add('accommodation')
            ->add('accommodationComments')
            ->add('applicationStatus')
            ->add('applicationComments')
            ->add('namePrefix')
            ->add('transportation')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('firstName')
            ->add('lastName')
            ->add('gender')
            ->add('email')
            ->add('cellPhone')
            ->add('countryOfLiving')
            ->add('dob')
            ->add('facebookProfile')
            ->add('linkedinProfile')
            ->add('knowFrom')
            ->add('languages')
            ->add('fieldOfWork')
            ->add('companyName')
            ->add('position')
            ->add('wannaBePartner')
            ->add('motivation')
            ->add('dietaryRequirements')
            ->add('accommodation')
            ->add('accommodationComments')
            ->add('applicationStatus')
            ->add('applicationComments')
            ->add('namePrefix')
            ->add('transportation')
        ;
    }
}
