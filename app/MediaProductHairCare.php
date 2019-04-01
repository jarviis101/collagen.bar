<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MediaProductHairCare extends Model
{
    protected $table = 'hair_cares_media';
    protected $primaryKey = 'id';
    public $timestamp = true;
    protected $fillable = [
        'product','image_1','image_2',
        'image_3','image_4'];
        
    public function hair_cares()
    {
        return $this->belongsTo(HairCare::class, 'product_id');
    }
}
