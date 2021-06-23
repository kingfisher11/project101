<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $fillable = [
        'staffno',
        'session',
        'desc',
        'activitydate',
        'hours',
    ];

    public function mentor()
    {
        return $this->hasMany(Mentor::class, 'NoStaf');
        // note: we can also inlcude Mobile model like: 'App\Mobile'
    }

}
