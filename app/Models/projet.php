<?php

namespace App\Models;

use App\Models\categorie;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class projet extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $dates = ["created_at"];
    protected $casts = ["couverture" => 'array', "images" => 'array',];

    public function getFormattedCreated_atAttribute()
    {
        // dd($this);
        return $this->created_at ? Carbon::parse($this->created_at) : "silas"; // Convertit en Carbon si nécessaire
    }
    public function categorie()
    {
        return $this->belongsTo(categorie::class);
    }
}
