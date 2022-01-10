@extends('layouts.main')
@section('container')

<div class="text-center">
    <h3>{{ Auth::user()->name }}'s Profile</h3> 
</div>

<div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card ">
                <div class="card-body">  
                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label">Full Name</label>
                            <div class="col-sm-10">
                                <p> {{ Auth::user()->name }}</p>
                            </div>  
                        </div>
                        <div class="form-group row">
                            <label for="price" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <p> {{ Auth::user()->email }}</p>
                            </div> 
                        </div>
                        <div class="form-group row">
                            <label for="price" class="col-sm-2 col-form-label">Role</label>
                            <div class="col-sm-10">
                                <p> {{ Auth::user()->role }}</p>
                            </div> 
                        </div>
                        <div class="text-center">
                            <button class="btn-updt"><a href="{{ url('update') }}">Logout</a></button>
                            <button class="btn-updt"><a href="{{ url('update/profile') }}">View All User's Transaction</a></button>
                            <button class="btn-updt"><a href="{{ url('update',  Auth::user()->id) }}">Update</a></button>
                        </div>

                </div>
            </div>
        </div>
    
</div>

@endsection