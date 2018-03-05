<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class WorkType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('url1', UrlType::class, array('label'=>'At least, one link of the website, you\'ve worked on   *'))
                ->add('description1',TextareaType::class, array('label'=>'Describe it   *'))
                ->add('url2', UrlType::class, array('required'=>false, 'label'=>'Other link'))
                ->add('description2',TextareaType::class, array('required'=>false, 'label'=>'Description'))
                ->add('url3', UrlType::class, array('required'=>false, 'label'=>'Other link'))
                ->add('description3',TextareaType::class, array('required'=>false, 'label'=>'Description'));
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Work'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_work';
    }


}
