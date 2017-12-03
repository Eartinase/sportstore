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
  <h1 align="center" >Category</h1>
  <div align="right">
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addCategory">Create Category</button>

  </div>
  <br>
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
            <td>
              <button type="button" class="buttValue btn btn-info" data-toggle="modal" data-target="#EditCat" value="{{ $d->CatId }}">Edit</button>&nbsp;
              <button class="btn btn-danger" name="id" value="{{$d->CatId}}" form="delCat">Delete</button>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>

      <form action="<?php echo url('/'); ?>/delCat" id="delCat"></form>

      <!-- Modal -->
      <div class="modal fade" id="addCategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">New Category</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="<?php echo url('/'); ?>/createCat">
              <div class="modal-body">

                Category Name: 
                <input type="text" name="catName" class="form-control">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Confirm</button>
              </div>
            </form>
          </div>
        </div>
      </div>

      <!-- Modal -->
      <div class="modal fade" id="EditCat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Edit Cat</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="{{url('/')}}/editCat">
              <div class="modal-body">

                New Category Name: 
                <input type="text" name="catName" class="form-control">
                <input type="text" id="id" value="" name="catId" style="display:none;">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Confirm</button>
              </div>
            </form>
          </div>
        </div>
      </div>

     
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>
      $(document).ready(function(){
        $(".buttValue").click(function(){
          $("#id").val($(this).val());
        });
      });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
  </html>
