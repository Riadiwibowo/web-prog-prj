@extends('layouts.main')
@section('container')
 
<div class="text-center text-white mb-4">
    <h3>Welcome, {{ Auth::user()->name }}</h3>
    <h3>to JH Furniture</h3>
</div>

<div class="row justify-content-center">
    @if ($pr->count())
    @foreach($pr as $p)
        <div class="col-md-3">
            <div class="card text-white text-center bg-dark" style="width: 16rem;">
                <a href="{{url('furnitures')}}/{{$p->id}}" >
                    <img src="{{Storage::url( $p->path)}}" alt="1" class="img-fluid"> 
                </a> 
                <div class="card-body ">
                    <h5 class="card-title"> {{ $p->name }} </h5>
                    <p class="card-text"> {{ $p->price }} </p>
                    @auth
                    {{-- bagian middleware button untuk pengunjung yang mempunyai role admin --}}
                    @if (Auth::user()->role=='admin')                                                  
                    <div class="btn-admin">
                        <button class="btn-updt"><a class="text-dark text-decoration-none" href="{{ url('update', $p->id) }}">Update</a></button>
                        <form action="{{ url('delete', $p->id) }}" method="POST" enctype="multipart/form-data" class="d-inline"> 
                            @csrf
                            <button class="btn-dlt">Delete</button>
                        </form>
                    </div>
                    {{-- bagian middleware button untuk pengunjung member --}}
                    @else
                    <div class="btn-admin">
                        <form action="{{ url('cart') }}/{{$p->id}}" method="Post" enctype="multipart/form-data" class="d-inline"> 
                            @csrf
                            <button class="btn-add">Add To Cart</button>
                        </form>
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
