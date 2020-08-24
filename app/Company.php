<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    
    /**
     * Get the employees for the company
     */
    public function employees()
    {
        return $this->hasMany('App\Employee');
    }
}
