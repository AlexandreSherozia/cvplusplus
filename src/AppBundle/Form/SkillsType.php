<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SkillsType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('languages',TextareaType::class, array('label' => 'Programming languages   *' ))
                ->add('sector1',TextType::class, array('required' => false))
                ->add('sector1Content',TextareaType::class, array('required' => false ))
                ->add('sector2',TextType::class, array('required' => false))
                ->add('sector2Content',TextareaType::class, array('required' => false))
                ->add('sector3',TextType::class, array('required' => false))
                ->add('sector3Content',TextareaType::class, array('required' => false));


    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Skills'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_skills';
    }


}
