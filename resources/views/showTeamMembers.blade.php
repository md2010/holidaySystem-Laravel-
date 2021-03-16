<!DOCTYPE html>

<html>

<link rel="stylesheet" type="text/css" href="{{ asset('css/table.css') }}">

<head>
    <meta charset="utf-8">
    <title>Twig</title>

</head>
<body>

<h2> Team Members </h2>
    
@foreach ($member as $tl)

    <form method="post" action="{{ route('processButtonActionUser', $tl['id']) }}">
        @csrf 
        <label> ID: </label> <br>
        <input type="text" id="1" name="id" value = {{ $tl['id'] }} readonly></input> <br><br>
        <label> First Name: </label> <br>
        <input type="text" id="2" name="firstName" value={{ $tl['firstName'] }}></input> <br><br>
        <label> Last Name: </label> <br>
        <input type="text" id="3" name="lastName" value={{ $tl['lastName'] }}></input> <br><br>
        <label> Email: </label> <br>
        <input type="text" id="4" name="email" value={{ $tl['email'] }}></input> <br><br>
        <label> Position: </label> <br>
        <input type="text" id="4" name="position" value={{ $tl['position'] }}></input> <br><br>
        <label> Password: </label> <br>
        <input type="text" id="5" name="password" value={{ $tl['password'] }}></input> <br><br>
        <label> Team ID: </label> <br>
        <input type="text" id="6" name="team_id" value={{ $tl['team_id'] }}></input> <br><br>
        <label> Holiday (available): </label> <br>
        <input type="text" id="7" name="availableDays" value={{ $tl['availableDays'] }}></input> <br><br>

        @if (Request::is('admin/*')) 
            <input type="submit" value="Edit" name="button"> <br><br>
            <input type="submit" value="Delete" name="button"> <br><br>
        @endif

        @if($errors->any())
            <p style="color:red;"> {{ $errors->first() }} </p>
        @endif
        
    </form>
    <br><br><br><br>

@endforeach

</body>
</html>