<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable=[
        'firstname',
        'lastname',
        'gender',
        'date_of_birth',
        'id_number',
        'email',
        'phone',
        'address',
        'subject',
        'photo',
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
