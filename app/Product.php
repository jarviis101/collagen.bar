<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'id';
    public $timestamp = true;
    protected $fillable = [
        'name','type','image','price','country','form_issue','material', 'slug', 'description', 'presence_of'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
