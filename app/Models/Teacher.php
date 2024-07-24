<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $table = 'teachers';

    protected $primaryKey = 'id';

    public function teachers_data()
    {
        return $this->belongsTo(TeachersData::class, 'teachers_datas_id', 'id' );
    }
}
