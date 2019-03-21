<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Traits\Translatable;

class Category extends Model
{
    use Translatable;
    protected $translatable = ['slug', 'name'];
    protected $table = 'categories';
    protected $fillable = ['slug', 'name', 'image'];

    public function products()
    {
        return $this->hasMany(Product::class)
            ->orderBy('created_at', 'DESC');
    }
}
