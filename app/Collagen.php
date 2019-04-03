<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Collagen extends Model
{
    protected $table = 'collagens';
    protected $primaryKey = 'id';
    public $timestamp = true;
    protected $fillable = [
        'name','type','image',
        'price','country','form_issue',
        'material', 'slug', 'description', 
        'presence_of','category_id', 'is_under_order', 
        'is_top_sales'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function media_products()
    {
        return $this->hasMany(MediaProduct::class)
            ->orderBy('created_at', 'DESC');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class)
            ->orderBy('created_at', 'DESC');
    }
}