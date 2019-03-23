<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostsPageLink extends Model
{
    protected $table = 'posts_page_links';
    protected $primaryKey = 'id';
    public $timestamp = true;
    protected $fillable = [
        'title_info', 'link_info', 'title_youtube', 'link_youtube','title_question', 'link_question' ];
}
