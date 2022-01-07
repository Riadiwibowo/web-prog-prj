@extends('layouts.main')
@section('container')
 
    <div class="text-center">
        <h3>Welcome {{ Auth::user()->name }},  to JH Furniture</h3>
    </div>

<div class="row justify-content-center">
    @if ($pr->count())
    @foreach($pr as $p)
        <div class="col-md-3">
            <div class="card text-white text-center bg-dark" style="width: 16rem;">
                <a href="{{url('viewDetail')}}/{{$p->id}}" >
                    <img src={{Storage::url( $p->path)}} alt="1" class="img-fluid"> 
                </a> 
                <div class="card-body ">
                    <h5 class="card-title"> {{ $p->name }} </h5>
                    <p class="card-text"> {{ $p->price }} </p>
                    <p class="card-text"> {{ $p->type }} </p>
                    @auth
                    {{-- bagian middleware button untuk pengunjung yang mempunyai role admin --}}
                    @if (Auth::user()->role=='1')
                    <div class="btn-admin">
                        <button class="btn-updt"><a href="{{ url('update', $p->id) }}">Update</a></button>
                        <button class="btn-dlt">Delete</button>
                    </div>
                    {{-- bagian middleware button untuk pengunjung member --}}
                    @else
                    <div class="btn-admin">
                        <button class="btn-add">Add To Cart</button>
                    </div>  
                    @endif
                    @endauth

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
