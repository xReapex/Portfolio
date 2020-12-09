<?php

namespace App\Services;

use App\Repository\FeedbacksRepository;
use App\Repository\NewsletterRepository;
use App\Repository\UserRepository;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\PieChart;

class AdminChart
{

    private $userRepository;
    private $feedbackRepository;
    private $newsletterRepository;

    public function __construct(UserRepository $userRepository, FeedbacksRepository $feedbackRepository, NewsletterRepository $newsletterRepository)
    {
        $this->userRepository = $userRepository;
        $this->feedbackRepository = $feedbackRepository;
        $this->newsletterRepository = $newsletterRepository;
    }
    
    public function getWebsiteContentChart()
    {
        $pieChart = new PieChart();
        $pieChart->getData()->setArrayToDataTable(
            [['Entité', 'Nombre'],
                ['Utilisateurs', $this->userRepository->countAllUsers()['value']],
                ['Feedbacks', $this->feedbackRepository->countAllFeedbacks()['value']],
                ['Newsletter', $this->newsletterRepository->countAllNewsletter()['value']],
            ]
        );
        $pieChart->getOptions()->setTitle('Contenus du site.');
        $pieChart->getOptions()->setHeight(350);
        $pieChart->getOptions()->setWidth(400);
        $pieChart->getOptions()->getTitleTextStyle()->setBold(true);
        $pieChart->getOptions()->getTitleTextStyle()->setColor('#000000');
        $pieChart->getOptions()->getTitleTextStyle()->setItalic(true);
        $pieChart->getOptions()->getTitleTextStyle()->setFontName('Arial');
        $pieChart->getOptions()->getTitleTextStyle()->setFontSize(15);
        $pieChart->getOptions()->setIs3D(true);
        $pieChart->getOptions()->setColors(['#cde4f1', '#d2ede3', '#f7e4d1']);

        return $pieChart;
    }

    public function getWebsiteUserStateChart()
    {
        $pieChart = new PieChart();
        $pieChart->getData()->setArrayToDataTable(
            [['Etat', 'Nombre'],
                ['Confirmés', $this->userRepository->count(['is_verified' => '1'])],
                ['En attente', $this->userRepository->count(['is_verified' => '0'])],
            ]
        );
        $pieChart->getOptions()->setTitle('Etat utilisateurs.');
        $pieChart->getOptions()->setHeight(350);
        $pieChart->getOptions()->setWidth(400);
        $pieChart->getOptions()->getTitleTextStyle()->setBold(true);
        $pieChart->getOptions()->getTitleTextStyle()->setColor('#000000');
        $pieChart->getOptions()->getTitleTextStyle()->setItalic(true);
        $pieChart->getOptions()->getTitleTextStyle()->setFontName('Arial');
        $pieChart->getOptions()->getTitleTextStyle()->setFontSize(15);
        $pieChart->getOptions()->setIs3D(true);
        $pieChart->getOptions()->setColors(['#cde4f1', '#d2ede3', '#f7e4d1']);

        return $pieChart;
    }

    public function getWebsiteContentByDateChart()
    {
        $pieChart = new PieChart();
        $pieChart->getData()->setArrayToDataTable(
            [['Entité', 'Nombre'],
                ['Utilisateurs', $this->userRepository->getAllUserByMonth(date('m'))['value']],
                ['Feedbacks', $this->feedbackRepository->getAllFeedbackByMonth(date('m'))['value']],
                ['Newsletter', $this->newsletterRepository->getAllNewsletterByMonth(date('m'))['value']]
            ]
        );
        $pieChart->getOptions()->setTitle('Activité du mois.');
        $pieChart->getOptions()->setHeight(350);
        $pieChart->getOptions()->setWidth(400);
        $pieChart->getOptions()->getTitleTextStyle()->setBold(true);
        $pieChart->getOptions()->getTitleTextStyle()->setColor('#000000');
        $pieChart->getOptions()->getTitleTextStyle()->setItalic(true);
        $pieChart->getOptions()->getTitleTextStyle()->setFontName('Arial');
        $pieChart->getOptions()->getTitleTextStyle()->setFontSize(15);
        $pieChart->getOptions()->setIs3D(true);
        $pieChart->getOptions()->setColors(['#cde4f1', '#d2ede3', '#f7e4d1']);

        return $pieChart;
    }
}