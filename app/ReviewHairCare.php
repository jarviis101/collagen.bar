<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReviewHairCare extends Model
{
    protected $table = 'review_hair_cares';
    protected $primaryKey = 'id';
    public $timestamp = true;
    
    protected $fillable = [
        'from', 'email', 'comment', 'product'];
    
    public function hair_cares()
    {
        return $this->belongsTo(HairCare::class, 'slug');
    }
}
