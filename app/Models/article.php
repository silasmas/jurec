<?php

namespace App\Models;

use App\Models\domaine;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class article extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $casts = ["couverture" => 'array',"images" => 'array',];

    public function domaine()
    {
        return $this->belongsTo(domaine::class);
    }
}
