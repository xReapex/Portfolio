<?php

namespace App\Controller\EasyAdmin;

use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;

class UserCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return User::class;
    }

    public function configureActions(Actions $actions): Actions
    {
        return $actions
            ->remove(Crud::PAGE_INDEX, Action::NEW);
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id', 'Identifiant')->onlyOnIndex(),
            TextField::new('username', 'Pseudo')->setHelp("Ne jamais changer le pseudo sauf en cas extrême."),
            TextField::new('email', 'Adresse email')->setHelp("Ne jamais changer l'adresse email sauf en cas extrême."),
            TextField::new('token', 'Token')->setFormTypeOption('disabled', 'disabled')->setHelp("Le token est inchangeable et est unique à chaque utilisateur."),
            TextField::new('password', 'Mot de passe')->onlyOnForms()->setHelp('Le mot de passe doit être encrypté à la main.'),
            ArrayField::new('roles', 'Rôles')->setHelp("Les rôles de l'utilisateur assignent les permissions."),
            BooleanField::new('is_verified', 'Adresse email confirmée')->renderAsSwitch(false),
            ChoiceField::new('roles', 'Rôles')->setChoices([
                'user' => 'ROLE_USER',
                'dev' => 'ROLE_DEVELOPPER',
                'admin' => 'ROLE_ADMIN',
            ])->allowMultipleChoices(),
            DateField::new('date', 'Date de création')->setCustomOption('disabled', 'disabled')->onlyOnIndex()
        ];
    }

}
