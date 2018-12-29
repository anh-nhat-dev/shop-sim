<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seo extends Model
{
    protected $fillable = ['title', 'keywork', 'description', 'id_ref', 'zone'];

    public function scopeZone($query, $zone = 'sim')
    {
        return $query->where('zone', $zone);
    }
}
