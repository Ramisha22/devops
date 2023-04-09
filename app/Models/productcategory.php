<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productcategory extends Model
{
    use HasFactory;
    protected $table = 'productcategory';
    protected $primaryKey = 'pid';
    protected $fillable = ['category','description'];
    public $timestamps = false;
}
