<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $table = "teachers";

    protected $fillable = ['name','middlename','lastname','email','phone','mobile','qualification','teaching_experience','gender','subject_of_expertise','created_by','updated_by'];

    function createdBy()
    {
        return $this->belongsTo(User::class,'created_by','id');
    }

    function updatedBy()
    {
        return $this->belongsTo(User::class,'updated_by','id');
    }
}
