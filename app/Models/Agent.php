<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    protected $table = 'agents';
    protected $primaryKey = 'Agent_ID';
    public $timestamps = false;

    public function scopeIsAdmin($query){
        return $query->where('role',2)->get()->count() > 0;
    }
}
