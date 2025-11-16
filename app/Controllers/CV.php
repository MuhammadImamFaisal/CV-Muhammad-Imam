<?php

namespace App\Controllers;

use App\Models\biodataModel;
use App\Models\PendidikanModel;
use App\Models\PengalamanModel;
use App\Models\OrganisasiModel;
use App\Models\SkillsModel;
use App\Models\PortofolioModel;

class CV extends BaseController
{
    public function index()
    {
        $biodataModel     = new BiodataModel();
        $pendidikanModel  = new PendidikanModel();
        $pengalamanModel  = new PengalamanModel();
        $organisasiModel  = new OrganisasiModel();
        $skillsModel      = new SkillsModel();
        $portofolioModel  = new PortofolioModel();

        // Ambil data utama
        $biodata = $biodataModel->first();

        // Ambil data relasi berdasarkan biodata_id
        $pendidikan = $pendidikanModel->where('biodata_id', $biodata['id'])->findAll();
        $pengalaman = $pengalamanModel->where('biodata_id', $biodata['id'])->findAll();
        $organisasi = $organisasiModel->where('biodata_id', $biodata['id'])->findAll();
        $skills     = $skillsModel->where('biodata_id', $biodata['id'])->findAll();

        // Portofolio
        $portofolio = $portofolioModel->findAll();

        // Data ke view
        $data = [
            'title'       => 'Home — Curriculum Vitae Muhammad Imam Faisal',
            'biodata'     => $biodata,
            'pendidikan'  => $pendidikan,
            'pengalaman'  => $pengalaman,
            'organisasi'  => $organisasi,
            'skills'      => $skills,
            'portofolio'  => $portofolio
        ];

        return view('cv/layout/header')
            . view('cv/home', $data)
            . view('cv/layout/footer');
    }
}
