<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use illuminate\Support\Str;

class Post extends Model
{

    protected $fillable = ['title', 'content', 'slug'];

    public static function generateSlug($title){

        $slug = Str::slug($title);
        $slug_base = $slug;

        $post_presente = Post::where('slug', $slug)->first();

        $c = 1;
        while($post_presente){
            $slug = $slug_base . '-' . $c;
            $c++;
            $post_presente = Post::where('slug', $slug)->first();
        }

        return $slug;

    }
}
