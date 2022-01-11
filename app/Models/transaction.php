<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $table = "transaction";
    protected $guarded = ['id'];

    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function transactiondetail(){
        return $this->hasMany(TransactionDetail::class,'transaction_id','id');
    }
}
