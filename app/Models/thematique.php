<?php

namespace App\Models;

use App\Models\categorie;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class thematique extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $casts = ["couverture" => 'array',"images" => 'array',];

    public function categorie()
    {
        return $this->belongsTo(categorie::class);
    }
}
