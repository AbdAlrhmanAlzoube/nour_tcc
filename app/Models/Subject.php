<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $fillable = [
        'subject_name',
        'teacher_id',
        'year',
        'department',
        'semester',
    ];

   public function teacher(){
    return $this->belongsTo(Teacher::class);
   }

   public function grades()
   {
    return $this->hasMany(Grades::class);
   }
   public function schedule()
   {
    return $this->hasMany(DailySchedule::class);
   }
}
