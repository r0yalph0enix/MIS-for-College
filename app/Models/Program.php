<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;
    protected $table="programs";
    protected $fillable=["title","short_title","status","created_by","program_duration_id","program_level_id"];
    public function programDuration()
    {
        return $this->belongsTo(ProgramDuration::class);
    }

    public function programLevel()
    {
        return $this->belongsTo(ProgramLevel::class);
    }
    function createdBy(){
        return $this->belongsTo(User::class,'created_by','id');
    }
    function updatedBy(){
        return $this->belongsTo(User::class,'updated_by','id');
    }
    public function programs()
    {
        return $this->hasMany(Program::class);
    }
}
