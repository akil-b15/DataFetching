<!DOCTYPE html>

    <head>
        <meta charset="utf-8">
        <title>data</title>

    </head>
    <body>
      @foreach ($users as $user)
        {{$user->first_name}}
        {{$user->last_name}}
        {{$user->email}}
      @endforeach

    </body>
</html>
