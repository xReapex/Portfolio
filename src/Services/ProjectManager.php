<?php

namespace App\Services;

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
}