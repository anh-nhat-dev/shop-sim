<?php

namespace App\Observers;

use Illuminate\Database\Eloquent\Model;

class Seobserver
{
    protected $data = [];

    protected $model;

    public function __construct()
    {
        $this->data = app('request')->only('title', 'description', 'keywork');
    }

    public function created(Model $model)
    {   
        $model->seo()->create(array_merge($this->data, ['zone' => $model->zone]));
    }

    public function saved(Model $model)
    {   

        $model->seo()
            ->zone($model->zone)
            ->update($this->data);
    }
}
