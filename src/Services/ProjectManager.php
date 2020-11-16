<?php

namespace App\Services;

use CMEN\GoogleChartsBundle\GoogleCharts\Charts\PieChart;
use Symfony\Component\HttpClient\HttpClient;

class ProjectManager
{
    private $http;
    private $idManager;

    public function __construct(ProjectId $idManager)
    {
        $this->http = HttpClient::create();
        $this->idManager = $idManager;
    }

    public function getLanguages($gitlab_project_id)
    {
        return $this->http->request('GET', "https://gitlab.com/api/v4/projects/$gitlab_project_id/languages")->toArray();
    }

    private function getReadme($gitlab_project_id)
    {
        return $this->http->request('GET', "https://gitlab.com/api/v4/projects/$gitlab_project_id")->toArray()['readme_url'];
    }

    public function getProject($gitlab_project_id)
    {
        $res = $this->http->request('GET', "https://gitlab.com/api/v4/projects/$gitlab_project_id")->toArray();
        if (!$res['readme_url'])
        {
            $res['readme_url'] = '<a class="btn btn-primary disabled"><i class="fab fa-readme"></i> README.md</a>';
        }
        else{
            $res['readme_url'] = '<a href="'.$res['readme_url'].'" class="btn btn-primary" target="_blank"><i class="fab fa-readme"></i> README.md</a>';
        }
        return $res;
    }

    public function requestGitlab($gitlab_project_id)
    {
        return $this->http->request('GET', "https://gitlab.com/api/v4/projects/$gitlab_project_id")->toArray();
    }

    public function isIdExists($gitlab_project_id)
    {
        return (in_array($gitlab_project_id, ProjectId::PROJET_PERSONNEL_GIT_LAB_IDS) || in_array($gitlab_project_id, ProjectId::PROJET_FORMATION_GIT_LAB_IDS));
    }

    public function createChart($gitlab_id_project)
    {
        $languages = $this->getLanguages($gitlab_id_project);

        $table = [];
        array_push($table, [' ', ' ']);
        foreach ($languages as $pourcentage => $value){
            array_push($table, [$pourcentage, $value]);
        }

        $pieChart = new PieChart();
        $pieChart->getData()->setArrayToDataTable($table);
        $pieChart->getOptions()->setHeight(375);
        $pieChart->getOptions()->setWidth(675);
        $pieChart->getOptions()->getBackgroundColor()->setFill("#222");
        $pieChart->getOptions()->setIs3D(true);
        $pieChart->getOptions()->getLegend()->getTextStyle()->setColor("white");

        return $pieChart;
    }
}