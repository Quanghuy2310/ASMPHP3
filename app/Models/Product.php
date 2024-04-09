<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;


class Product extends Model
{
    use HasFactory;
    protected $table = 'product';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = ['id' ,'name',  'image', 'price','description','category_id','created_at','updated_at'];

    public function category(){
        return $this->belongsTo(Category::class);
    }
}

