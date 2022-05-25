@extends('layouts.app')

@section('content')
    <form action="{{ route('postLogin') }}" method="POST">
        {{ csrf_field() }}
        <div class="form-group mb-3">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
        </div>
        <div class="form-group mb-3">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
@endsection
