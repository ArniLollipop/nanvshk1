<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Review extends Model
{
    protected $fillable = ['news_id', 'name', 'comment'];

   
}