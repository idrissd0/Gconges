<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fpagents extends Model
{
    use HasFactory;
    protected $primaryKey="matricule";
    public $table = 'fpagents';
}
