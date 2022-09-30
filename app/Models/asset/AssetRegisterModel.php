<?php

namespace App\Models\asset;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssetRegisterModel extends Model
{
    use HasFactory;
    protected $table="assets_register";
    protected $primaryKey = 'asset_reg_id';

}
