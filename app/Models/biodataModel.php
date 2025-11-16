<?php

namespace App\Models;

use CodeIgniter\Model;

class biodataModel extends Model
{
    protected $table = 'biodata';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'nama',
        'tempat_lahir',
        'tanggal_lahir',
        'email',
        'telepon',
        'alamat',
        'deskripsi'
    ];
}
