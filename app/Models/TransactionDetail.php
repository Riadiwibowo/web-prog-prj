<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $table = "transactiondetail";
    protected $guarded = ['id'];
    public function product(){
        return $this->belongsTo(Product::class,'furniture_id','id');
    }

    public function transaction(){
        return $this->belongsTo(Transaction::class,'transaction_id','id');
    }
}
