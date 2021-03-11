<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <title>Twig</title>
</head>
<body>

<h2> Team Leaders </h2>

@foreach ($leader as $tl)

    <form method="post" action="{{ route('processButtonActionUser', $tl->id) }}">
    @csrf 
    <label> ID: </label> <br>
            <input type="text" id="1" name="data[]" value = {{ $tl->id }} readonly></input> <br><br>
            <label> First Name: </label> <br>
            <input type="text" id="2" name="data[]" value={{ $tl->firstName }}></input> <br><br>
            <label> Last Name: </label> <br>
            <input type="text" id="3" name="data[]" value={{ $tl->lastName }}></input> <br><br>
            <label> Username: </label> <br>
            <input type="text" id="4" name="data[]" value={{ $tl->email }}></input> <br><br>
            <label> Password: </label> <br>
            <input type="text" id="5" name="data[]" value={{ $tl->passwordVisible }}></input> <br><br>
            <label> Team ID: </label> <br>
            <input type="text" id="6" name="data[]" value={{ $tl->team_id }}></input> <br><br>
             <label> Holiday (available): </label> <br>
            <input type="text" id="7" name="data[]" value={{ $tl->availableDays }}></input> <br><br>

            <input type="submit" value="Edit" name="button"> <br><br>
            <input type="submit" value="Delete" name="button"> <br><br>
            <br><br>
    </form>

@endforeach

</body>
</html>