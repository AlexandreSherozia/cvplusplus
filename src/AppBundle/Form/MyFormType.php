<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;

class MyFormType extends AbstractType
{
	
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder->add('collection', TextType::class)
				->add('title', TextType::class)
				->add('code', TextType::class)
				->add('description', TextareaType::class)
				->add('Submit', submitType::class);

	}
	public function configureOptions(OptionsResolver $resolver)
  	{
    $resolver->setDefaults(array(
      'data_class' => 'AppBundle\Entity\Item'
    ));
  	}
}