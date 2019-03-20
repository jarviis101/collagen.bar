<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PageContent extends Model
{
    protected $table = 'page_contents';
    protected $primaryKey = 'id';
    public $timestamp = true;
    protected $fillable = [
        'about_us', 'about_collagen', 'image_about_us', 'image_collagen'];
}
