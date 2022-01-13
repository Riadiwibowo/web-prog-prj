@extends('layouts.main')
@section('container')

<div class="text-center text-white">
    <h3>Cart</h3>
</div>

<div class="row justify-content-center mb-3">
    <div class="col-md-10"style="width: 100%;">
        @if (!empty($transaction))
        <div class="card " >
            <div class="row ">
                @foreach ($transactiondetail as $tr)
                    <div class="col-sm-15 ps-5 pe-5">
                        <table class="table">               
                            <thead>                                
                                <tr>
                                    <td class="width-75"><img src={{Storage::url( $tr->product->path)}} alt="1" class="img-fluid"> </td>
                                    <td>Name : {{$tr->product->name }}</td>                                
                                    <td>Price : {{$tr->product->price}}</td> 
                                    <td>Quantity : {{ $tr->totalqty }}</td>
                                    <td>Total Price :{{$tr->totalprice}}</td>
                                    {{-- form action untuk button decrement --}}
                                    <form action="{{url('cartdecre')}}/{{$tr->product->id}}" method="POST">
                                    @csrf
                                    <td><button>-</button></td>
                                    </form>
                                    {{-- form action untuk button increment --}}   
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
                    <h4>Total : Rp.{{$tr->transaction->totalprice}}</h4>
                </div> 
            </div>
            <div class="text-center mb-2">
                <button>
                    <a class="nav-link text-dark text-decoration-none" href="{{url('checkout')}}">Proceed to Checkout</a>
                </button> 
            </div>  
            @else
            <div class="text-center">
                <h3>There Are Currently No Product In your Cart</h3>
            </div>
            @endif
        </div> 
    </div> 
</div>

@endsection