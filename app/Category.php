<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public static function getSlug($text) {
        $slugBase = Str::slug($text);
        $slug = $slugBase;
        $i = 1;
        while(Category::where('slag', $slug)->first()){
            $slug = $slugBase . '-' . $i;
            $i++;
        }
        return $slug;
    }
}
