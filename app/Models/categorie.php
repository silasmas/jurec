<?php

namespace App\Models;

use App\Models\projet;
use App\Models\service;
use App\Models\thematique;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class categorie extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function projet()
    {
        return $this->hasMany(projet::class);
    }
    public function thematique()
    {
        return $this->hasMany(thematique::class);
    }
}
