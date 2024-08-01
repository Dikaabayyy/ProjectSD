<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announ extends Model
{
    use HasFactory;
    protected $table = 'announs';

    protected $primaryKey = 'id';

    protected $fillable = ['name', 'img_name', 'desc', 'slug'];
}
