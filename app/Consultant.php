<?php

namespace Siac;

use Illuminate\Database\Eloquent\Model;

class Consultant extends Model
{
    protected $fillable = [
        'nameConsultant', 'positionConsultant', 'fonoConsultant', 'emailConsultant'
    ];

    public function registerActivity()
    {
        return $this->hasMany('Siac\RegisterActivity');
    }
}
