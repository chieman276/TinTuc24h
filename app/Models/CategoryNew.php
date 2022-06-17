<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryNew extends Model
{
    use HasFactory;
    protected $table = 'category_news';

    public function CategoryNews(){
        return $this->belongsTo(Category::class,'category_new_id','id');
    }

    public function news(){
        return $this->hasMany(News::class);
    }
}
