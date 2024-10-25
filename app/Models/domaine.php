<?php

namespace App\Models;

use App\Models\article;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class domaine extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function article()
    {
        return $this->hasMany(article::class);
    }
}
