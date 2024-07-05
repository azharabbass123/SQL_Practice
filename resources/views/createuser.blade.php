@extends('layout')

@section('title')
Create New Record
@endsection

@section('content')
<form action="{{route('user.store')}}" method="post">
    @csrf
    <div class="mb-3">
        <label for="first_name" class="form-label">First Name</label>
        <input type="text" id="first_name" name="first_name" class="form-control">
    </div>
    <div class="mb-3">
        <label for="last_name" class="form-label">Last Name</label>
        <input type="text" id="last_name" name="last_name" class="form-control">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" id="email" name="email" class="form-control">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" id="password" name="password" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-success">save</button>
    </div>
</form>

@endsection