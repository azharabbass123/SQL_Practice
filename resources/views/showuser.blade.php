@extends ('layout')

@section('title')
User Details
@endsection

@section('content')

<table class="table table-striped table-bordered">
    <tr>
        <th width="180px">First Name: </th>
        <td>{{$user->first_name}}</td>
    </tr>
    <tr>
        <th width="180px">Last Name: </th>
        <td>{{$user->last_name}}</td>
    </tr>
    <tr>
        <th width="180px">Email: </th>
        <td>{{$user->email}}</td>
    </tr>

</table>
<a href="{{route('user.index')}}" class="btn btn-primary">Back</a>
@endsection