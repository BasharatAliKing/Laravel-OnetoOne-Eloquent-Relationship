<?php

namespace App\Models;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;
    protected $guarded=[];
    public $timestamps=false;
    public function contact(){
        return $this->hasOne(Contact::class);
    }
}
