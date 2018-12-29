<?php 
namespace App\Support;

trait ImageTrait {

    public function image()
    {
        return $this->hasOne(\App\Models\Image::class, 'id_ref', 'id');
    }

    public function images()
    {
        return $this->hasMany(\App\Models\Image::class, 'id_ref', 'id');
    }

    public function getThumbnailAttribute()
    {
        if (is_callable(array($this, 'image'))) {
            if (!is_null($image = $this->image()->thumbnail()->zone($this->zone)->first())) {
                return $image->link;
            }
        }
        return $image;
    }

    public function getGalleryAttribute()
    {
        if (is_callable(array($this, 'images'))) {
            return $this->images()->gallery()->zone()->get();
        }
        return array();
    }
}