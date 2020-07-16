<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "tb_product";

    protected $fillable = ['name','description','price','image','type'];

}