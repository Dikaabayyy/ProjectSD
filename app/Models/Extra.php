<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Extra extends Model
{
    use HasFactory;
    protected $table = 'extras';

    protected $primaryKey = 'id';

    protected $fillable = ['name', 'img_name', 'desc', 'slug'];

}
