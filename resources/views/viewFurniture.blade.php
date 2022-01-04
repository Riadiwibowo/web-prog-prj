@extends('layouts/main')
@section('container')
{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> --}}

<div class="text-center">
    <h3>View Furniture</h3>
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
                    <button class="btn-add">Add To Cart</button>
                </div>
            </div>
        </div>
    </div>
@endforeach   
@else
<td>No Product Founds</td>
@endif  
</div> 

@endsection