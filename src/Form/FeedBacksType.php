<?php

namespace App\Form;

use App\Entity\Feedbacks;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Security\Core\Security;

class FeedBacksType extends AbstractType
{

    private $security;

    public function __construct(Security $security)
    {
        $this->security = $security;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $user = $this->security->getUser()->getUsername();
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
                    'placeholder' => $user
                ],
                'disabled' => 1
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
