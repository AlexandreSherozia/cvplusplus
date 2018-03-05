<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EducationType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('informatics',TextareaType::class, array('required'=> true,
                                                               'label' => 'Programming school, university or other' ))
                ->add('otherSector1', TextType::class, array('required'=> false,
                                                               'label' => 'Add a sector' ))
                ->add('otherSector1Content',TextareaType::class, array('required'=> false,
                                                               'label' => 'School name or description' ))
                ->add('otherSector2', TextType::class, array('required'=> false,
                                                               'label' => 'Another sector' ))
                ->add('otherSector2Content',TextareaType::class, array('required'=> false,
                                                               'label' => 'School name or description' ))
                ->add('otherSector3', TextType::class, array('required'=> false,
                                                               'label' => 'Another sector' ))
                ->add('otherSector3Content',TextareaType::class, array('required'=> false,
                                                               'label' => 'School name or description' ));
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Education'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_education';
    }


}
