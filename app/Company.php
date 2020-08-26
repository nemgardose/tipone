<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'name',
        'email',
        'logo',
        'website',
    ];
    
    /**
     * Get the employees for the company
     */
    public function employees()
    {
        return $this->hasMany('App\Employee');
    }
}
