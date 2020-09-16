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

    public function getLanguage($gitlab_project_id)
    {
        $languages = $this->http->request('GET', "https://gitlab.com/api/v4/projects/$gitlab_project_id/languages")->toArray();
        $res = [];
        $i = 0;
        dump($languages);

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
            }
            $i++;
        }
        return $res;

    }
}