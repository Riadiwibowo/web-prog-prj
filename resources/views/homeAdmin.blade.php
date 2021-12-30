@extends('Admin/masterAdmin')
@section('middle-container')
<div class="header-login">
    <h3>Welcome, Admin to JH Furniture</h3>
</div>
<div class="product-container">
    <div class="product-row">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, eos sint suscipit, praesentium iure, atque incidunt cupiditate quaerat ullam repellendus nulla necessitatibus maiores quam? Qui aspernatur quisquam in facere tempore.</p>
        <div class="deskripsi">
            <div class="product-name">
    
            </div>
            <div class="product-price">
    
            </div>
                <button class="updt">Update</button>
                <button class="dlete">Delete</button>
        </div>
    </div>

    <div class="product-row">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, eos sint suscipit, praesentium iure, atque incidunt cupiditate quaerat ullam repellendus nulla necessitatibus maiores quam? Qui aspernatur quisquam in facere tempore.</p>
        <div class="deskripsi">
            <div class="product-name">
    
            </div>
            <div class="product-price">
    
            </div>
                <button class="updt">Update</button>
                <button class="dlete">Delete</button>
        </div>
    </div>

    <div class="product-row">
        <img src={{url('/assets/lols.jpg')}} alt="1">
        <div class="product-detail">
            <div class="product-name">
                <h3>dolor</h3>
            </div>
            <div class="product-price">
                <h3>si jamet</h3>
            </div>
            <div class="btn-admin">
            
                <button class="btn-updt">Update</button>
                <button class="btn-dlt">Delete</button>
            </div>
        </div>
    </div>

    <div class="product-row">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, eos sint suscipit, praesentium iure, atque incidunt cupiditate quaerat ullam repellendus nulla necessitatibus maiores quam? Qui aspernatur quisquam in facere tempore.</p>
        <div class="product-detail">
            <div class="product-name">
    
            </div>
            <div class="product-price">
    
            </div>
                <button class="updt">Update</button>
                <button class="dlete">Delete</button>
        </div>
    </div>
    
</div>
</div>  

@endsection