<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    protected $table = 'footers';
    protected $primaryKey = 'id';
    public $timestamp = true;
    protected $fillable = [
        'content'];
}
