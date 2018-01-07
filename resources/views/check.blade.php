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
  
</head>
<body>
 @include('navbar')
 <div class="container">
  <h1 align="center">Product with {{$catName}} Category</h1>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col"> Product Name </th>
        <th scope="col"> Price </th>
        <th scope="col"> Action </th>
      </tr>
    </thead>
    
    <tbody>

      <?php $i=1 ?>
      @foreach ($query as $d)
      <tr>
        <td>{{$i++}}</td>
        <td>{{$d->Name}}</td>
        <td>{{$d->Price}}</td>
        <td>       
          <button class="btn btn-danger" name="id" value="{{$d->Id}}" form="delProduct">Delete</button>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

  <form action="<?php echo url('/'); ?>/delProduct" id="delProduct"></form>

</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>