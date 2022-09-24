<?php

namespace App\Models\hr;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Designation extends Model
{
    use HasFactory;
    protected $table = 'emp_designation';
    protected $primaryKey = 'designation_id';
    public $timestamps = false;

    // Relationship with Employee
    public function employee()
    {
        return $this->hasMany(Employee::class,'designation_id','designation_id');
    }
}
