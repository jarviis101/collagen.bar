<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostsPageImage extends Model
{
    protected $table = 'posts_page_images';
    protected $primaryKey = 'id';
    public $timestamp = true;
    protected $fillable = [
        'image_1', 'image_2', 'image_3' ];
}
