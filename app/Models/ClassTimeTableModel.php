<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClassTimeTableModel extends Model
{
    protected $table = 'class_timetable';

    public static function getSingle($id){
        return ClassTimeTableModel::find($id);
    }

    public static function DeleteRecord($class_id, $subject_id){
        ClassTimeTableModel::where('class_id',"=",$class_id)->where('subject_id',"=",$subject_id)->delete();
    }

    public static function getRecord($class_id, $subject_id, $week_id){
        return ClassTimeTableModel::where('class_id',"=",$class_id)->where('subject_id',"=",$subject_id)->where('week_id',"=",$week_id)->first();
    }
}
