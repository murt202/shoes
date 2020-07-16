<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class Order extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tb_order';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['uid'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

}
