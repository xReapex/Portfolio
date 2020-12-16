<?php

namespace App\Controller\EasyAdmin;

use App\Entity\Feedbacks;
use App\Entity\Newsletter;
use App\Entity\User;
use App\Repository\FeedbacksRepository;
use App\Repository\NewsletterRepository;
use App\Repository\UserRepository;
use App\Services\AdminChart;
use DateTime;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{

    private $adminChart;
    private $userRepository;
    private $feedbacksRepository;
    private $newsletterRepository;

    public function __construct(AdminChart $adminChart, UserRepository $userRepository, FeedbacksRepository $feedbacksRepository, NewsletterRepository $newsletterRepository)
    {
        $this->adminChart = $adminChart;
        $this->userRepository = $userRepository;
        $this->feedbacksRepository = $feedbacksRepository;
        $this->newsletterRepository = $newsletterRepository;
    }

    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {

        $websiteContentChart = $this->adminChart->getWebsiteContentChart();
        $websiteUserStateChart = $this->adminChart->getWebsiteUserStateChart();
        $websiteContentByDateChart = $this->adminChart->getWebsiteContentByDateChart();
        $websiteLastFourMonthChart = $this->adminChart->getWebsiteLastFourMonthChart();

        return $this->render('@EasyAdmin/welcome.html.twig', [
            'usersCount' => $this->userRepository->countAllUsers(),
            'feedbacksCount' => $this->feedbacksRepository->countAllFeedbacks(),
            'newsletterCount' => $this->newsletterRepository->countAllNewsletter(),
            'chart' => $websiteContentChart,
            'chart2' => $websiteUserStateChart,
            'chart3' => $websiteContentByDateChart,
            'chart4' => $websiteLastFourMonthChart
        ]);
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Portfolio - Administration');
    }

    public function configureMenuItems(): iterable
    {
        //Leave
        yield MenuItem::linktoRoute('Quitter', 'fas fa-sign-out-alt', 'app.home');

        //Main
        yield MenuItem::section('Dashboard');
        yield MenuItem::linktoDashboard('Statistiques', 'fa fa-home');

        //Users

        yield MenuItem::section('Gestion utilisateurs');
        yield MenuItem::linkToCrud('Liste', 'fas fa-users', User::class);

        //Feedbacks
        yield MenuItem::section('Gestion feedbacks');
        yield MenuItem::linkToCrud('Liste', 'fas fa-comments', Feedbacks::class);
        yield MenuItem::linkToCrud('Nouveau', 'fas fa-comment-medical', Feedbacks::class)->setAction('new');

        //Newsletter
        yield MenuItem::section('Gestion de newsletter');
        yield MenuItem::linkToCrud('Liste', 'fas fa-envelope-open-text', Newsletter::class);
        yield MenuItem::linkToCrud('Nouveau', 'fas fa-paper-plane', Newsletter::class)->setAction('new');
    }

}
