@extends('layouts.auth-master')

@section('content')
    <form action="/register" method="POST">
        @csrf
        <h1>Create account</h1>
        @include('layouts.partials.massage')
        <div class="form-floating mb-3">
            <input type="email" name="email" placeholder="Email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="form-floating mb-3">
            <input type="text" name="username" class="form-control" id="exampleInputUsername" placeholder="Username">
            <label for="exampleInputUsername" class="form-label">Username</label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            <label for="exampleInputPassword1" class="form-label">Password</label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword2" placeholder="Confirm Password">
            <label for="exampleInputPassword2" class="form-label">Confirm Password</label>
        </div>
        <div class="mb-3">
            <a href="/login">Login</a>
        </div>
        <button type="submit" class="btn btn-primary">Create Account</button>
    </form>
@endsection
