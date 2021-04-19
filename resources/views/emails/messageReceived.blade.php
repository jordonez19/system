<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mails</title>
</head>
<body>

    <h1>New Mail: {{$msg['name']}}</h1>
    <h3> {{$msg['email'] }}</h3>
    <h3> {{$msg['subject'] }}</h3>
    <p> {{$msg['comments']}} </p>


</body>
</html>
