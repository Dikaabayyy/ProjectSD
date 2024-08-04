<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeachersData extends Model
{
    use HasFactory;

    protected $table = 'teachers_datas';

    protected $primaryKey = 'id';

    protected $fillable =['slug', 'nip', 'nuptk', 'position', 'gol', 'ijazah', 'ijazah_date', 'subjects', 'start_up_teaching', 'start_working', 'certificate_status', 'certificate_year'];

    public function teachers()
    {
        return $this->hasOne(Teacher::class);
    }

}
