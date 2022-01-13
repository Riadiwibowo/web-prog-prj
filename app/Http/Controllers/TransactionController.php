<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\TransactionDetail;
use App\Models\view;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }



public function viewTransaction($id){
    $cek_tr = Transaction::where('user_id', Auth::user()->id)->where('status','paid')->first();
   
    if(!empty($cek_tr)){
        $transaction_detail = TransactionDetail::where('transaction_id', $cek_tr->id)->get();
        // $transaction = Transaction::where('user_id', Auth::user()->id)->where('status','paid')->get();
        return view('transactionview.index',[
            'transaction' => $cek_tr,
            'transactiondetail' => $transaction_detail,
        ]);
    }
    return view('transactionview.index',[
        'transaction' => $cek_tr,
    ]); 
}
}
