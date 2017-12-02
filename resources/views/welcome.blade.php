<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sport Store</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <!-- Styles -->
    <style>    
    img{
        height: 50%;
        width: auto;
    }   
    .price{
        font-weight: bold;
    }    
</style>
</head>
<body>
   @include('navbar')

   <div class="container">
     <h1 align="center">Product List</h1>

     <div class="row">
        <?php $i = 0 ?>
        @foreach ($data as $d)
        @if($i < 4)
        <div class="card col-3" style="width: 20rem;">
            <img class="card-img-top" src="{{ $d->Image }}" alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title"> {{ $d->Name }} </h4>
                <p class="card-text"> {{ $d->Description }} <br> <span class="price">Price:</span> {{ $d->Price }} </p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
        <?php $i++ ?>
        @else
    </div>
    <br>
    <div class="row">
        <?php $i = 1 ?>
        <div class="card col-3" style="width: 20rem;">
            <img class="card-img-top" src="{{ $d->Image }}" alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title"> {{ $d->Name }}</h4>
                <p class="card-text"> {{ $d->Description }} <br> <span class="price">Price:</span> {{ $d->Price }}</p>

                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>

        @endif

        @endforeach
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>
