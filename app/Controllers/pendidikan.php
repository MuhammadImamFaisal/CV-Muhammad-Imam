<?php

namespace App\Controllers;

use App\Models\PendidikanModel;

class Pendidikan extends BaseController
{
    public function index()
    {
        $model = new PendidikanModel();

        $data['pendidikan'] = $model->findAll();

        return view('cv/pendidikan', $data);
    }
}
