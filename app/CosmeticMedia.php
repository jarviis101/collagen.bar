<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CosmeticMedia extends Model
{
    protected $table = 'cosmetic_media';
    protected $primaryKey = 'id';
    public $timestamp = true;
    protected $fillable = [
        'product','image_1','image_2',
        'image_3','image_4'];
        
    public function collagen_cosmetics()
    {
        return $this->belongsTo(СollagenСosmetic::class, 'id');
    }
}
