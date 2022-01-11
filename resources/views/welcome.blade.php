@extends('layouts/main')
@section('container')
<div class="text-center">
    <h3>Welcome to JH Furniture</h3>
</div>
<div class="row justify-content-center">
    @if ($pr->count())
    @foreach($pr as $p)
        <div class="col-md-3">
            <div class="card text-white text-center bg-dark" style="width: 16rem;">
                <a href="{{url('furnitures')}}/{{$p->id}}">
                    <img src={{Storage::url( $p->path)}} alt="1" class="img-fluid"> 
                </a>  
                <div class="card-body ">
                    <h5 class="card-title"> {{ $p->name }} </h5>
                    <p class="card-text"> {{ $p->price }} </p>
                    <div class="btn-admin">
                        <form action="{{ url('cart') }}/{{$p->id}}" method="Post" enctype="multipart/form-data" class="d-inline"> 
                            @csrf
                            <button class="btn-add">Add To Cart</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    @endforeach   
    @else
    <div class="text-center">
        <h1>No Product Founds</h1>
    </div>
    @endif    
</div>
@endsection