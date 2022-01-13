@extends('layouts.main')
@section('container')

<div class="text-center text-white">
    <h3>{{ Auth::user()->name }}'s Profile</h3> 
</div>

<div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card ">
                <div class="card-body">  
                        <div class="form-group row mb-2">
                            <label for="name" class="col-sm-3 col-form-label bg-primary text-white">Full Name</label>
                            <div class="col-sm-9 border border-primary">
                                <p> {{ Auth::user()->name }}</p>
                            </div>  
                        </div>
                        <div class="form-group row mb-2">
                            <label for="price" class="col-sm-3 col-form-label bg-primary text-white">Email</label>
                            <div class="col-sm-9 border border-primary">
                                <p> {{ Auth::user()->email }}</p>
                            </div> 
                        </div>
                        <div class="form-group row mb-2">
                            <label for="price" class="col-sm-3 col-form-label bg-primary text-white">Role</label>
                            <div class="col-sm-9 border border-primary">
                                <p> {{ Auth::user()->role }}</p>
                            </div> 
                        </div>
                        <div class="text-center mb-2">
                            <button class="btn-updt"><a class="text-dark text-decoration-none" href="{{ url('update') }}">Logout</a></button>
                            <button class="btn-updt"><a class="text-dark text-decoration-none" href="{{ url('update/profile') }}">View All User's Transaction</a></button>
                            <button class="btn-updt"><a class="text-dark text-decoration-none" href="{{ url('update',  Auth::user()->id) }}">Update</a></button>
                        </div>

                </div>
            </div>
        </div>
    
</div>

@endsection