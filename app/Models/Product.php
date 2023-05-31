<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $fillable = ['pro_name','category_id','detail','image','status','created_at','updated_at'];

    public function category(){
        return $this->hasOne(Category::class, 'id', 'category_id');
    }
}