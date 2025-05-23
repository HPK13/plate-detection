<?php

namespace App\Models;

use CodeIgniter\Model;

class VisitorModel extends Model
{
    protected $table = 'visitors';
    protected $primaryKey = 'id';

    protected $allowedFields = ['name', 'license_plate', 'contact', 'purpose', 'registered_at'];
}
