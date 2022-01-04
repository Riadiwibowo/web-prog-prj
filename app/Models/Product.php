<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $table = "furnitures";

    public function user(){
        return $this->hasMany(User::class);
    }
    public function transactiondetail(){
        return $this->hasMany(TransactionDetail::class);
    }
}
