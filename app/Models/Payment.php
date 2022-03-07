<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function proofs()
    {
        return $this->hasMany(Proof::class);
    }

    public function application()
    {
        return $this->belongsTo(Application::class);
    }
     public function portal()
    {
        return $this->belongsTo(Portal::class);
    }
  
}