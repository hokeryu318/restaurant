<?php

namespace App\Services;

use Session;

use App\Models\Category;

class CategoryService
{
    public static function parentCategories($id = 0) {
        return Category::where('id' , '<>' ,$id)->get();
    }
}