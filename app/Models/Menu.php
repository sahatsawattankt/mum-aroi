<?php

namespace App\Models;

use App\Models\Category;
use App\Models\MenuImage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Menu extends Model
{
    use HasFactory;
    protected $fillable = [
        "name",
        "description",
        "price",
    ] ;

    public function menu_images() {
        return $this->hasMany(MenuImage::class);
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }

}
