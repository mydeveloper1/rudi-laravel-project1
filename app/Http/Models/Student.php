<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
    	'student_id', 'first_name', 'last_name', 'class', 'gender', 'biography', 'birthday', 'school_id', 'father_id', 'mother_id', 'at_risk', 'active',
    ];

    public function scopeActive($query){
    	return $query->where('active', 1);
    }

    public function scopeOld($query){
    	return $query->where('active', 0);
    }
}
