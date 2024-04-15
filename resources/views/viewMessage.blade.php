<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/viewMessage.css')}}">
    <link rel="stylesheet" href="{{ asset('css/nav.css') }}">
</head>

<body>
    @include('layout.nav')
    <table>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>email</th>
            <th>phnum</th>
            <th>Message</th>
            <th>Operation</th>
        </tr>
        @foreach($messages as $message)
        @can('view',$message)
        <tr>
            <td>{{$message->id}}</td>
            <td>{{$message->name}}</td>
            <td>{{$message->email}}</td>
            <td>{{$message->phnum}}</td>
            <td>{{$message->Message}}</td>
            <td><a href="/dMessage/{{$message->id}}">Delete</a><a href="/uMessage/{{$message->id}}">Update</a></td>
        </tr>
        @endcan
        @endForeach

    </table>
</body>

</html>