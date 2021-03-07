<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>ITBeep-Task</title>
</head>
<body>

<div class="container">
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h4>Hello: <span style="color: red"><b>{{$client['name']}}</b></span></h4>
        <h4>Your Mobile Number is: <span style="color: red"><b>{{$client['phone']}}</b></span></h4>
        <h4>Your are Selected Service is: <span style="color: red"><b>{{$client['choice']}}</b></span></h4>
        <h4>You are interested in this services in: <span style="color: red"><b>{{$client['time']}}</b></span></h4>
        <hr>
    </div>
</div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>
