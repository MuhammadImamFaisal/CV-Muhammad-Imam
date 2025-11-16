<?php

namespace App\Models;

use CodeIgniter\Model;

class SkillsModel extends Model
{
    protected $table = 'skills';
    protected $allowedFields = [
        'biodata_id', 'skill'
    ];
}
