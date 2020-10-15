<?php

namespace App\Services;

use CMEN\GoogleChartsBundle\GoogleCharts\Charts\PieChart;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\Timeline;
use DateTime;
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
        return (in_array($gitlab_project_id, ProjectId::PROJET_PERSONNEL_GIT_LAB_IDS) || in_array($gitlab_project_id, ProjectId::PROJET_FORMATION_GIT_LAB_IDS));
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

    public function getParcoursTimeline()
    {
        $timeline = new Timeline();
        $timeline->getData()->setArrayToDataTable(
            [
                [ 'Parcours', 'George Washington', new DateTime('1789-03-30'), new DateTime('1797-02-04') ],
                [ 'Parcours', 'John Adams', new DateTime('1797-02-04'), new DateTime('1801-02-04') ],
                [ 'Parcours', 'Thomas Jefferson', new DateTime('1801-02-04'), new DateTime('1809-02-04') ]
            ],
            true
        );
        $timeline->getOptions()->getTimeline()->setGroupByRowLabel(1);
        $timeline->getOptions()->getTimeline()->getRowLabelStyle()->setFontName('Helvetica');
        $timeline->getOptions()->getTimeline()->getRowLabelStyle()->setFontSize(24);
        $timeline->getOptions()->getTimeline()->getRowLabelStyle()->setColor('#222222');
        $timeline->getOptions()->getTimeline()->getBarLabelStyle()->setFontSize(14);
        $timeline->getOptions()->setColors(['#3498db', '#603913', '#c69c6e']);

        return $timeline;
    }
}