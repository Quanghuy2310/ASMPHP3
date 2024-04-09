<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;
    protected $table = 'banner';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = ['id' ,'image','created_at','updated_at'];
}
