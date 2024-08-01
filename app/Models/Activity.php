<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $table = 'activitys';

    protected $primaryKey = 'id';

    protected $fillable = ['name', 'img_name', 'desc', 'slug'];
}
