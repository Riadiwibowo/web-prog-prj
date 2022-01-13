@extends('layouts.main')
@section('container')

<div class="text-center">
    <h3>memekk</h3>
</div>

<div class="row justify-content-center">
    <div class="col-md-5"style="width: 100%;">
        @if (!empty($transaction))
        <div class="card" >
                @foreach ($transactiondetail as $tr)
                    <table class="table">               
                        <thead>                                
                            <tr>
                                <td class="width-75"><img src={{Storage::url( $tr->product->path)}} alt="1" class="img-fluid"> </td>
                                <td>Name : {{$tr->product->name }}</td>                                
                                <td>Price : {{$tr->product->price}}</td> 
                                <td>Quantity : {{ $tr->totalqty }}</td>
                                <td>Total Price :{{$tr->totalprice}}</td>

                            </tr>
                        </thead>
                    </table>
                @endforeach          
                <div class="text-center">
                    <h6>Total : Rp.{{$tr->transaction->totalprice}}</h6>
                </div>
                <form action="{{url('checkout')}}/{{Auth::user()->id}}" method="POST">
                @csrf
                <div class="row justify-content-center">
                    <div class="col-md-5">
                        <div class="card-body">
                            
                                <div class="form-group">
                                    <label for="PaymentMethod">Payment Method</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="PaymentMethod" id="Credit" value="Credit">
                                        <label class="form-check-label" for="Credit">Credit</label>
                                    </div>
                                    
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="PaymentMethod" id="Debit" value="Debit">
                                        <label class="form-check-label" for="Debit">Debit</label>
                                    </div>
                                </div>
                                    

                                </h6>
                                <div class="form-group row">
                                    <label for="name" class="col-sm-2 col-form-label">Card Number</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" id="CardNumber" placeholder="Enter Card Number" name="CardNumber">
                                    </div>                                   
                                </div>
                            
                            
                        </div>
                    </div> 
                </div>
                
                <div class="text-center">
                    
                        <button class="btn-add"> Checkout</button>
                    
                </div>
            </form>
            
        </div>
        @else
        <div class="text-center">
            <h3>There Are Currently No Product In your Cart</h3>
        </div>
        @endif
    </div> 
</div>



@endsection