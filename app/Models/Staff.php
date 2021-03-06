<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'SMP_Staf';
    protected $fillable =['NoStaf','Nama','NoKP', 'Jawatan', 'Jabatan', 'Email', 'Status', 'CawKod'];
    protected $primaryKey = 'NoStaf';
    public $incrementing = false;

    public function mentor()
    {
        return $this->belongsTo(Mentor::class, 'NoStaf');
        // note: we can also inlcude Mobile model like: 'App\Mobile'
    }

    public function designation()
    {
        return $this->belongsTo(Designation::class, 'Jawatan');
        // note: we can also inlcude Mobile model like: 'App\Mobile'
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'NoStaf');
        // note: we can also inlcude Mobile model like: 'App\Mobile'
    }

}
