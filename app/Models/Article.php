<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;


    protected $table = 'article';
    protected $fillable = [
        'user_id',
        'image_path',
        'title',
        'body'
    ];


    protected $visible = [
        'user_id',
        'image_path',
        'title',
        'body'
    ];

}
