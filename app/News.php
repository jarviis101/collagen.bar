<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Facades\Voyager;

class News extends Model
{
    protected $table = 'news';
    protected $primaryKey = 'id';
    public $timestamp = true;
    protected $fillable = [
        'slug', 'title', 'image', 'content'];
}
