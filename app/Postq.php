<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Postq extends Model
{
    protected $table = 'postqs';
    protected $primaryKey = 'id';
    public $timestamp = true;
    protected $fillable = [
        'slug', 'title', 'image', 'content'];
}
