<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Sponsor;

class Club extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    public function sponsors(){
        return $this->belongsToMany(Sponsor::class);
    }
}
