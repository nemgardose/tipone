<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'company_id',
        'first_name',
        'last_name',
        'email',
        'phone'
    ];
    
    /**
     * Get the company that the employee belongs to
     */
    public function company()
    {
        return $this->belongsTo('App\Company');
    }
}
