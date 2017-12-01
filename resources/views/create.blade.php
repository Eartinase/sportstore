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
        {{ csrf_field() }}
        Product Name: <input type="text" name="name"  class="form-control" required><br>
        Description: <textarea  class="form-control" name="desc" ></textarea><br>
        Category: <select  class="form-control" required>
            <option value="">Please Select</option>
          @foreach ($data as $d)
          <option value="{{ $d->Name }}">{{ $d->Name }}</option>
          @endforeach

      </select><br>
      Price: <input  class="form-control" type="number" name="price" required><br>
      Image URL: <input  class="form-control" type="text" name="image" required><br>
      <div align="center">
       <button type="submit" class="btn btn-success">Confirm</button>
   </div>
</form>
</div>



</body>
</html>
