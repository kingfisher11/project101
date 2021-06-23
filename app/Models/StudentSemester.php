<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentSemester extends Model
{
    use HasFactory;
    protected $table = 'KRS_ThnSemPL';
    protected $fillable =['RKD01_Nomatrik', 'KodSesi_Sem', 'Semester', 'StatusAkademik', 'StatusPelajar', 'StatusDaftarMP', 'StatusNaikSem', 'StatusAsrama', 'StatusHutang', 'StatusBlock', 'StatusKira', 'Catatan', 'StatusPL_Kod'];        
    protected $primaryKey = 'RKD01_Nomatrik';

    public function session()
    {
        return $this->hasMany(Session::class, 'KodSesi_Sem');
        // note: we can also inlcude Mobile model like: 'App\Mobile'
    }

    public function statusPL()
    {
        return $this->hasMany(StatusPL::class, 'StatusPelajar');
        // note: we can also inlcude Mobile model like: 'App\Mobile'
    }

    public function student()
    {
        return $this->belongsTo(Student::class, 'KodSesi_Sem');
        // note: we can also inlcude Mobile model like: 'App\Mobile'
    }
    
}
