<?php

namespace App\Form;

use App\Entity\Documentation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DocumentationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Alumno: '
            ])
            ->add('surname', TextType::class, [
<<<<<<< HEAD
                'label' => 'codigo del alumno: '
=======
                'label' => 'Surname: '
>>>>>>> 82e37ac839e8051187cf7568b488c33c80e23bac
            ])
            ->add('grade', ChoiceType::class, [
                'label' => 'facultad: ',
                'choices' => [
                    'fiis' => '1',
                    'mecanica' => '2',
                    'industrias' => '3'
                ],
                'expanded' => true
            ])
            ->add('article', TextType::class, [
                'label' => 'profesores de matematica: '
            ])
            ->add('book', TextType::class, [
                'label' => 'profesores de lenguaje: '
            ])
            ->add('projects', TextType::class, [
                'label' => ' profesores de Projects: '
            ])
            ->add('advice', TextType::class, [
                'label' => 'profesores de idiomas: '
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Documentation::class,
        ]);
    }
}
