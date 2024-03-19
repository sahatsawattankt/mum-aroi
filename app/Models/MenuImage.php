<?php

namespace App\Models;

use App\Models\Menu;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MenuImage extends Model
{
    use HasFactory;
    protected $fillable = [
        'menu_id',
        'image',
    ];

    function menu()
    {
        return $this->belongsTo(Menu::class);
    }
}
