<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutSch extends Model
{
    use HasFactory;

    protected $table = 'about_schs';

    protected $primaryKey = 'id';

    protected $fillable = ['name', 'about', 'slug'];
}
