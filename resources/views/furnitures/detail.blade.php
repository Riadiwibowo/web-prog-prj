@extends('layouts.main')
@section('container')
<div class="text-center">
    <h3>{{$pr->name}}</h3>
</div>



<div class="row justify-content-center">
    <div class="col-md-5">
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src={{Storage::url( $pr->path)}} alt="1" class="img-fluid"> 
                </div>
                
                <div class="col-md-8">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>Name</td>
                                <td>:</td>
                                <td>{{ $pr->name }}</td>
                            </tr>

                            <tr>
                                <td>Price</td>
                                <td>:</td>
                                <td>{{ $pr->price }}</td>
                            </tr>

                            <tr>
                                <td>Type</td>
                                <td>: </td>
                                <td>{{ $pr->type }}</td>
                            </tr>

                            <tr>
                                <td>Color</td>
                                <td>: </td>
                                <td>{{ $pr->color }}</td>
                            </tr>
                        </tbody>
                    </table>

                </div>    
            </div>
            <div class="text-center">
                <form action="{{url()->previous()}}" method="GET" enctype="multipart/form-data"> 
                    <button class="btn-previous">Previous</button>
                </form>
                @guest
                <button class="btn-add">Add To Cart</button>
            </div>
                @else
                @auth  
                @if (Auth::user()->role=='1')
                <button class="btn-updt"><a href="{{ url('update', $pr->id) }}">Update</a></button>
                <button class="btn-dlt">Delete</button>
            </div>
                @else
                <button class="btn-add">Add To Cart</button>
            </div>
                @endif
                @endauth  
                @endguest
        </div>
    </div> 
</div>
@endsection


