<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    public $timestamps = false;
    protected $table = 'product';
    protected $fillable = ['tenSP', 'donGia', 'gender', 'imageSP'];
    protected $primaryKey = 'maSP';
}
