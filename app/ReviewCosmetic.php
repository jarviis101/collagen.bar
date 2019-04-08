<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReviewCosmetic extends Model
{
    protected $table = 'review_cosmetics';
    protected $primaryKey = 'id';
    public $timestamp = true;
    
    protected $fillable = [
        'from', 'email', 'comment', 'product'];
    
    public function collagen_cosmetics()
    {
        return $this->belongsTo(СollagenСosmetic::class, 'slug');
    }
}
