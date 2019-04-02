<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HairCare extends Model
{
    protected $table = 'hair_cares';
    protected $primaryKey = 'id';
    public $timestamp = true;
    protected $fillable = [
        'name','type_of_care','image',
        'price','country','type_of_hair',
        'product_type', 'slug', 'description', 
        'presence_of','category_id', 'is_under_order', 
        'is_top_sales'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function hair_care()
    {
        return $this->hasMany(MediaProduct::class)
            ->orderBy('created_at', 'DESC');
    }
}