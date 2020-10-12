<?php

namespace App\Services;

use Symfony\Component\HttpClient\HttpClient;

class ProjectManager
{
    private $http;

    public function __construct()
    {
        $this->http = HttpClient::create();
    }

    private function getLanguages($gitlab_project_id)
    {
        $languages = $this->http->request('GET', "https://gitlab.com/api/v4/projects/$gitlab_project_id/languages")->toArray();
        $res = [];
        $i = 0;

        foreach ($languages as $language => $pourcentage)
        {
            switch (strtolower($language))
            {
                case 'html':
                    $res[$i] = '<span class="badge badge-pill badge-danger"><i class="fab fa-html5"></i> ' .$pourcentage. '%</span>';
                    break;

                case 'php':
                    $res[$i] = '<span class="badge badge-pill badge-primary"><i class="fab fa-php"></i> ' .$pourcentage. '%</span>';
                    break;

                case 'css':
                    $res[$i] = '<span class="badge badge-pill badge-info"><i class="fab fa-css3-alt"></i> ' .$pourcentage. '%</span>';
                    break;

                case 'javascript':
                    $res[$i] = '<span class="badge badge-pill badge-warning"><i class="fab fa-js-square"></i> ' .$pourcentage. '%</span>';
                    break;

                case 'python':
                    $res[$i] = '<span class="badge badge-pill badge-primary"><i class="fab fa-python"></i> ' .$pourcentage. '%</span>';
                    break;

                case 'tsql':
                    $res[$i] = '<span class="badge badge-pill badge-light"><i class="fas fa-database"></i> ' .$pourcentage. '%</span>';
                    break;

                case 'java':
                    $res[$i] = '<span class="badge badge-pill badge-success"><i class="fab fa-java"></i> ' .$pourcentage. '%</span>';
                    break;
            }
            $i++;
        }
        return $res;

    }
    private function getReadme($gitlab_project_id)
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

    public function requestGitlab($gitlab_project_id)
    {
        $res = $this->http->request('GET', "https://gitlab.com/api/v4/projects/$gitlab_project_id")->toArray();
        $res['readme_url'] = $this->getReadme($gitlab_project_id);
        $res['languages'] = $this->getLanguages($gitlab_project_id);
        return $res;
    }
}