<?php

namespace App\Controllers;

use App\Models\OrganisasiModel;

class Organisasi extends BaseController
{
    public function index()
    {
        $model = new OrganisasiModel();

        $data['organisasi'] = $model->findAll();

        return view('cv/organisasi', $data);
    }
}
