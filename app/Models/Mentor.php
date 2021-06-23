<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mentor extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'RKD_Mentor';
    protected $fillable =['NoStaf','Keaktifan','Kuota'];
    protected $primaryKey = 'NoStaf';
    public $incrementing = false;

    public function staff()
    {
        return $this->hasOne(Staff::class, 'NoStaf');
        // note: we can also inlcude Mobile model like: 'App\Mobile'
    }
// relation with table mentee
    public function mentorPL()
    {
        return $this->hasMany(MentorPL::class, 'NoStaf');
        // note: we can also inlcude Mobile model like: 'App\Mobile'
    }

    public function activities()
    {
        return $this->belongsTo(Activity::class, 'NoStaf');
        // note: we can also inlcude Mobile model like: 'App\Mobile'
    }


}
