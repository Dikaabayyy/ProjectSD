<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Extra extends Model
{
    use HasFactory;
    protected $table = 'extras';

    protected $primaryKey = 'id';

    protected $fillable = ['name', 'img', 'desc', 'slug'];
}
