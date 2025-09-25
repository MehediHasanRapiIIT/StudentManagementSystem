<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class WeekModel extends Model
{
    protected $table = 'week';

    public static function getSingle($id){
        return SubjectClassModel::find($id);
    }

    public static function getRecord(){
        return self::get();
    }

}
