<?php

namespace Siac;

use Illuminate\Database\Eloquent\Model;

class BusinessUser extends Model
{
    // protected $table = 'companies';

    protected $fillable = [
        'nameBusinessUser', 'fonoBusinessUser', 'emailBusinessUser', 'idCompanies'
    ];

    
    public function companies()
    {
        return $this->belongsTo('Siac\Company', 'idCompanies');
    }

    public function registerActivity()
    {
        return $this->hasMany('Siac\RegisterActivity');
    }
}
