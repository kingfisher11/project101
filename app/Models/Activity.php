<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;
    protected $fillable = [
        'staffno',
        'session',
        'desc',
        'activitydate',
        'hours',
    ];

    public function mentor()
    {
        return $this->belongsTo(Mentor::class, 'staffno');
        // note: we can also inlcude Mobile model like: 'App\Mobile'
    }

}
