<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class Provisor extends Model
{
    use HasFactory;
    use SoftDeletes;

//    private static $provisor;
//
//    public function __construct(array $attributes = [])
//    {
//        parent::__construct($attributes);
//    }
//
//    public static function getProvisorInstance($params = null){
//        static::$provisor = Provisor::first();
//
//        if(is_null(static::$provisor)){
//            static::$provisor = new Provisor($params);
//            static::$provisor->save();
//        }
//
//        return static::$provisor;
//    }

    public static function create($data){
        $provisor = Provisor::first();

        if(is_null($provisor)){
            $provisor = new Provisor($data);
            $provisor->save();
        }

        return $provisor;
    }

    protected $fillable=[
        'firstname',
        'lastname',
        'gender',
        'date_of_birth',
        'email',
        'phone',
        'address',
        'photo',
    ];

    protected $appends=[
        'name'
    ];

    public function getNameAttribute(){
        return ucwords($this->firstname. " ".$this->lastname);
    }
}
