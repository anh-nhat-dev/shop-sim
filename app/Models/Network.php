<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Network extends Model
{
    use \App\Support\ImageTrait,
    \App\Support\SeoTrait;

    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'slug'
    ];

    public $zone = "network";

    public function sims()
    {
        return $this->hasMany(\App\Models\Sim::class, 'network_id', 'id');
    }
}
