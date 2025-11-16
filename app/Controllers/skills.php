<?php

namespace App\Controllers;

use App\Models\SkillsModel;

class Skills extends BaseController
{
    public function index()
    {
        $model = new SkillsModel();

        $data['skills'] = $model->findAll();

        return view('cv/skills', $data);
    }
}
