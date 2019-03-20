<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contacts';
    protected $primaryKey = 'id';
    public $timestamp = true;
    protected $fillable = [
        'phone_link', 'inst_link', 'face_link', 'tg_link', 'youtube_link' ];
}
