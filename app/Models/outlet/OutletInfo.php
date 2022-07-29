<?php

namespace App\Models\outlet;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OutletInfo extends Model
{
    use HasFactory;
    protected $table="outlet_info";
    protected $primaryKey = 'outlet_id';

}
