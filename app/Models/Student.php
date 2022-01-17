<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstname',
        'lastname',
        'gender',
        'date_of_birth',
        'email',
        'phone',
        'address',
        'classe_id',
    ];

    protected $appends=[
        'name'
    ];

    public function classe(){
        return $this->belongsTo(Classe::class);
    }

    public function getNameAttribute(){
        return ucwords($this->firstname. " ".$this->lastname);
    }
}
