<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $table = 'teachers';

    protected $primaryKey = 'id';

    protected $fillable = ['name', 'slug', 'gender', 'birth_place', 'birth_date', 'status', 'img_name', 'teachers_datas_id'];

    public function teachers_data()
    {
        return $this->belongsTo(TeachersData::class, 'teachers_datas_id', 'id' );
    }
}
