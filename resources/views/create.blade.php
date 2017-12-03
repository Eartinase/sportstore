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
  <h1 align="center">Create Product</h1>

  <form action="<?php echo url('/'); ?>/createSubmit" >       
    Product Name: <input type="text" name="name"  class="form-control" required><br>
    Description: <textarea  class="form-control" name="desc" ></textarea><br>
    Category: <select  class="form-control" name="cat" required>
      <option value="">Please Select</option>
      @foreach ($data as $d)
      <option value="{{ $d->CatId }}">{{ $d->Name }}</option>
      @endforeach

    </select><br>
    Price: <input  class="form-control" type="number" name="price" required><br>
    Image URL: <input  class="form-control" type="text" name="image" required><br>
    <div align="center">
     <button type="submit" class="btn btn-success">Create Product</button>
   </div>
 </form>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>    
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

</body>
</html>
