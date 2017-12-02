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
    height: 70pt !important;
    width: auto !important;
  }   
  .price{
    font-weight: bold;
  }    
</style>
</head>
<body>
 @include('navbar')

 <div class="container">
  <h1 align="center">Edit Product</h1>
  @foreach ($data as $d)
  <h2 align="center">{{ $d->Name }}</h2>


  <form action="<?php echo url('/'); ?>/editSubmit" >
   <input type="text" name="id" style="display:none" value="{{$d->Id}}">
    Product Name: <input type="text" name="name" value="{{$d->Name}}" class="form-control" required><br>
    Description: <textarea  class="form-control" name="desc" >{{ $d->Description }}</textarea><br>
    Category: <select  class="form-control" name="cat" required>
      <option value="">Please Select</option>
      @foreach ($cat as $c)
      <option value="{{ $d->CatId }}">{{ $c->Name }}</option>
      @endforeach

    </select><br>
    Price: <input  class="form-control" type="number" name="price" value="{{$d->Price}}"  required><br>

    Image URL: <br>
    <img src="{{$d->Image}}" class="col-md">

    <input class="col-md form-control" type="text" name="image" value="{{$d->Image}}" required><br>
    <div align="center">
     <button type="submit" class="btn btn-success">Confirm</button>
   </div>
   @endforeach
 </form>
</div>



</body>
</html>
