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
        return $this->belongsTo('Siac\Company', 'company_id');
    }

    public function activities()
    {
        return $this->belongsTo('Siac\Activity', 'activity_id');
    }

    public function consultants()
    {
        return $this->belongsTo('Siac\Consultant', 'consultant_id');
    }

    public function businessuser()
    {
        return $this->belongsTo('Siac\BusinessUser', 'businessuser_id');
    }


}
