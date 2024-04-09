<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;

class Coupon extends Model
{
    use HasFactory;
    protected $table = 'coupon';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = ['id' ,'name','start','end','limit','created_at','updated_at'];
}
