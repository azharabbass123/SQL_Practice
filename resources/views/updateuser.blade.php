@extends ('layout')

@section('title')
Update User Data
@endsection

@section('content')
<form action="{{route('user.update', $user->id)}}" method="post">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="first_name" class="form-label">First Name</label>
        <input type="text" id="first_name" value="{{$user->first_name}}" name="first_name" class="form-control">
    </div>
    <div class="mb-3">
        <label for="last_name" class="form-label">Last Name</label>
        <input type="text" id="last_name" value="{{$user->last_name}}" name="last_name" class="form-control">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" id="email" value="{{$user->email}}" name="email" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-success">save</button>
    </div>
</form>
@endsection