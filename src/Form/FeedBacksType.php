<?php

namespace App\Form;

use App\Entity\Feedbacks;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FeedBacksType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Title', TextType::class, [
                'help' => 'Quel est l\'objet de votre commentaire ?',
                'attr' => [
                    'placeholder' => 'Mon super commentaire !'
                ]
            ])

            ->add('Content', TextType::class, [
                'help' => 'Quel est votre message ?',
                'attr' => [
                    'placeholder' => 'Je pense que le site est ...'
                ]
            ])

            ->add('Author', TextType::class, [
                'help' => 'Qui êtes-vous ?',
                'attr' => [
                    'placeholder' => 'Je suis ...'
                ]
            ])
            ->add('Submit', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Feedbacks::class,
        ]);
    }
}
