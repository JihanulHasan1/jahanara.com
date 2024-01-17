<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/button.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">jahanara.com</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/jahanara.com/UseDashboard">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/jahanara.com/Donations" tabindex="-1" >Donate</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/jahanara.com/Register" tabindex="-1" >Register Member</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
<div class="donation">
    
<button class="button-6" role="button">Donation Now</button>
</div>
    <div class="donations">
        @foreach($allDonations as $d)
        <div class="card" style="">
            <div class="card-body">
                <h5 class="card-title white">Name: {{$d->Name}}</h5>
                <label class="label white">Email : {{$d->Email}}</label><br>
                <label class="label white">Ammount : {{$d->Ammount}}</label> <br>
                <a href="#" class="btn btn-primary white">View Details</a>
            </div>
        </div>
        @endforeach
    </div>
</body>

</html>