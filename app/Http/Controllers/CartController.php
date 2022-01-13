<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use App\Models\view;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showcart($id){
        $cek_tr = Transaction::where('user_id', Auth::user()->id)->where('status','unpaid')->first();
        
        if(!empty($cek_tr)){
            $transaction_detail = TransactionDetail::where('transaction_id', $cek_tr->id)->get();
            return view('cart.index',[
                'transaction' => $cek_tr,
                'transactiondetail' => $transaction_detail,
            ]);
        }
    }

    public function store(Request $request, $id){
        $prod = Product::where('id', $id)->first();
        //UNTUK TRANSACTION
        //validasi apakah transaction tersebut sudah ada berdasarkan user_id, 
        //jika tidak maka dibuat transaksi dengan id yang baru, 
        //jika iya maka transaksi tetap sama (yang bertambah hanya transactiondetail)
        $cek = Transaction::where('user_id', Auth::user()->id)->where('status','unpaid')->first();
        if(empty($cek)){
            $transaction = new Transaction;
            $transaction->user_id = Auth::user()->id;
            $transaction->transactiondate = Carbon::today();
            $transaction->totalprice =0;
            $transaction->save();
        }
        //validasi untuk transaksi yang baru saja di save
        $new_transaction = Transaction::where('user_id', Auth::user()->id)->where('status','unpaid')->first();


        //UNTUK TRANSACTION DETAIL
        //validasi untuk penjumlahan transaction detail yang memiliki furniture_id yang sama 
        $new_transactiondetail = TransactionDetail::where('furniture_id', $prod->id)->where('transaction_id', $new_transaction->id)->first();
        if(empty($new_transactiondetail)){
            //validasi untuk mengecek apakah terdapat furniture_id yanng duplikat, jika tidak maka akan dibuat transaksi baru
            $transaction_detail =new TransactionDetail;
            $transaction_detail->transaction_id = $new_transaction->id;
            $transaction_detail->furniture_id = $prod->id;
            $transaction_detail->totalqty =+1;
            $transaction_detail->totalprice = $prod->price*$transaction_detail->totalqty;
            $transaction_detail->method = 0;
            $transaction_detail->card_number = 0;
            $transaction_detail->save();

        }else{
            //validasi apakah transaction detail memiliki furniture_id yang duplikat, jika iya maka total qty akan ditambah (hanya untuk menampilkan di cart)
            $transaction_detail = TransactionDetail::where('furniture_id', $prod->id)->where('transaction_id', $new_transaction->id)->first();
            $transaction_detail->totalqty = $transaction_detail->totalqty + 1;
            $new_transactiondetail_price = $prod->price * $transaction_detail->totalqty;
            $transaction_detail->totalprice =   $new_transactiondetail_price;
            $transaction_detail->update();
        }   

        //validasi untuk mengupdate totalprice pada table transaction berdasarkan user_id
        $transaction = Transaction::where('user_id', Auth::user()->id)->where('status','unpaid')->first();
        $transaction->totalprice = $transaction->totalprice + $prod->price  ;
        $transaction->update();

        return redirect()->back()->with('messages','item succesfully added');
    }

    public function storedecre(Request $request, $id){
        $prod = Product::where('id', $id)->first();
        //UNTUK TRANSACTION
        //validasi apakah transaction tersebut sudah ada berdasarkan user_id, 
        //jika tidak maka dibuat transaksi dengan id yang baru, 
        //jika iya maka transaksi tetap sama (yang bertambah hanya transactiondetail)
        $cek = Transaction::where('user_id', Auth::user()->id)->where('status','unpaid')->first();
        if(empty($cek)){
            $transaction = new Transaction;
            $transaction->user_id = Auth::user()->id;
            $transaction->transactiondate = Carbon::today();
            $transaction->totalprice =0;
            $transaction->save();
        }
        //validasi untuk transaksi yang baru saja di save
        $new_transaction = Transaction::where('user_id', Auth::user()->id)->where('status','unpaid')->first();


        //UNTUK TRANSACTION DETAIL
        //validasi untuk penjumlahan transaction detail yang memiliki furniture_id yang sama 
        $new_transactiondetail = TransactionDetail::where('furniture_id', $prod->id)->where('transaction_id', $new_transaction->id)->first();
        if(empty($new_transactiondetail)){
            //validasi untuk mengecek apakah terdapat furniture_id yanng duplikat, jika tidak maka akan dibuat transaksi baru
            return redirect()->back()->with('messages','No Item ');
        }else{
            //validasi apakah transaction detail memiliki furniture_id yang duplikat, jika iya maka total qty akan ditambah (hanya untuk menampilkan di cart)
            $transaction_detail = TransactionDetail::where('furniture_id', $prod->id)->where('transaction_id', $new_transaction->id)->first();
            $transaction_detail->totalqty = $transaction_detail->totalqty - 1;
            $new_transactiondetail_price = $prod->price * $transaction_detail->totalqty;
            $transaction_detail->totalprice =   $new_transactiondetail_price;
            $transaction_detail->update();
        }   

        //validasi untuk mengupdate totalprice pada table transaction berdasarkan user_id
        $transaction = Transaction::where('user_id', Auth::user()->id)->where('status','unpaid')->first();
        $transaction->totalprice = $transaction->totalprice -   $prod->price  ;
        $transaction->update();
        return redirect('cart/{id}')->with('messages','item succesfully added');
    }

}
