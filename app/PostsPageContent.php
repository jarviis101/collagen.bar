<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostsPageContent extends Model
{
    protected $table = 'posts_page_contents';
    protected $primaryKey = 'id';
    public $timestamp = true;
    protected $fillable = [
        'header_text' ];
}
