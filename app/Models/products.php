<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use HasFactory;
    protected $table = 'product';
    protected $primaryKey = 'pid';
    protected $fillable = ['name','image','category','quantity','price'];
    public $timestamps = false;
}
