<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
  use HasFactory;
 private $table = 'portfolio';
 private $primarykey = 'id';
  private $fillable = ['name', 'about'];
}
