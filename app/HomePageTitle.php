<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HomePageTitle extends Model
{
    protected $table = 'home_page_titles';
    protected $primaryKey = 'id';
    public $timestamp = true;
    protected $fillable = [
        'title', 'image', 'link'];
}
