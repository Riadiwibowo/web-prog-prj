<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use App\Models\view;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showcart(){
        $cek_tr = Transaction::where('user_id', Auth::user()->id)->where('status','unpaid')->first();
        
        if(!empty($cek_tr)){
            $transaction_detail = TransactionDetail::where('transaction_id', $cek_tr->id)->get();
            return view('checkout.index',[
                'transaction' => $cek_tr,
                'transactiondetail' => $transaction_detail,
            ]);
        }
        return view('checkout.index',[
            'transaction' => $cek_tr,

        ]);
    }

    public function checkout(Request $request){
        $transaction = Transaction::where('user_id' , Auth::user()->id)->where('status', 'unpaid')->first();
        $trdetail = TransactionDetail::where('transaction_id', $transaction->id)->first();

        if(!empty($transaction)){
            $transaction->status = 'paid';
            $trdetail->method = $request->PaymentMethod;
            $trdetail->card_number = $request->CardNumber;
            $transaction->update();
            $trdetail->update();
            return redirect('home')->with('messages','Payment Succesfull, Have A Wonderful Day :)');
        }
        return view('checkout.index',[
            'transaction' => $transaction,
        ]);
        
    }

}
