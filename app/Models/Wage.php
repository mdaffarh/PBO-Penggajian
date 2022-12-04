<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wage extends Model
{
    use HasFactory;
    protected $guarded = ['id']; 
    protected $with = ['employee'];

    public function employee()
    {
        $this->belongsTo(Employee::class);
    }
}