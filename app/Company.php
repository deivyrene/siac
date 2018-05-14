<?php

namespace Siac;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'nameCompany', 'attendantCompany', 'addressCompany', 'fonoCompanyA', 'fonoCompanyB', 'fonoCompanyC', 'emailCompany'
    ];

    public function relationBusiness()
    {
        return $this->belongsTo('Siac\BusinessUser');
    }

    public function registerActivity()
    {
        return $this->hasMany('Siac\RegisterActivity');
    }
    
}
