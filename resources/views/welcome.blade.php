@extends('layouts/main')
@section('container')
<div class="text-center">
    <h3>Welcome to JH Furniture</h3>
</div>
<div class="row justify-content-center" >
@if ($pr->count())
@foreach($pr as $p)
    <div class="col-md-3">
        <div class="card text-white text-center bg-dark" style="width: 18rem;">
            <img src={{url('/assets/drake.jpg')}} alt="1" class="card-img-fluid">
            <div class="card-body ">
                <h5 class="card-title"> {{ $p->name }} </h5>
                <p class="card-text"> {{ $p->price }} </p>
                <div class="btn-admin">
                    <button class="btn-updt">Update</button>
                    <button class="btn-dlt">Delete</button>
                </div>
            </div>
        </div>
    </div>
    
@endforeach   
@else
<td>No Product Founds</td>
@endif  
    </div> 
</div>
@endsection