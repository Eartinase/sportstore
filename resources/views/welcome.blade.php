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
        <?php $i = 1 ?>
        @foreach ($data as $d)
        @if($i <= 3)
        <div class="card col-4" style="width: 20rem;">
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
        <div class="card col-4" style="width: 20rem;">
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

</body>
</html>
