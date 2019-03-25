<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Facades\Voyager;

class Category extends Model
{
    protected $table = 'categories';
    protected $primaryKey = 'id';
    public $timestamp = true;
    protected $fillable = ['slug', 'name', 'image'];

    public function products()
    {
        return $this->hasMany(Product::class)
            ->orderBy('created_at', 'DESC');
    }
}
