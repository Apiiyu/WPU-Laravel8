<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  use HasFactory;
  
  # <-- fillable berfungsi untuk menunjukan field mana aja yang boleh diisi'
  protected $fillable = [
    'title',
    'slug',
    'excerpt',
    'body'
  ];

  # <-- guarded berfungsi untuk menunjukan field mana yang tidak boleh diisi. Kebalikan dari fillable
  // protected $guarded = ['id'];
}
