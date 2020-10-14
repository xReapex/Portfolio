<?php

namespace App\Services;

use CMEN\GoogleChartsBundle\GoogleCharts\Charts\PieChart;
use phpDocumentor\Reflection\Types\Array_;
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

    private function getReadmeEmbed($gitlab_project_id)
    {
        $response = $this->http->request('GET', "https://gitlab.com/api/v4/projects/$gitlab_project_id")->toArray()['readme_url'];
        if ($response == null)
        {
            return '<a class="btn btn-primary disabled"><i class="fab fa-readme"></i> README.md</a>';
        }
        else{
            return '<a href="'.$response.'" class="btn btn-primary" target="_blank"><i class="fab fa-readme"></i> README.md</a>';
        }
    }

    public function getProject($gitlab_project_id)
    {
        $res = $this->http->request('GET', "https://gitlab.com/api/v4/projects/$gitlab_project_id")->toArray();
        $res['readme_url'] = $this->getReadmeEmbed($gitlab_project_id);
        return $res;
    }

    public function requestGitlab($gitlab_project_id)
    {
        return $this->http->request('GET', "https://gitlab.com/api/v4/projects/$gitlab_project_id")->toArray();
    }

    public function isIdExists($gitlab_project_id)
    {
        $formation = $this->idManager->getFormationProjectID();
        $perso = $this->idManager->getPersonnalProjectID();

        if (in_array($gitlab_project_id, $formation))
        {
            return true;
        }
        else{
            if (in_array($gitlab_project_id, $perso))
            {
                return true;
            }
            else{
                return false;
            }
        }
    }

    public function createChart($gitlab_id_project)
    {

        $languages = $this->getLanguages($gitlab_id_project);

        $table = [];
        array_push($table, [' ', ' ', ['role' => 'style']]);
        foreach ($languages as $pourcentage => $value){
            array_push($table, [$pourcentage, $value, "#222"]);
        }

        $pieChart = new PieChart();
        $pieChart->getData()->setArrayToDataTable($table);
        $pieChart->getOptions()->setHeight(375);
        $pieChart->getOptions()->setWidth(675);
        $pieChart->getOptions()->getBackgroundColor()->setFill("#222");
        $pieChart->getOptions()->setIs3D(true);
        $pieChart->getOptions()->getLegend()->setPosition('none');

        return $pieChart;
    }
}