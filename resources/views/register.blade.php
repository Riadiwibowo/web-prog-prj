@extends('layouts/main')
@section('middle-container')
<div class="header-login">
    <h3>Register</h3>
</div>
<div class="login">
    <form>
    <div class="input">
            <label for="name">Full Name</label>
            <input type="text" class="inputLength" id="name" placeholder="Enter your full name" name="nama">
        </div>
        <div class="input">
            <label for="email">Email</label>
            <input type="email" class="inputLength" id="email" placeholder="Enter your email" name="email">
        </div>
        <div class="input">
            <label for="pw">Password</label>
            <input type="password" class="inputLength" id="pw" placeholder="Enter your password" name="pw">
        </div>
        <div class="input3">
            <label for="address">Address</label>
            <input type="text" class="inputLength" id="address" placeholder="Enter your address" name="address">
        </div>
        <div class="input4">
            <div class="input4-text">
                <p>Gender</p>
            </div>
            <div class="input4-radio">
                <input type="radio" id="male" name="male">
                <label for="male">Male</label>
                <input type="radio" id="female" name="female">
                <label for="female">Female</label>
            </div>
        </div>
        <button class="btn">Register</button>
    </form>
</div>
@endsection