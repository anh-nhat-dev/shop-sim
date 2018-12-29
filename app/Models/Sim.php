<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Sim extends Model
{
    use \App\Support\SeoTrait,
        \App\Support\ImageTrait;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $zone = "sim";
    
    protected $fillable = [
        'name', 'slug', 'number', 'category_id', 'network_id', 'status', 'price'
    ];

    public function network()
    {
        return $this->belongsTo(\App\Models\Network::class, 'network_id');
    }

    public function category()
    {
        return $this->belongsTo(\App\Models\Category::class, 'category_id');
    }

    public function scopePublic($query)
    {
        $query->where('status', 'selling');
    }

}
