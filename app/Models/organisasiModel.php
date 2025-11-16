<?php

namespace App\Models;

use CodeIgniter\Model;

class OrganisasiModel extends Model
{
    protected $table = 'organisasi';
    protected $allowedFields = [
        'biodata_id', 'posisi', 'organisasi', 'tahun', 'deskripsi'
    ];
}
