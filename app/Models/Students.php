<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;

    protected $table = 'students';

    protected $primaryKey = 'id';

    protected $fillable = ['slug', 'name', 'nis', 'nisn', 'gender', 'birth_place', 'birth_date', 'img_name', 'class', 'category'];
}
