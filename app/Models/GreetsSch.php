<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GreetsSch extends Model
{
    use HasFactory;

    protected $table = 'greets_schs';

    protected $primaryKey = 'id';

    protected $fillable = ['name', 'greets', 'slug'];
}
