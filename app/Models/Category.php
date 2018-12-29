<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use \App\Support\SeoTrait;

    public $zone = "category";

    protected $fillable = [
        'name', 'slug'
    ];

    public function sims()
    {
        return $this->hasMany(\App\Models\Sim::class, 'network_id', 'id');
    }
}
