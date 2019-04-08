<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class СollagenСosmetic extends Model
{
    protected $table = 'collagen_cosmetics';
    protected $primaryKey = 'id';
    public $timestamp = true;
    protected $fillable = [
        'name', 'image',
        'price','country','slug', 
        'description', 'presence_of',
        'category_id', 'is_under_order', 'is_top_sales'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }  

    public function cosmetics_media()
    {
        return $this->hasMany(CosmeticMedia::class)
            ->orderBy('created_at', 'DESC');
    }

    public function review_cosmetic()
    {
        return $this->hasMany(ReviewCosmetic::class)
            ->orderBy('created_at', 'DESC');
    }


}
