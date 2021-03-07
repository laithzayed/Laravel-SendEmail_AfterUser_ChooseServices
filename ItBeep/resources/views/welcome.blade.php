<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
    </script>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>ITBeep Task</title>
</head>
<body>
<div class="container" style="text-align: center; margin-top: 20px">
    <img src="logo.png">

</div>
<div class="container col-6">
    <hr>
    <h5 style="text-align: center">ITBeep Task</h5>
    <hr>
    <form action="/" method="post" enctype="multipart/form-data">
        @csrf
        <h3><u>Enter your Information:</u></h3>
        <br>
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="name" required>
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Mobile Number</label>
            <input type="text" name="phone" class="form-control" id="phone" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div><hr>

        <h3><u>Choose your offer:</u></h3>
        <br>
        <input type="radio" class="btn-check" name="choice" id="offer#1" value="offer #1" checked autocomplete="off">
        <label class="btn btn-outline-primary col-3" for="offer#1" style="margin: 0% 6% 2% 0%">Choose offer #1</label>
        <input type="radio" class="btn-check " name="choice" id="offer#2" value="offer #2" autocomplete="off">
        <label class="btn btn-outline-primary col-3" for="offer#2" style="margin: 0% 6% 2% 0%">Choose offer #2</label>
        <input type="radio" class="btn-check" name="choice" id="offer#3" value="offer #3" autocomplete="off">
        <label class="btn btn-outline-primary col-3" for="offer#3" style="margin: 0% 6% 2% 0%">Choose offer #3</label><hr>

        <h3><u>When you prefer to set this order:</u></h3>
        <br>
        <input type="radio" class="btn-check" name="time" id="time#1" value="General inquiry" checked autocomplete="off">
        <label class="btn btn-outline-primary col-3" for="time#1" style="margin: 0% 6% 2% 0%">General inquiry</label>
        <input type="radio" class="btn-check " name="time" id="time#2" value="After one month" autocomplete="off">
        <label class="btn btn-outline-primary col-3" for="time#2" style="margin: 0% 6% 2% 0%">After one month</label>
        <input type="radio" class="btn-check" name="time" id="time#3" value="After one week" autocomplete="off">
        <label class="btn btn-outline-primary col-3" for="time#3" style="margin: 0% 6% 2% 0%">After one week</label><hr>

        <div class="d-grid gap-2">
            <button type="submit" id="#addform" class="btn btn-success">
                Press here to finish your order
            </button>
        </div>
    </form>
</div>

{{--@foreach($client as $client)--}}
{{--    <td>{{$client->name}}</td>--}}
{{--@endforeach--}}


{{--`@if(isset(name) === null)--}}
{{--    <div class="alert alert-success">add record successful</div>--}}
{{--@endif`--}}


<!-- Button trigger modal -->
<button type="submit" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#clientaddmodal" style="margin: 10px">
    PopUp-Button
</button>

<!-- Modal -->
<div class="modal " id="clientaddmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">





            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Understood</button>
            </div>
        </div>
    </div>
</div>



<script>
    $('#addform').on('submit'), function(e){
        e.preventDefault();

        $.ajax({
            type: "POST",
            url: "/",
            data: $('#addform').modal('hide'),
            success: function (response) {
                console.log(response)
                $('#studentaddmodal').modal('hide')
                alert("Data Saved");
            },
            error: function (error) {
                console.log(error)
                alert("Data Saved");
            }
        });
    };
</script>

<script>
    function submitForm(action)
    {
        document.getElementById('columnarForm').action = action;
        document.getElementById('columnarForm').submit();
    }
</script

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>
