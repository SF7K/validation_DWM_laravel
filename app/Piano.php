<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Piano extends Model
{
    protected $fillable = ['brand', 'keys', 'height', 'width', 'depth', 'color'];
}
