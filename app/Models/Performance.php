<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Performance extends Model
{
    use HasFactory;

    protected $table = 'performances';

    protected $primaryKey = 'id';

    protected $fillable = ['name', 'img_name', 'desc', 'level', 'location', 'performance_date', 'slug'];
}
