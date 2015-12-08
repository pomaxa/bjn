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
            ->add('gender', 'choice', array(
                'choices' => array(
                    'other' => 'Other',
                    'male'=>'Male',
                    'female'=>'Female',
                )
            ))
            ->add('email', 'email', array('label' => 'Email'))
            ->add('cellPhone')
            ->add('countryOfLiving', null, array('required'    => false,))
            ->add('dob', 'birthday', array('label' => 'Date of Birth'))
            ->add('facebookProfile', null, array('required'    => false,))
            ->add('linkedinProfile', null, array('required'    => false,))
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
            ->add('fieldOfWork', null, array('required'    => false,))
            ->add('companyName', null, array('required'    => false,))
            ->add('position', null, array('required'    => false,))
            ->add('wannaBePartner', null, array('required'    => false,))
            ->add('motivation', null, array('required'    => false,))
            ->add('dietaryRequirements', null, array('required'    => false,))
            ->add('accommodation', null, array('required'    => false,))
            ->add('accommodationComments', null, array('required'    => false,))
//            ->add('applicationStatus', null, array('required'    => false,))
//            ->add('applicationComments', null, array('required'    => false,))
            ->add('transportation', 'choice' , array('choices' => array('Own car', 'By bus')))
            ->add('uploaded_image', 'file', array('required' => false))
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
