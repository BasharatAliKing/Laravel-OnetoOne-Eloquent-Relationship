<?php

namespace App\Models;

use App\Models\Student;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contact extends Model
{
    use HasFactory;
    // inverse Relationship
    protected $guarded=[];
    public $timestamps=false;
    public function student(){
        return $this->belongsTo(Student::class);
    }
}
