<?php

namespace Siac;

use Illuminate\Database\Eloquent\Model;

class RegisterActivity extends Model
{
    protected $fillable = [
        'companies_id', 'activities_id', 'consultants_id', 'businessuser_id', 'desRegisterActivity', 'dateRegisterActivity', 'dateRegisterActivities'
    ];

    public function companies()
    {
        return $this->belongsTo('Siac\Company');
    }

    public function activities()
    {
        return $this->belongsTo('Siac\Activity');
    }

    public function consultants()
    {
        return $this->belongsTo('Siac\Consultant');
    }

    public function businessuser()
    {
        return $this->belongsTo('Siac\BusinessUser');
    }


}
