<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExaminationFacility extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function schedule()
    {
        return $this->belongsTo(Schedule::class);
    }
    public function facility()
    {
        return $this->belongsTo(Facility::class);
    }
}