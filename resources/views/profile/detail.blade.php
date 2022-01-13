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
<<<<<<< HEAD
                            <label for="name" class="col-sm-2 col-form-label">Full Name</label>
=======
                            <label for="name" class="col-sm-3 col-form-label bg-primary text-white">Full Name</label>
>>>>>>> dd56aec3bab2d9ea165b6e45270ab9a7fbd6b40a
                            <div class="col-sm-9 border border-primary">
                                <p> {{ Auth::user()->name }}</p>
                            </div>  
                        </div>
                        <div class="form-group row mb-2">
<<<<<<< HEAD
                            <label for="price" class="col-sm-2 col-form-label">Email</label>
=======
                            <label for="price" class="col-sm-3 col-form-label bg-primary text-white">Email</label>
>>>>>>> dd56aec3bab2d9ea165b6e45270ab9a7fbd6b40a
                            <div class="col-sm-9 border border-primary">
                                <p> {{ Auth::user()->email }}</p>
                            </div> 
                        </div>
<<<<<<< HEAD
                        @if (Auth::user()->role == 'member')
                        <div class="form-group row mb-2">
                            <label for="price" class="col-sm-2 col-form-label">Address</label>
                            <div class="col-sm-9 border border-primary">
                                <p> {{ Auth::user()->address }}</p>
                            </div> 
                        </div>

                        <div class="form-group row mb-2">
                            <label for="price" class="col-sm-2 col-form-label">Gender</label>
                            <div class="col-sm-9 border border-primary">
                                <p> {{ Auth::user()->gender }}</p>
                            </div> 
                        </div>
                        @endif
                    
                        <div class="form-group row mb-2">
                            <label for="price" class="col-sm-2 col-form-label">Role</label>
=======
                        <div class="form-group row mb-2">
                            <label for="price" class="col-sm-3 col-form-label bg-primary text-white">Role</label>
>>>>>>> dd56aec3bab2d9ea165b6e45270ab9a7fbd6b40a
                            <div class="col-sm-9 border border-primary">
                                <p> {{ Auth::user()->role }}</p>
                            </div> 
                        </div>
                        <div class="text-center mb-2">
<<<<<<< HEAD
                            <form id="logout-form" action="" method="POST" class="d-none">
                                @csrf
                                
                            </form>
                            <button class="btn-updt"><a class="text-dark text-decoration-none" href="{{ route('logout') }}"onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                Logout</a></button>
                            <button class="btn-updt"><a class="text-dark text-decoration-none" href="{{ url('transaction')}}/{{Auth::user()->id}} ">View All User's Transaction</a></button>
                            <button class="btn-updt"><a class="text-dark text-decoration-none" href="{{ url('update/profile') }}">Update</a></button>
=======
                            <button class="btn-updt"><a class="text-dark text-decoration-none" href="{{ url('update') }}">Logout</a></button>
                            <button class="btn-updt"><a class="text-dark text-decoration-none" href="{{ url('update/profile') }}">View All User's Transaction</a></button>
                            <button class="btn-updt"><a class="text-dark text-decoration-none" href="{{ url('update',  Auth::user()->id) }}">Update</a></button>
>>>>>>> dd56aec3bab2d9ea165b6e45270ab9a7fbd6b40a
                        </div>
                    

                </div>
            </div>
        </div>
    
</div>

@endsection
