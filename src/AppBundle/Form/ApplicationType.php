<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ApplicationType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('namePrefix', 'choice', array('choices' => array(
                'Ms.',
                'Mrs.',
                'Mr.'
            )))
            ->add('firstName')
            ->add('lastName')
            ->add('gender', 'choice', array('choices' => array('male'=>'Male', 'female'=>'Female', 'other' => 'Other')))
            ->add('email', 'email', array('label' => 'Email'))
            ->add('cellPhone')
            ->add('countryOfLiving')
            ->add('dob', 'birthday', array('label' => 'Date of Birth'))
            ->add('facebookProfile')
            ->add('linkedinProfile')
            ->add('knowFrom', 'choice', array('label' => 'Know about event from:', 'choices'=> array(
                'friends',
                'facebook',
                'family',
                'synagogue',
                'Other',
            )))
            ->add('languages', 'choice', array('multiple' => true, 'choices' => array(
                'Русский',
                'English',
                'Estonian',
                'Latvian',
                'Lithuanian',
                'Spanish',
                'Italian',
                'Ukrainian'
            )))
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
            ->add('transportation', 'choice' , array('choices' => array('Own car', 'By bus')))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Application'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'appbundle_application';
    }
}
