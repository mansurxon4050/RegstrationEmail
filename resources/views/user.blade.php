<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>user</title>
</head>
<body>
<div class="container">
    <h6>user</h6>

    <table  class="table mt-5 ">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">email</th>
            <th scope="col">password</th>
            <th scope="col">role</th>
        </tr>
        </thead>
        <tbody>
        @foreach($all as $user)
            <tr>
                <th scope="row">{{$user->id}}</th>
                <td>{{$user->email}}</td>
                <td>{{$user->password}}</td>
                <td>{{$user->role}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

</body>
</html>
