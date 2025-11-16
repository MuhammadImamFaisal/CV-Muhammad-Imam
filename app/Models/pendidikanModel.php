<?php

namespace App\Models;

use CodeIgniter\Model;

class PendidikanModel extends Model
{
    protected $table = 'pendidikan';
    protected $allowedFields = [
        'biodata_id', 'jenjang', 'institusi', 'tahun_mulai', 'tahun_selesai'
    ];
}
