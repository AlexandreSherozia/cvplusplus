<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Choice;

class HeaderType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('image', ImageType::class,
                     array('required'=>false))
                ->add('title', ChoiceType::class,
                     array('label'=>'Category | Title | Profession  *',
                         'choices' => array(
                             'Choisissez votre domaine *'        => false,
                             'Administrateur réseau'             => 'Administrateur réseau',
                             'Chef de projet'                    => 'Chef de projet',
                             'Community-manager'                 => 'Community-manager',
                             'Data-scientist(e)'                 => 'Data-scientist' ,
                             'Développeur(se)'                   => 'Développeur',
                             'Développeur(se)-Intégrateur(rice)' => 'Développeur-Intégrateur',
                             'Intégrateur(rice)'                 => 'Intégrateur',
                             'Programmeur(matrice)'              => 'Programmeur',
                             'Web-Designer'                      => 'Web-Designer'
                         )))
                ->add('firstName',TextType::class)
                ->add('name',TextType::class)
                ->add('address',TextType::class)
                ->add('zip',NumberType::class)
                ->add('city',TextType::class)
                ->add('telephone',TelType::class,
                    array('trim'=>true))
            ->add('published', CheckboxType::class,
                array('label'=>'Je désire publier ce CV et le rendre visible dans la CV-liste', 'required'=>false))
        //section SKILLS
        ->add('skills', SkillsType::class)

        //section EDUCATION
        ->add('education', EducationType::class)

        //section EXPERIENCE
        ->add('experience', ExperienceType::class)

        //section WORKS
        ->add('works', WorkType::class)

        //section HOBBY
        ->add('hobby', HobbyType::class)
        ->add('enregistrer', SubmitType::class);

    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Header'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_header';
    }


}
