@extends('layouts/main')
@section('container')
{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> --}}

<div class="text-center">
    <h3>View Furniture</h3>
</div>
<div class="row justify-content-center">
    @if ($pr->count())
    @foreach($pr as $p)
        <div class="col-md-3">
            <div class="card text-white text-center bg-dark" style="width: 16rem;">
                <a href="{{url('furnitures')}}/{{$p->id}}" >
                    <img src={{Storage::url( $p->path)}} alt="1" class="img-fluid"> 
                </a> 
                <div class="card-body ">
                    <h5 class="card-title"> {{ $p->name }} </h5>
                    <p class="card-text"> {{ $p->price }} </p>
                    
                    {{-- bagian middleware button untuk pengunjung non-member --}}
                    @guest 
                    <div class="btn-admin">
                        <button class="btn-add">Add To Cart</button>
                        
                    </div>

                    @else
                    {{-- bagian middleware button untuk admin --}}
                    @if (Auth::user()->role=='admin')
                    <div class="btn-admin">
                        <button class="btn-updt"><a href="{{ url('update', $p->id) }}">Update</a></button>
                        <form action="{{ url('delete', $p->id) }}" method="POST" enctype="multipart/form-data" class="d-inline"> 
                            @csrf
                            <button class="btn-dlt">Delete</button>
                        </form>                               
                    </div>
                    {{-- bagian middleware button untuk pengunjung member --}}
                    @else
                    <div class="btn-admin">
                        <button class="btn-add">Add To Cart</button>
                    </div>
                    @endif
                    @endguest
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