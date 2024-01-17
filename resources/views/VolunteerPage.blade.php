<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="/css/style.css" rel="stylesheet">
    <title>Dashboard</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">jahanara.com</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/jahanara.com/Register" tabindex="-1">Register Member</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/jahanara.com/Register" tabindex="-1">More About Jahanara.com</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                <form action="/jahanara.com"> <button class="btn " action=>Logout</button></form>

            </div>
        </div>
    </nav>

    <div class="topPart">

        <div class="tasks">
            @foreach($allTask as $t)
            <div class="TaskCard" style="">
                <div class="card-body">
                    <h5 class="card-title">User ID: {{$t->UserId}}</h5>
                    <label class="label">TASK : {{$t->task}}</label><br>
                    <label class="label">Time : {{$t->Time}}</label> <br>
                    <label class="label">Floor : {{$t->Floor}}</label> <br>
                    <label class="label">Manager : {{$t->Manager}}</label> <br>
                    <a href="#" class="btn btn-primary">View Details</a>
                </div>
            </div>
            @endforeach
        </div>

    </div>

    <div class="VolunteerPost">
        <p>
            <button style="margin-top: 10px;"class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                Post Feed Back
            </button>
        </p>
        <div class="collapse" id="collapseExample">
            <div class="card card-body">
                <h5 class="white">Type Your Message</h5>
                <input style="height:120px; width:200px" type="text" name="email" class="form-control">
                <button style="margin-top:10px;"class="button">Send</button>
            </div>
        </div>
    </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>