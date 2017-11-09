<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Comment;

class City extends Model
{
  public function companies()
  {
    return $this->belongsToMany(Company::class, 'company_city');
  }

  public function comments()
  {
    return $this->morphMany(Comment::class, 'commentable');
  }

}
