<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestCenter extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'address'];

    public function examinationTestCenters()
    {
        return $this->hasMany(ExaminationTestCenter::class);
    }
}