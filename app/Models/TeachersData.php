<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeachersData extends Model
{
    use HasFactory;

    protected $table = 'teachers_datas';

    protected $primaryKey = 'id';

    public function teachers()
    {
        return $this->hasOne(Teacher::class);
    }
}
