<?php

namespace App\Services;

use Session;

use App\Models\Category;
use App\Models\Item;

class ItemService
{
    public static function parentCategories($id = 0) {
        return Category::where('id' , '<>' ,$id)->get();
    }
}