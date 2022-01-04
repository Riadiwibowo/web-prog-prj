@extends('layouts.main')
@section('container')
<div class="text-center">
    <h3>{{$product->name}}</h3>
</div>

<div class="row justify-content-center">
    
        <div class="card-body ">
            <div class="col-md-6"> 
            <h5 class="card-title"> {{ $product->name }} </h5>
            <p class="card-text"> {{ $product->price }} </p>
        </div>
    </div>
</div>
@endsection