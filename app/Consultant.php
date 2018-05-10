<?php

namespace Siac;

use Illuminate\Database\Eloquent\Model;

class Consultant extends Model
{
    protected $fillable = [
        'nameConsultant', 'positionConsultant', 'fonoConsultant', 'emailConsultant'
    ];
}
