@extends('layouts.main')
@section('container')
<div class="text-center">
    <h3>Update Furniture</h3>
</div>
<div class="row justify-content-center">
    <div class="col-md-5">
        <div class="card ">
            <div class="card-body">
                <form action="{{ url('update',$pr->id) }}" method="POST" enctype="multipart/form-data" class="align-items-center"> 
                    @csrf
                    <div class="form-group row"> 
                        <label for="name" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" placeholder="Enter furniture's name" name="name" value="{{$pr->name}}">
                        </div>
                        
                    </div>
                    <div class="form-group row">
                        <label for="price" class="col-sm-2 col-form-label">Price</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="price" placeholder="Enter furniture's price" name="price" value="{{$pr->price}}">
                        </div> 
                    </div>
                    <div class="form-group row">
                        <label for="type" class="col-sm-2 col-form-label">Type</label>
                        <div class="col-sm-10">
                            <select name="type" class="form-control"id="type" value="{{$pr->type}}" >
                                <option value="table">table</option>
                                <option value="chair">chair</option>
                                <option value="lamp">lamp</option>
                            </select>
                        </div> 
                    </div>
    
                    <div class="form-group row">
                        <label for="color"class="col-sm-2 col-form-label">Color</label>
                        <div class="col-sm-10">
                            <select name="color" class="form-control" id="color" value="{{$pr->color}}">
                                <option value="white">white</option>
                                <option value="black">black</option>
                            </select>
                        </div> 
                    </div>
    
                    <div class="form-group row">
                        <label for="image"class="col-sm-2 col-form-label">Gambar</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" name="image" id="image" value="{{$pr->image}}">
                        </div> 
                    </div>
                    <div class="text-center">
                        <button class="btn">Update Furniture</button>
                    </div>
                    
            

                </form>
            </div>
        </div>
    </div> 
</div>

@endsection