<?php

namespace App\Form;

use App\Entity\Feedbacks;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
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
            ->add('Title', ChoiceType::class, [
                'help' => 'Quel est l\'objet de votre commentaire ?',
                'placeholder' => 'Choisissez un titre',
                'label' => "Titre",
                'choices' => [
                    'Expérience positive' => [
                        'J\'adore ce site' => 'J\'adore ce site',
                        'J\'aime bien ce site' => 'J\'aime bien ce site',
                        'Le site est correct' => 'Le site est correct'
                    ],
                    'Expérience négative' => [
                        'Des choses à améliorer' => 'Des choses à améliorer',
                        'Je n\'aime pas trop ce site' => 'Je n\'aime pas trop ce site',
                        'Ce site est horrible' => 'Ce site est horrible'
                    ]
                ]
            ])

            ->add('Content', TextType::class, [
                'help' => 'Quel est votre message ?',
                'attr' => [
                    'placeholder' => 'Je pense que le site est ...'
                ],
                'label' => "Message"
            ])

            ->add('Author', TextType::class, [
                'help' => 'Qui êtes-vous ?',
                'attr' => [
                    'placeholder' => $user
                ],
                'disabled' => 1,
                'label' => "Auteur"
            ])
            ->add('Envoyer', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Feedbacks::class,
        ]);
    }
}
