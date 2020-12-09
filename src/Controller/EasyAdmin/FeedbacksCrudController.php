<?php

namespace App\Controller\EasyAdmin;

use App\Entity\Feedbacks;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class FeedbacksCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Feedbacks::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id', 'Identifiant')->onlyOnIndex(),
            TextField::new('author', 'Auteur'),
            TextField::new('title', 'Titre'),
            TextField::new('content', 'Contenu'),
            DateField::new('date', 'Date de création')->setCustomOption('disabled', 'disabled')->onlyOnIndex(),
        ];
    }

}
