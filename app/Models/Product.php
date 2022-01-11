<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $table = "furnitures";
    protected $guarded = ['id'];

    public function user(){
        return $this->hasMany(User::class,'user_id','id');
    }
    public function transactiondetail(){
        return $this->hasMany(TransactionDetail::class,'furniture_id','id');
    }
    protected $fillable = ['name','price','type','color'];  
}
