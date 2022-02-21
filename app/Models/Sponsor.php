<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Club;

class Sponsor extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    public function clubs(){
        return $this->belongsToMany(Club::class);
    }
}
