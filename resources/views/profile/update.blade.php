@extends('layouts.main')
@section('container')
<<<<<<< HEAD
<div class="text-center">
    <h3>{{ __('Update Profile') }}</h3>
</div>
=======

{{-- <div class="row justify-content-center">
    <div class="col-md-5">
        <div class="card ">
            <div class="card-body">
                <form action="{{ url('update') }}" method="POST" enctype="multipart/form-data" class="align-items-center"> 
                    @csrf
                    <div class="form-group row"> 
                        <label for="name" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" placeholder="Enter furniture's name" name="name" value="{{Auth::user()->name}}">
                        </div>
                        
                    </div>
                    <div class="form-group row"> 
                        <label for="name" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" placeholder="Enter furniture's name" name="name" value="{{Auth::user()->email}}">
                        </div>
                        
                    </div>
                    <div class="form-group row"> 
                        <label for="name" class="col-sm-2 col-form-label">password</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" placeholder="Enter furniture's name" name="name" value="">
                        </div>
                        
                    </div>

                    <div class="text-center">
                        <button class="btn">Update Profile</button>
                    </div>
                    
                </form>
            </div>
        </div>
    </div> 
</div> --}}
>>>>>>> dd56aec3bab2d9ea165b6e45270ab9a7fbd6b40a

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
<<<<<<< HEAD
=======
                <div class="card-header text-center">{{ __('Update Profile') }}</div>
>>>>>>> dd56aec3bab2d9ea165b6e45270ab9a7fbd6b40a
                <div class="card-body">
                    <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Full Name') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{Auth::user()->name}}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{Auth::user()->email}}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        @if (Auth::user()->role == 'member')
                        <div class="row mb-3">
                            <label for="address" class="col-md-4 col-form-label text-md-end">{{ __('Address') }}</label>
                            <div class="col-md-6">
                                <input id="address" type="address" class="form-control @error('address') is-invalid @enderror" name="addess" value="{{Auth::user()->address}}" required autocomplete="address">
                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        @endif
                        

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update Profile') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection