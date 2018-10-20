<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show a specific Student</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

<br>
<div class="container">

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Showing student information</h3>
        </div>
        <div class="panel-body">

            <h1>{{ $student->name }}</h1>
            <P>{{ $student->mobile }}</P>

        </div>
    </div>

</div>

</body>
</html>