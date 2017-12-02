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
  <h1 align="center">Category</h1>

  <table class="table">
    <thead>
      <tr>

        <th scope="col">#</th>
        <th scope="col"> Category </td>
        <th scope="col"> Action </td>

      </tr>
    </thead>
    <tbody>
      <?php $i=1 ?>
      @foreach ($data as $d)
      <tr>
        <td>{{$i++}}</td>
        <td>{{$d->Name}}</td>
        <td><button class="btn btn-info">Edit</button>&nbsp;<button class="btn btn-danger">Delete</button></td>
      </tr>
      @endforeach
    </tbody>
  </table>

  
</div>
</body>
</html>
