<?php

namespace App\Models;

use App\Models\Student;
use Carbon\Traits\Timestamp;
use Illuminate\Database\Eloquent\Concerns\HasTimestamps;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mark extends Model
{
    use HasFactory,HasTimestamps;

    public $timestamps = true;

    protected $fillable = [
        'name','maths','science','history','term','total_marks'
    ];

    public function studentNames()
    {
        return $this->belongsTo(Student::class,'name');
    }

}
