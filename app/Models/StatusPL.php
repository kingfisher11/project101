<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusPL extends Model
{
    use HasFactory;
    protected $table = 'SMP_StatusPL';
    protected $primaryKey = 'StatusPL_Kod';
}
