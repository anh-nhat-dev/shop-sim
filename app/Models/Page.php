<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use \App\Support\SeoTrait;

    public $zone = "page";

    protected $fillable = [
        'name', 'slug', 'content'
    ];

}
