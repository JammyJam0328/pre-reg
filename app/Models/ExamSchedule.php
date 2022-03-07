<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamSchedule extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function application()
    {
        return $this->belongsTo(Application::class);
    }
    public function examinationFacility()
    {
        return $this->belongsTo(ExaminationFacility::class);
    }

    public function permit()
    {
        return $this->hasOne(Permit::class);
    }
}