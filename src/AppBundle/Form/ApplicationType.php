<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
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
                    'male' => 'Male',
                    'female' => 'Female',
                )
            ))
            ->add('email', 'email', array('label' => 'Email'))
            ->add('cellPhone')
            ->add('countryOfLiving', null, array('required' => false,))
            ->add('dob', 'birthday', array('label' => 'Date of Birth'))
            ->add('facebookProfile', null, array('required' => false,))
            ->add('linkedinProfile', null, array('required' => false,))
            ->add('knowFrom', 'choice', array(
                'placeholder' => 'Please select one option',
                'label' => 'How did you hear about Baltic Jewish Network',
                'choices' => array(
                    'community',
                    'friends',
                    'facebook',
                    'family',
                    'synagogue',
                    'Other',
                )
            ))
            ->add('languages', 'choice', array('multiple' => true,
                'placeholder' => 'Please select languages you know',
                'choices' => array(
                'Русский',
                'English',
                'Estonian',
                'Latvian',
                'Lithuanian',
                'Spanish',
                'Italian',
                'Ukrainian'
            )))
            ->add('fieldOfWork', null, array('required' => false,))
            ->add('companyName', null, array('required' => false,))
            ->add('position', null, array('required' => false,))
            ->add('wannaBePartner', null, array('required' => false, 'label' => 'Wanna be BJN partner'))
            ->add('motivation', null, array('required' => false, 'label' => 'Motivation to participate in Baltic Jewish Network Weekend 2016?'))
            ->add('dietaryRequirements', null, array('required' => false, 'label' => 'Dietary requirements (kosher style food will be served. Please specify for any other dietary requirements)'))
            ->add('accommodation', 'choice', array('required' => false,

                'placeholder' => 'Select preferred option or skip.',
                'choices' => [
                'single'=>'Single (additional fee for single accommodation will be required)',
                'couple'=>'Couple',
                'shared'=>'Shared'
            ]))
            ->add('accommodationComments', null, array('required' => false, 'label' => 'Remarks & Comments for accommodation'))
//            ->add('applicationStatus', null, array('required'    => false,))
//            ->add('applicationComments', null, array('required'    => false,))
            ->add('transportation', 'choice', array('choices' => array('Own car', 'By bus')))
            ->add('uploadedImage', 'file', array('required' => false,
                'label' => 'In order to create our common network please upload your picture'
                ));
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
