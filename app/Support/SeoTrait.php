<?php
namespace App\Support;

trait SeoTrait {
    public function seo()
    {
        return $this->hasOne(\App\Models\Seo::class, 'id_ref');
    }

    public function getSeocontentAttribute()
    {
        if (!is_null($this->seo)) {
            return $this->seo()->zone($this->zone)->first() ?? new \App\Models\Seo();
        }
        return new \App\Models\Seo();
    }
}
