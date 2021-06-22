<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Designation extends Model
{
    use HasFactory;
    protected $table = 'SMP_Jawatan';
    protected $primaryKey = 'JwtKod';

    public function staff()
    {
        return $this->hasOne(Staff::class, 'JwtKod');
        // note: we can also inlcude Mobile model like: 'App\Mobile'
    }
}
