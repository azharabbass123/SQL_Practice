@extends ('layout')

@section('title')
All Users Data
@endsection

@section('content')
<div class="row">
    <div class="col-8">
        @if (session('status'))
            <div class="alert alert-success">
                {{session('status')}}
            </div>
        
        @endif
    </div>
</div>
<div class="my-2">
<a href="{{route('user.create')}}" class="btn btn-primary btn-sm">Add new</a>
</div>
<table class="table table-bordered table-striped">
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>View</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                    @foreach ($users as $user)
                    <tr>
                        <td class="text-center">{{$user->first_name}}</td>
                        <td class="text-center">{{$user->last_name}}</td>
                        <td class="text-center">{{$user->email}}</td>
                        <td class="text-center"><a href="{{route('user.show', $user->id)}}" class="btn btn-primary btn-sm">View</a></td>
                        <td class="text-center"><a href="{{route('user.edit', $user->id)}}" class="btn btn-warning btn-sm">Update</a></td>
                        <td class="text-center"><a href="" class="btn btn-danger btn-sm">Delete</a></td>
                        </tr>
                    @endforeach
                        
                </table>
                <div>
                    {{$users->links()}}
                </div>
@endsection