<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    


    /**
     * Get the company that the employee belongs to
     */
    public function company()
    {
        return $this->belongsTo('App\Company');
    }
}
