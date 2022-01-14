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
                        <label for="name" class="col-sm-2 col-form-label">Full Name</label>
                        <div class="col-sm-9 border border-primary">
                            <p> {{ Auth::user()->name }}</p>
                        </div>  
                    </div>
                    <div class="form-group row mb-2">
                        <label for="price" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-9 border border-primary">
                            <p> {{ Auth::user()->email }}</p>
                        </div> 
                    </div>
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
                        <div class="col-sm-9 border border-primary">
                            <p> {{ Auth::user()->role }}</p>
                        </div> 
                    </div>
                    <div class="text-center mb-2">
                        <form id="logout-form" action="" method="POST" class="d-none">
                            @csrf
                            
                        </form>
                        <button class="btn-updt"><a class="text-dark text-decoration-none" href="{{ route('logout') }}"onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                            Logout</a></button>
                        <button class="btn-updt"><a class="text-dark text-decoration-none" href="{{ url('transaction')}}/{{Auth::user()->id}} ">View All User's Transaction</a></button>
                        <button class="btn-updt"><a class="text-dark text-decoration-none" href="{{ url('update/profile') }}">Update</a></button>
                    </div>
            </div>
        </div>
    </div>
</div>

@endsection
