<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- boostrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12 mt-5">
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
                        <td class="text-center"><a href="" class="btn btn-primary btn-sm">View</a></td>
                        <td class="text-center"><a href="" class="btn btn-warning btn-sm">Update</a></td>
                        <td class="text-center"><a href="" class="btn btn-danger btn-sm">Delete</a></td>
                        </tr>
                    @endforeach
                        
                </table>
                <div>
                    {{$users->links()}}
                </div>
            </div>
        </div>
    </div>
</body>
</html>