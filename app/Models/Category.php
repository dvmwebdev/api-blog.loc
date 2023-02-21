<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;

class Category extends Model
{
  use HasFactory, NodeTrait;

  protected $table = 'categories';
  protected $guarded = [];

  protected $hidden = [
    'created_at', 'updated_at', '_lft', '_rgt'
  ];
}
