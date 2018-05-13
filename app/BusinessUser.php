<?php

namespace Siac;

use Illuminate\Database\Eloquent\Model;

class BusinessUser extends Model
{
    protected $fillable = [
        'nameBusinessUser', 'fonoBusinessUser', 'emailBusinessUser', 'idCompanies'
    ];

    
    // public function relationCompany()
    // {
    //     return $this->hasMany('Siac\Company', 'id', 'idCompanies');

    // }
    public function relationCompany()
    {
        return $this->belongsTo('Siac\Company', 'idCompanies');
    }
}
