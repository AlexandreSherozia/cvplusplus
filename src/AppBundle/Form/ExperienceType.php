<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ExperienceType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('informatics',TextareaType::class, array('label' => 'One experience at least   *' ))
                ->add('otherSector1',TextType::class, array('required'=> false,
                                                               'label' => 'Precise the sector' ))
                ->add('otherSector1Content',TextareaType::class, array('required'=> false,
                                                               'label' => 'Describe it' ))
                ->add('otherSector2',TextType::class, array('required'=> false,
                                                               'label' => 'Precise the sector' ))
                ->add('otherSector2Content',TextareaType::class, array('required'=> false,
                                                               'label' => 'Describe it' ))
                ->add('otherSector3',TextType::class, array('required'=> false,
                                                               'label' => 'Precise the sector' ))
                ->add('otherSector3Content',TextareaType::class, array('required'=> false,
                                                               'label' => 'Describe it' ));
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Experience'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_experience';
    }


}
