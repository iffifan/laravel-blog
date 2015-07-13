<?php namespace DSampaolo\Blog\Models;

use \Illuminate\Database\Eloquent\Model as Eloquent;

class Category extends Eloquent {
    protected $table = 'dsampaolo_blog_categories';

    function getUrlAttribute() {
        return '/blog/c-'.$this->slug.'/';
    }
}
