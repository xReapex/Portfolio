<?php

namespace App\Services;

use App\Repository\FeedbacksRepository;
use App\Repository\NewsletterRepository;
use App\Repository\UserRepository;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\Material\ColumnChart;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\PieChart;
use DoctrineExtensions\Query\Mysql\Date;

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

    public function getWebsiteLastFourMonthChart()
    {

        $date = date("d/m/y");
        $date_mois_annee = date("m/y");

        $chart = new ColumnChart();
        $chart->getData()->setArrayToDataTable([
            ['Mois', 'Création utilisateurs', 'Création de feedbacks', 'Ajouts dans la newsletter'],
            [date("d/y", strtotime($date." -4 days")), $this->userRepository->getAllUserByMonth(date('m - 4'))['value'], $this->feedbackRepository->getAllFeedbackByMonth(date('m - 4'))['value'], $this->newsletterRepository->getAllNewsletterByMonth(date('m - 4'))['value']],
            [date("d/y", strtotime($date." -3 days")), $this->userRepository->getAllUserByMonth(date('m - 3'))['value'], $this->feedbackRepository->getAllFeedbackByMonth(date('m - 3'))['value'], $this->newsletterRepository->getAllNewsletterByMonth(date('m - 3'))['value']],
            [date("d/y", strtotime($date." -2 days")), $this->userRepository->getAllUserByMonth(date('m - 2'))['value'], $this->feedbackRepository->getAllFeedbackByMonth(date('m - 2'))['value'], $this->newsletterRepository->getAllNewsletterByMonth(date('m - 2'))['value']],
            [date("d/y", strtotime($date." -1 days")), $this->userRepository->getAllUserByMonth(date('m - 1'))['value'], $this->feedbackRepository->getAllFeedbackByMonth(date('m - 1'))['value'], $this->newsletterRepository->getAllNewsletterByMonth(date('m - 1'))['value']]
        ]);

        $chart->getOptions()->getChart()
            ->setTitle('Statistique du mois '. $date_mois_annee)
            ->setSubtitle("Actualisé le $date");
        $chart->getOptions()
            ->setBars('vertical')
            ->setHeight(300)
            ->setWidth(800)
            ->setColors(['#cde4f1', '#d2ede3', '#f7e4d1'])
            ->getVAxis()
            ->setFormat('decimal');

        return $chart;
    }
}