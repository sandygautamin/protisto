<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $fillable = [
        'first_name','user_id', 'last_name','email','address','address2','country','state','package_name','price','zip','status','payment_method','cardknox_token','next_due_date','profile_id','raw_data','created','updated',
    ];


    protected $table = 'orders';
    public $timestamps = false;
}