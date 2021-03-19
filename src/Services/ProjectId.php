<?php

namespace App\Services;

final class ProjectId
{

    public const  PROJET_FORMATION_GIT_LAB_IDS = [19105266, 19108592, 19676897, 17026977, 19872619];
    public const  PROJET_PERSONNEL_GIT_LAB_IDS = [16447594, 20142148, 20577993, 20694394, 23722832];

    public function getFormationProjectID()
    {
        return self::PROJET_FORMATION_GIT_LAB_IDS;

    }

    public function getPersonnalProjectID()
    {
        return self::PROJET_PERSONNEL_GIT_LAB_IDS;
    }
}