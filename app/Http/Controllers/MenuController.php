<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Menu;
use App\Models\MenuImage;
use Inertia\Inertia;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::with('category')->get();
        $categories = Category::get();

        return Inertia::render(
            "Admin/Menu/Index",
            ["menus" => $menus,
             "categories" => $categories]);
    }

    public function store(Request $request)
    {
        $menu = new Menu;
        $menu->name = $request->name;
        $menu->category_id = $request->category_id;
        $menu->description = $request->description;
        $menu->price = $request->price;
        $menu->save();

        // Check if product has an image

        if ($request->hasFile("menu_images")) {
            $menuImages = $request->file("menu_images");
            foreach ($menuImages as $image) {
                // Generate a unique name for the image using timestamp and random string
                $uniqueName = time() . "-" . Str::random(10) . '.' . $image->getClientOriginalName();
                // store the image in the public folder with the unique name
                $image->move('menu_images', $uniqueName);
                // Create a new menu image record with the menu_id and unique name
                MenuImage::create([
                    'menu_id' => $menu->id,
                    'image' => 'menu_images/' . $uniqueName,
                ]);
            }
        }
        return redirect()->route('admin.menu.index')->with('success', 'Menu added successfully!');
    }
}
