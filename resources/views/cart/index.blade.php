@extends('layouts.main')
@section('container')

<div class="text-center">
    <h3>Cart</h3>
</div>

<div class="row justify-content-center">
    <div class="col-md-10"style="width: 100%;">
        <div class="card " >
            <div class="row ">
                
                    
                    @foreach ($transactiondetail as $tr)
                    {{-- <div class="col-sm-4">
                        
                    </div> --}}
                    <div class="col-sm-20">
                        
                        <table class="table">               
                            <thead>                                
                                <tr>
                                    <td><img src={{Storage::url( $tr->product->path)}} alt="1" class="img-fluid"> </td>
                                    <td>Name : {{$tr->product->name }}</td>                                
                                    <td>Price : {{$tr->product->price}}</td> 
                                    <td>Quantity : <input type="quantity" class="form-control" id="quantity"  name="quantity" value="{{ $tr->totalqty }}"></td>
                                    <td>Total Price :{{$tr->totalprice}}</td>
                                    <form action="{{url('cartdecre')}}/{{$tr->product->id}}" method="POST">
                                    @csrf
                                    <td><button>-</button></td>
                                    </form>
                                    <form action="{{url('cart')}}/{{$tr->product->id}}" method="POST">
                                    @csrf
                                    <td><button>+</button></td>
                                    </form>
                                </tr>
                            </thead>
                        </table>
                    </div>
                    @endforeach
                   
                    <div class="text-center">
                        <h3>Total : Rp.{{$tr->transaction->totalprice}}</h3>
                    </div>
                    
                
                    
            </div>
            <div class="text-center">
                <button class="btn-add">Proceed To Checkout</button>
            </div>
               
        </div>
    </div> 
</div>

@endsection