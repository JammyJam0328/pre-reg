<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function portal()
    {
        return $this->belongsTo(Portal::class);
    }

    public function payment()
    {
        return $this->hasOne(Payment::class);
    }

    public function examSchedule()
    {
        return $this->hasOne(ExamSchedule::class);
    }
}