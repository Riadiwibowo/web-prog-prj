@extends('layouts.main')
@section('container')

<div class="text-center">
    <h3>Transaction History</h3> 
</div>



<div class="row justify-content-center">
    <div class="col-md-5">
        @foreach ($transactiondetail as $tr)
        <div class="card ">
            <div class="card-body">  
                @if (Auth::user()->role == 'admin')

                @else
                <div class="col-mt-6">
                    <table>
                        <tbody>
                            <tr>
                                <td>Transaction ID</td>
                                <td>:</td>
                                <td>{{$tr->transaction_id}}</td>
                            </tr>
                            <tr>
                                <td>Transaction Date</td>
                                <td>:</td>
                                <td>{{$tr->transaction->transactiondate}}</td>
                            </tr>
                             <tr>
                                <td>Method </td>
                                <td>:</td>
                                <td>{{$tr->method}}</td>
                            </tr>
                            
                            <tr>
                                <td>Card Number</td>
                                <td>:</td>
                                <td>{{$tr->card_number}}</td>
                            </tr>
                            <tr>
                                <td>User's Name</td>
                                <td>:</td>
                                <td>{{$tr->transaction->User->name}}</td>
                            </tr>
                        </tbody>
                        
                    </table>
                </div>
                <div class="col-mt-6">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Furniture's Name</th>
                            <th scope="col">Furniture's Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Total Price For Each Furniture</th>
                          </tr>
                        </thead>
                    
                        <tbody>
                            <tr>
                                <th>{{$tr->Product->name}}</th>
                                <th>{{$tr->Product->price}}</th>
                                <th>{{$tr->totalqty}}</th>
                                <th>{{$tr->totalprice}}</th>
                            </tr>
                        </tbody>
                    </table>
                    
                </div>
                @endif
            </div>  
        </div>
    @endforeach 
    </div>
</div>

@endsection