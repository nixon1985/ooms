<?php

namespace App\Models\hr;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    // protected $fillable = [
    //     'controller_name',
    //     'controller_description',
    //     'controller_public',
    // ];
    protected $table = 'emp_info';
    protected $primaryKey = 'emp_id';
    public $timestamps = false;

    // relationship with Designation
    public function designation()
    {
        return $this->belongsTo(Designation::class,'designation_id','designation_id');
    }

}
