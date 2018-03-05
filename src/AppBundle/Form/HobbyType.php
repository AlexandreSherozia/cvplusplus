<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class HobbyType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('area1', TextType::class, ['label'=>'Area you are passioned by   *'])
                ->add('content1' , TextareaType::class, ['label'=>'Details   *'])
                ->add('area2', TextType::class, ['required'=>false, 'label'=>'Other hobby?'])
                ->add('content2' , TextareaType::class, ['required'=>false, 'label'=>'Details'])
                ->add('area3', TextType::class, ['required'=>false, 'label'=>'Other'])
                ->add('content3' , TextareaType::class, ['required'=>false, 'label'=>'Details'])
                ->add('area4', TextType::class, ['required'=>false, 'label'=>'The last one'])
                ->add('content4' , TextareaType::class, ['required'=>false, 'label'=>'Details']);

    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Hobby'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_hobby';
    }


}
