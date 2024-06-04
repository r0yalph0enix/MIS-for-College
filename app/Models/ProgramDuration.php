<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramDuration extends Model
{
    use HasFactory;
    protected $table="program_duration_types";
    protected $fillable=["title","status","created_by"];

    public function programs()
    {
        return $this->hasMany(Program::class);
    }
    function createdBy(){
        return $this->belongsTo(User::class,'created_by','id');
    }
    function updatedBy(){
        return $this->belongsTo(User::class,'updated_by','id');
    }

}
