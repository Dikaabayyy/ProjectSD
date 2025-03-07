<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    use HasFactory;

    protected $table = 'agendas';

    protected $primaryKey = 'id';

    protected $fillable = ['name', 'location',  'agenda_start', 'agenda_end', 'desc', 'slug'];
}
