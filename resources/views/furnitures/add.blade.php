@extends('layouts.main')
@section('container')

<div class="text-center text-white">
    <h3>Add Furniture</h3>
</div>
<div class="row justify-content-center">
    <div class="col-md-5">
        <div class="card ">
            <div class="card-body">
                <form action="/add" method="POST" enctype="multipart/form-data" class="align-items-center"> 
                    @csrf
                    <div class="form-group row pt-2">
                        <label for="name" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" placeholder="Enter furniture's name" name="name">
                        </div>
                    </div>

                    <div class="form-group row pt-2">
                        <label for="price" class="col-sm-2 col-form-label">Price</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="price" placeholder="Enter furniture's price" name="price">
                        </div> 
                    </div>

                    <div class="form-group row pt-2">
                        <label for="type" class="col-sm-2 col-form-label">Type</label>
                        <div class="d-grid gap-2 col-10">
                            <select name="type" class="form-select" id="type">
                                <option value="Table">Table</option>
                                <option value="Chair">Chair</option>
                                <option value="Bed">Bed</option>
                            </select>
                        </div> 
                    </div>

                    <div class="form-group row pt-2">
                        <label for="color"class="col-sm-2 col-form-label">Color</label>
                        <div class="d-grid gap-2 col-10">
                            <select name="color" class="form-select" id="type">
                                <option value="White">White</option>
                                <option value="Black">Black</option>
                            </select>
                        </div> 
                    </div>

                    <div class="form-group row pt-2">
                        <label for="image"class="col-sm-2 col-form-label">Gambar</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" name="image" id="image">
                        </div> 
                    </div>

                    <div class="text-center pt-2">
                        <button class="align-items-center">Add Furniture</button>
                    </div>
                </form>
            </div>
        </div>
    </div> 
</div>

@if(session()->has('sukses'))
<h4>{{session('sukses')}}</h4>
@elseif(session()->has('error'))
<h4>{{session('error')}}</h4>
@endif

@endsection