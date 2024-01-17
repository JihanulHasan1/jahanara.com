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
                        <a class="nav-link active" aria-current="page" href="/jahanara.com/Dashboard">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('ManagerDonation')}}" tabindex="-1">View Donations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/jahanara.com/Members" tabindex="-1">View Members</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/jahanara.com/Register" tabindex="-1">Register Member</a>
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
    <h1 style="text-align: center;">Main Building</h1>

    <div class="MainBuilding">

    @foreach($everything as $e)
        <div class="floor">
            <div class="FloorCard" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title white"> Floor: {{$e->Floor}}</h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Flate No: {{$e->Flate_No}}</li>
                    <li class="list-group-item">Members Number: {{$e->Members}}</li>
                    <li class="list-group-item">Flate Expense: {{$e->Expense}}</li>
                    <li class="list-group-item">Flate Manager: {{$e->Manager}}</li>
                    <li class="list-group-item">Ill Patient Number: {{$e->Ill_Patient}}</li>
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                    Patients
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body"></div>
                            </div>
                        </div>
                    </div>
                </ul>
                <div class="card-body">

                    <a href="#" class="card-link">View Details</a>
                    <a href="#" class="card-link">Send To </a>
                </div>

            </div>
        </div>
        @endforeach
    </div>

    <div class="bottom">
        <p>
            <a class="btn btn-primary" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Toggle first element</a>
            <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Toggle second element</button>
        </p>
        <div class="row">
            <div class="col">
                <div class="collapse multi-collapse" id="multiCollapseExample1">
                    <div class="card card-body">
                        Some placeholder content for the first collapse component of this multi-collapse example. This panel is hidden by default but revealed when the user activates the relevant trigger.
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="collapse multi-collapse" id="multiCollapseExample2">
                    <div class="card card-body">
                        Some placeholder content for the second collapse component of this multi-collapse example. This panel is hidden by default but revealed when the user activates the relevant trigger.
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>