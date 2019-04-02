<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MediaProduct extends Model
{
    protected $table = 'media_products';
    protected $primaryKey = 'id';
    public $timestamp = true;
    protected $fillable = [
        'product','image_1','image_2',
        'image_3','image_4'];
    
    public function collagens()
    {
        return $this->belongsTo(Collagen::class, 'id');
    }
}