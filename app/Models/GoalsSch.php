<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GoalsSch extends Model
{
    use HasFactory;

    protected $table = 'goals_schs';

    protected $primaryKey = 'id';

    protected $fillable = ['name', 'goals', 'slug'];
}
