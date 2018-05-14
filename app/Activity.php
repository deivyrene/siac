<?php

namespace Siac;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $fillable = [
        'nameActivity', 'shortActivity',
    ];

    public function registerActivity()
    {
        return $this->hasMany('Siac\RegisterActivity');
    }
}
